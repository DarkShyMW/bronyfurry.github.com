<?php /** @file */

namespace Zotlabs\Daemon;

use Zotlabs\Lib\Libzot;
use Zotlabs\Lib\Libzotdir;

class Onedirsync {

	static public function run($argc, $argv) {

		logger('onedirsync: start ' . intval($argv[1]));

		if (($argc > 1) && (intval($argv[1])))
			$update_id = intval($argv[1]);

		if (!$update_id) {
			logger('onedirsync: no update');
			return;
		}

		$r = q("select * from updates where ud_id = %d limit 1",
			intval($update_id)
		);

		if (!$r)
			return;

		if (($r[0]['ud_flags'] & UPDATE_FLAGS_UPDATED) || (!$r[0]['ud_addr']))
			return;

		// Have we probed this channel more recently than the other directory server
		// (where we received this update from) ?
		// If we have, we don't need to do anything except mark any older entries updated

		$x = q("select * from updates where ud_addr = '%s' and ud_date > '%s' and ( ud_flags & %d )>0 order by ud_date desc limit 1",
			dbesc($r[0]['ud_addr']),
			dbesc($r[0]['ud_date']),
			intval(UPDATE_FLAGS_UPDATED)
		);
		if ($x) {
			q("update updates set ud_flags = ( ud_flags | %d ) where ud_addr = '%s' and ( ud_flags & %d ) = 0 and ud_date != '%s'",
				intval(UPDATE_FLAGS_UPDATED),
				dbesc($r[0]['ud_addr']),
				intval(UPDATE_FLAGS_UPDATED),
				dbesc($x[0]['ud_date'])
			);
			return;
		}

		// ignore doing an update if this ud_addr refers to a known dead hubloc

		$h = q("select * from hubloc where hubloc_addr = '%s'",
			dbesc($r[0]['ud_addr']),
		);

		$h = Libzot::zot_record_preferred($h);

		if (($h) && (($h['hubloc_status'] & HUBLOC_OFFLINE) || $h['hubloc_deleted'] || $h['hubloc_error'])) {
			q("update updates set ud_flags = ( ud_flags | %d ) where ud_addr = '%s' and ( ud_flags & %d ) = 0 ",
				intval(UPDATE_FLAGS_DELETED),
				dbesc($r[0]['ud_addr']),
				intval(UPDATE_FLAGS_UPDATED)
			);
			return;
		}

		// we might have to pull this out some day, but for now update_directory_entry()
		// runs zot_finger() and is kind of zot specific

		if ($h && $h['hubloc_network'] !== 'zot6')
			return;

		Libzotdir::update_directory_entry($r[0]);

		return;
	}
}
