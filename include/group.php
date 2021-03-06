<?php /** @file */

use Zotlabs\Lib\Libsync;

function group_add($uid,$name,$public = 0) {

	$success = false;
	if(x($uid) && x($name)) {
		$r = group_byname($uid,$name); // check for dups
		if($r !== false) {

			// This could be a problem.
			// Let's assume we've just created a group which we once deleted
			// all the old members are gone, but the group remains so we don't break any security
			// access lists. What we're doing here is reviving the dead group, but old content which
			// was restricted to this group may now be seen by the new group members.

			$z = q("SELECT * FROM pgrp WHERE id = %d LIMIT 1",
				intval($r)
			);
			if(($z) && $z[0]['deleted']) {
				q('UPDATE pgrp SET deleted = 0 WHERE id = %d', intval($z[0]['id']));
				notice( t('A deleted group with this name was revived. Existing item permissions <strong>may</strong> apply to this group and any future members. If this is not what you intended, please create another group with a different name.') . EOL);
			}
			return true;
		}

		do {
			$dups = false;
			$hash = random_string() . $name;

			$r = q("SELECT id FROM pgrp WHERE hash = '%s' LIMIT 1", dbesc($hash));
			if($r)
				$dups = true;
		} while($dups == true);


		$r = q("INSERT INTO pgrp ( hash, uid, visible, gname )
			VALUES( '%s', %d, %d, '%s' ) ",
			dbesc($hash),
			intval($uid),
			intval($public),
			dbesc($name)
		);

		if($r)
			$success = true;
	}


	if($success) {
		Libsync::build_sync_packet($uid,null,true);
		return $hash;
	}

	return false;
}


function group_rmv($uid,$name) {
	$ret = false;
	if(x($uid) && x($name)) {
		$r = q("SELECT id, hash FROM pgrp WHERE uid = %d AND gname = '%s' LIMIT 1",
			intval($uid),
			dbesc($name)
		);
		if($r) {
			$group_id = $r[0]['id'];
			$group_hash = $r[0]['hash'];
		}

		if(! $group_id)
			return false;

		// remove group from default posting lists
		$r = q("SELECT channel_default_group, channel_allow_gid, channel_deny_gid FROM channel WHERE channel_id = %d LIMIT 1",
		       intval($uid)
		);
		if($r) {
			$user_info = $r[0];
			$change = false;

			if($user_info['channel_default_group'] == $group_hash) {
				$user_info['channel_default_group'] = '';
				$change = true;
			}
			if(strpos($user_info['channel_allow_gid'], '<' . $group_hash . '>') !== false) {
				$user_info['channel_allow_gid'] = str_replace('<' . $group_hash . '>', '', $user_info['channel_allow_gid']);
				$change = true;
			}
			if(strpos($user_info['channel_deny_gid'], '<' . $group_hash . '>') !== false) {
				$user_info['channel_deny_gid'] = str_replace('<' . $group_hash . '>', '', $user_info['channel_deny_gid']);
				$change = true;
			}

			if($change) {
				q("UPDATE channel SET channel_default_group = '%s', channel_allow_gid = '%s', channel_deny_gid = '%s'
				WHERE channel_id = %d",
				  intval($user_info['channel_default_group']),
				  dbesc($user_info['channel_allow_gid']),
				  dbesc($user_info['channel_deny_gid']),
				  intval($uid)
				);
			}
		}

		// remove all members
		$r = q("DELETE FROM pgrp_member WHERE uid = %d AND gid = %d ",
			intval($uid),
			intval($group_id)
		);

		// remove group
		$r = q("UPDATE pgrp SET deleted = 1 WHERE uid = %d AND gname = '%s'",
			intval($uid),
			dbesc($name)
		);

		$ret = $r;

	}

	Libsync::build_sync_packet($uid,null,true);

	return $ret;
}

