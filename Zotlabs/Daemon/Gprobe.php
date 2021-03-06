<?php /** @file */

namespace Zotlabs\Daemon;

use Zotlabs\Lib\Libzot;
use Zotlabs\Lib\Webfinger;
use Zotlabs\Lib\Zotfinger;

// performs zot_finger on $argv[1], which is a hex_encoded webbie/reddress

class Gprobe {
	static public function run($argc, $argv) {

		if ($argc != 2)
			return;

		$url = hex2bin($argv[1]);

		if (!strpos($url, '@'))
			return;

		$r = q("select * from hubloc where hubloc_addr = '%s' and hubloc_network = 'zot6' limit 1",
			dbesc($url)
		);

		if (!$r) {
			$href = Webfinger::zot_url(punify($url));
			if ($href) {
				$zf = Zotfinger::exec($href, null);
			}
			if (is_array($zf) && array_path_exists('signature/signer', $zf) && $zf['signature']['signer'] === $href && intval($zf['signature']['header_valid'])) {
				Libzot::import_xchan($zf['data']);
			}
		}

		return;

	}
}