function group_byname($uid,$name) {
	if((! $uid) || (! strlen($name)))
		return false;
	$r = q("SELECT * FROM pgrp WHERE uid = %d AND gname = '%s' LIMIT 1",
		intval($uid),
		dbesc($name)
	);
	if($r)
		return $r[0]['id'];
	return false;
}


function group_rec_byhash($uid,$hash) {
	if((! $uid) || (! strlen($hash)))
		return false;
	$r = q("SELECT * FROM pgrp WHERE uid = %d AND hash = '%s' LIMIT 1",
		intval($uid),
		dbesc($hash)
	);
	if($r)
		return $r[0];
	return false;
}

function group_rmv_member($uid,$name,$member) {
	$gid = group_byname($uid,$name);
	if(! $gid)
		return false;
	if(! ( $uid && $gid && $member))
		return false;
	$r = q("DELETE FROM pgrp_member WHERE uid = %d AND gid = %d AND xchan = '%s' ",
		intval($uid),
		intval($gid),
		dbesc($member)
	);

	Libsync::build_sync_packet($uid,null,true);

	return $r;


}


function group_add_member($uid,$name,$member,$gid = 0) {
	if(! $gid)
		$gid = group_byname($uid,$name);
	if((! $gid) || (! $uid) || (! $member))
		return false;

	$r = q("SELECT * FROM pgrp_member WHERE uid = %d AND gid = %d AND xchan = '%s' LIMIT 1",
		intval($uid),
		intval($gid),
		dbesc($member)
	);
	if($r)
		return true;	// You might question this, but
				// we indicate success because the group member was in fact created
				// -- It was just created at another time
 	if(! $r)
		$r = q("INSERT INTO pgrp_member (uid, gid, xchan)
			VALUES( %d, %d, '%s' ) ",
			intval($uid),
			intval($gid),
			dbesc($member)
	);

	Libsync::build_sync_packet($uid,null,true);

	return $r;
}

function group_get_members($gid) {
	$ret = array();
	if(intval($gid)) {
		$r = q("SELECT * FROM pgrp_member
			LEFT JOIN abook ON abook_xchan = pgrp_member.xchan left join xchan on xchan_hash = abook_xchan
			WHERE gid = %d AND abook_channel = %d and pgrp_member.uid = %d and xchan_deleted = 0 and abook_self = 0 and abook_blocked = 0 and abook_pending = 0 ORDER BY xchan_name ASC ",
			intval($gid),
			intval(local_channel()),
			intval(local_channel())
		);
		if($r)
			$ret = $r;
	}
	return $ret;
}

function group_get_members_xchan($gid) {
	$ret = array();
	if(intval($gid)) {
		$r = q("SELECT xchan FROM pgrp_member WHERE gid = %d AND uid = %d",
			intval($gid),
			intval(local_channel())
		);
		if($r) {
			foreach($r as $rr) {
				$ret[] = $rr['xchan'];
			}
		}
	}
	return $ret;
}

function group_get_profile_members_xchan($uid,$gid) {
	$ret = [];

	if(intval($gid)) {
		$r = q("SELECT abook_xchan as xchan from abook left join profile on abook_profile = profile_guid where profile.id = %d and profile.uid = %d",
			intval($gid),
			intval($uid)
		);
		if($r) {
			foreach($r as $rr) {
				$ret[] = $rr['xchan'];
			}
		}
	}
	return $ret;
}




function mini_group_select($uid,$group = '') {

	$grps = array();
	$o = '';

	$r = q("SELECT * FROM pgrp WHERE deleted = 0 AND uid = %d ORDER BY gname ASC",
		intval($uid)
	);
	$grps[] = array('name' => '', 'hash' => '0', 'selected' => '');
	if($r) {
		foreach($r as $rr) {
			$grps[] = array('name' => $rr['gname'], 'id' => $rr['hash'], 'selected' => (($group == $rr['hash']) ? 'true' : ''));
		}

	}
	logger('mini_group_select: ' . print_r($grps,true), LOGGER_DATA);

	$o = replace_macros(get_markup_template('group_selection.tpl'), array(
		'$label' => t('Add new connections to this privacy group'),
		'$groups' => $grps
	));
	return $o;
}




function group_side($every="connections",$each="group",$edit = false, $group_id = 0, $cid = '',$mode = 1) {

	$o = '';

	if(! (local_channel() && \Zotlabs\Lib\Apps::system_app_installed(local_channel(), 'Privacy Groups'))) {
		return '';
	}

	$groups = array();

	$r = q("SELECT * FROM pgrp WHERE deleted = 0 AND uid = %d ORDER BY gname ASC",
		intval($_SESSION['uid'])
	);
	$member_of = array();
	if($cid) {
		$member_of = groups_containing(local_channel(),$cid);
	}

	if($r) {
		foreach($r as $rr) {
			$selected = (($group_id == $rr['id']) ? ' group-selected' : '');

			if ($edit) {
				$groupedit = array(
					'href' => "group/".$rr['id'],
					'title' => t('edit'),
				);
			} else {
				$groupedit = null;
			}

			$groups[] = array(
				'id'		=> $rr['id'],
				'enc_cid'   => base64url_encode($cid),
				'cid'		=> $cid,
				'text' 		=> $rr['gname'],
				'selected' 	=> $selected,
				'href'		=> (($mode == 0) ? $each.'?f=&gid='.$rr['id'] : $each."/".$rr['id']) . ((x($_GET,'new')) ? '&new=' . $_GET['new'] : '') . ((x($_GET,'order')) ? '&order=' . $_GET['order'] : ''),
				'edit'		=> $groupedit,
				'ismember'	=> in_array($rr['id'],$member_of),
			);
		}
	}


	$tpl = get_markup_template("group_side.tpl");
	$o = replace_macros($tpl, array(
		'$title'		=> t('Privacy Groups'),
		'$edittext'     => t('Edit group'),
		'$createtext' 	=> ((argv(1) == 'new' ) ? '' : t('Manage privacy groups')),
		'$ungrouped'    => (($every === 'contacts') ? t('Channels not in any privacy group') : ''),
		'$groups'		=> $groups,
		'$add'			=> t('add'),
	));


	return $o;
}

function expand_groups($g) {
	if(! (is_array($g) && count($g)))
		return array();

	$ret = [];
	$x   = [];

	// private profile linked virtual groups

	foreach($g as $gv) {
		if(substr($gv,0,3) === 'vp.') {
			$profile_hash = substr($gv,3);
			if($profile_hash) {
				$r = q("select abook_xchan from abook where abook_profile = '%s'",
					dbesc($profile_hash)
				);
				if($r) {
					foreach($r as $rv) {
						$ret[] = $rv['abook_xchan'];
					}
				}
			}
		}
		else {
			$x[] = $gv;
		}
	}

	if($x) {
		stringify_array_elms($x,true);
		$groups = implode(',', $x);
		if($groups) {
			$r = q("SELECT xchan FROM pgrp_member WHERE gid IN ( select id from pgrp where hash in ( $groups ))");
			if($r) {
				foreach($r as $rr) {
					$ret[] = $rr['xchan'];
				}
			}
		}
	}
	return $ret;
}


function member_of($c) {

	$r = q("SELECT pgrp.gname, pgrp.id FROM pgrp LEFT JOIN pgrp_member ON pgrp_member.gid = pgrp.id WHERE pgrp_member.xchan = '%s' AND pgrp.deleted = 0 ORDER BY pgrp.gname  ASC ",
		dbesc($c)
	);

	return $r;

}

function groups_containing($uid,$c) {

	$r = q("SELECT gid FROM pgrp_member WHERE uid = %d AND pgrp_member.xchan = '%s' ",
		intval($uid),
		dbesc($c)
	);

	$ret = array();
	if($r) {
		foreach($r as $rr)
			$ret[] = $rr['gid'];
	}

	return $ret;
}
