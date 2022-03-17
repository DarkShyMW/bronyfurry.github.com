<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:30:50
  from '/sites/git.bronyfurry.com/view/tpl/conv_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bc5a298419_64203963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e075ed8641b260506dd6187ea5232185cbebe43' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/conv_list.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bc5a298419_64203963 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['item']->value['comment_firstcollapsed']) {?>
<div class="hide-comments-outer fakelink" onclick="showHideComments(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
	<span id="hide-comments-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hide-comments"><?php echo $_smarty_tpl->tpl_vars['item']->value['hide_text'];?>
</span>&nbsp;<span id="hide-comments-total-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="hide-comments-total"><?php echo $_smarty_tpl->tpl_vars['item']->value['num_comments'];?>
</span>
</div>
<div id="collapsed-comments-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="collapsed-comments" style="display: none;">
<?php }?>
	<div id="thread-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="thread-wrapper<?php if ($_smarty_tpl->tpl_vars['item']->value['toplevel']) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['toplevel'];?>
 generic-content-wrapper h-entry <?php } else { ?> u-comment h-cite <?php }?>" data-b64mids='<?php echo $_smarty_tpl->tpl_vars['item']->value['mids'];?>
'>
		<a name="item_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ></a>
		<div class="wall-item-outside-wrapper<?php if ($_smarty_tpl->tpl_vars['item']->value['is_comment']) {?> comment<?php }
if ($_smarty_tpl->tpl_vars['item']->value['previewing']) {?> preview<?php }?>" id="wall-item-outside-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
			<div class="clearfix wall-item-content-wrapper<?php if ($_smarty_tpl->tpl_vars['item']->value['is_comment']) {?> comment<?php }?>" id="wall-item-content-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['item']->value['photo']) {?>
				<div class="wall-photo-item" id="wall-photo-item-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>

				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['event']) {?>
				<div class="wall-event-item" id="wall-event-item-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['event'];?>

				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['title'] && !$_smarty_tpl->tpl_vars['item']->value['event']) {?>
				<div class="p-2<?php if ($_smarty_tpl->tpl_vars['item']->value['is_new']) {?> bg-primary text-white<?php }?> wall-item-title h3<?php if (!$_smarty_tpl->tpl_vars['item']->value['photo']) {?> rounded-top<?php }?>" id="wall-item-title-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['title_tosource']) {
if ($_smarty_tpl->tpl_vars['item']->value['plink']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['plink']['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['plink']['title'];?>
)" rel="nofollow"><?php }
}
echo $_smarty_tpl->tpl_vars['item']->value['title'];
if ($_smarty_tpl->tpl_vars['item']->value['title_tosource']) {
if ($_smarty_tpl->tpl_vars['item']->value['plink']) {?></a><?php }
}?>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['item']->value['is_new']) {?>
				<hr class="m-0">
				<?php }?>
				<?php }?>
				<div class="p-2 clearfix wall-item-head<?php if (!$_smarty_tpl->tpl_vars['item']->value['title'] && !$_smarty_tpl->tpl_vars['item']->value['event'] && !$_smarty_tpl->tpl_vars['item']->value['photo']) {?> rounded-top<?php }
if ($_smarty_tpl->tpl_vars['item']->value['is_new'] && !$_smarty_tpl->tpl_vars['item']->value['event'] && !$_smarty_tpl->tpl_vars['item']->value['is_comment']) {?> wall-item-head-new<?php }?>">
					<div class="wall-item-info" id="wall-item-info-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
						<div class="wall-item-photo-wrapper<?php if ($_smarty_tpl->tpl_vars['item']->value['owner_url']) {?> wwfrom<?php }?> h-card p-author" id="wall-item-photo-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['contact_id']) {?>
							<div class="spinner-wrapper contact-edit-rotator contact-edit-rotator-<?php echo $_smarty_tpl->tpl_vars['item']->value['contact_id'];?>
"><div class="spinner s"></div></div>
							<?php }?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" class="fakelink wall-item-photo<?php echo $_smarty_tpl->tpl_vars['item']->value['sparkle'];?>
 u-photo p-name" id="wall-item-photo-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-bs-toggle="dropdown" loading="lazy" /></a>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['author_is_group_actor']) {?>
							<i class="fa fa-comments-o wall-item-photo-group-actor" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_is_group_actor'];?>
"></i>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['thread_author_menu']) {?>
							<i class="fa fa-caret-down wall-item-photo-caret cursor-pointer" data-bs-toggle="dropdown"></i>
							<div class="dropdown-menu">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['thread_author_menu'], 'mitem');
$_smarty_tpl->tpl_vars['mitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mitem']->value) {
$_smarty_tpl->tpl_vars['mitem']->do_else = false;
?>
								<a class="dropdown-item" <?php if ($_smarty_tpl->tpl_vars['mitem']->value['href']) {?>href="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['href'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['mitem']->value['action']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['action'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['mitem']->value['title']) {?>title="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
</a>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

							</div>
							<?php }?>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['lock']) {?>
					<div class="wall-item-lock dropdown">
						<i class="fa <?php if ($_smarty_tpl->tpl_vars['item']->value['locktype'] == 2) {?>fa-envelope-o<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['locktype'] == 1) {?>fa-lock<?php } else { ?>fa-unlock<?php }?> lockview<?php if ($_smarty_tpl->tpl_vars['item']->value['privacy_warning']) {?> text-danger<?php }?>" data-bs-toggle="dropdown" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['lock'];?>
" onclick="lockview('item',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" ></i>&nbsp;
						<div id="panel-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="dropdown-menu"></div>
					</div>
					<?php }?>
					<div class="wall-item-author">
						<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['profile_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['linktitle'];?>
" class="wall-item-name-link u-url"><span class="wall-item-name<?php echo $_smarty_tpl->tpl_vars['item']->value['sparkle'];?>
" id="wall-item-name-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ><bdi><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</bdi></span></a><?php if ($_smarty_tpl->tpl_vars['item']->value['owner_url']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['via'];?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['owner_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['olinktitle'];?>
" class="wall-item-name-link"><span class="wall-item-name<?php echo $_smarty_tpl->tpl_vars['item']->value['osparkle'];?>
" id="wall-item-ownername-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><bdi><?php echo $_smarty_tpl->tpl_vars['item']->value['owner_name'];?>
</bdi></span></a><?php }?>
					</div>
					<div class="wall-item-ago"  id="wall-item-ago-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['verified']) {?><i class="fa fa-check item-verified" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['verified'];?>
"></i>&nbsp;<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['forged']) {?><i class="fa fa-exclamation item-forged" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['forged'];?>
"></i>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['item']->value['location']) {?><span class="wall-item-location p-location" id="wall-item-location-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['location'];?>
,&nbsp;</span><?php }?><span class="autotime" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['isotime'];?>
"><time class="dt-published" datetime="<?php echo $_smarty_tpl->tpl_vars['item']->value['isotime'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['localtime'];?>
</time><?php if ($_smarty_tpl->tpl_vars['item']->value['editedtime']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['editedtime'];
}
if ($_smarty_tpl->tpl_vars['item']->value['expiretime']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['expiretime'];
}?></span><?php if ($_smarty_tpl->tpl_vars['item']->value['editedtime']) {?>&nbsp;<i class="fa fa-pencil"></i><?php }?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['item']->value['app']) {?><span class="item.app"><?php echo $_smarty_tpl->tpl_vars['item']->value['str_app'];?>
</span><?php }?>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['item']->value['body']) {?>
				<div class="p-2 wall-item-content clearfix" id="wall-item-content-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<div class="wall-item-body e-content" id="wall-item-body-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
						<?php echo $_smarty_tpl->tpl_vars['item']->value['body'];?>

					</div>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['has_tags']) {?>
				<div class="p-2 wall-item-tools clearfix">

					<div class="body-tags">
						<span class="tag"><?php echo $_smarty_tpl->tpl_vars['item']->value['mentions'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['tags'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['categories'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['folders'];?>
</span>
					</div>
				</div>
				<?php }?>
				<div class="p-2 clearfix wall-item-tools">
					<div class="float-end wall-item-tools-right">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['toplevel'] && $_smarty_tpl->tpl_vars['item']->value['emojis'] && $_smarty_tpl->tpl_vars['item']->value['reactions']) {?>
						<div class="btn-group">
							<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" id="wall-item-react-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
								<i class="fa fa-smile-o"></i>
							</button>
							<div class="dropdown-menu dropdown-menu-end">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['reactions'], 'react');
$_smarty_tpl->tpl_vars['react']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['react']->value) {
$_smarty_tpl->tpl_vars['react']->do_else = false;
?>
								<a class="dropdown-item clearfix" href="#" onclick="jotReact(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['react']->value;?>
'); return false;"><img class="menu-img-2" src="/images/emoji/<?php echo $_smarty_tpl->tpl_vars['react']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['react']->value;?>
" /></a>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
						<?php }?>
						<div class="btn-group">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['like']) {?>
							<button type="button" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['like'][0];?>
" class="btn btn-outline-secondary btn-sm" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'like'); return false;">
								<i class="fa fa-thumbs-o-up<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['like']) {?> ivoted<?php }?>" ></i>
							</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['dislike']) {?>
							<button type="button" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['dislike'][0];?>
" class="btn btn-outline-secondary btn-sm" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'dislike'); return false;">
								<i class="fa fa-thumbs-o-down<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['dislike']) {?> ivoted<?php }?>" ></i>
							</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['isevent']) {?>
							<div class="btn-group">
								<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" id="wall-item-attend-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['attend_title'];?>
">
									<i class="fa fa-calendar-check-o"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['attend'][0];?>
" onclick="itemAddToCal(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'attendyes'); return false;">
										<i class="item-act-list fa fa-check<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['attend']) {?> ivoted<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['attend'][0];?>

									</a>
									<a class="dropdown-item" href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['attend'][1];?>
" onclick="itemAddToCal(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
), dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'attendno'); return false;">
										<i class="item-act-list fa fa-times<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['attendno']) {?> ivoted<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['attend'][1];?>

									</a>
									<a class="dropdown-item" href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['attend'][2];?>
" onclick="itemAddToCal(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'attendmaybe'); return false;">
										<i class="item-act-list fa fa-question<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['attendmaybe']) {?> ivoted<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['attend'][2];?>

									</a>
								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['canvote']) {?>
							<div class="btn-group">
								<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" id="wall-item-consensus-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['vote_title'];?>
">
									<i class="fa fa-check-square-o"></i>
								</button>
								<div class="dropdown-menu" role="menu" aria-labelledby="wall-item-consensus-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
									<a class="dropdown-item" href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['conlabels'][0];?>
" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'agree'); return false;">
										<i class="item-act-list fa fa-check<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['agree']) {?> ivoted<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['conlabels'][0];?>

									</a>
									<a class="dropdown-item" href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['conlabels'][1];?>
" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'disagree'); return false;">
										 <i class="item-act-list fa fa-times<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['disagree']) {?> ivoted<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['conlabels'][1];?>

									</a>
									<a class="dropdown-item" href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['conlabels'][2];?>
" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,'abstain'); return false;">
										<i class="item-act-list fa fa-question<?php if ($_smarty_tpl->tpl_vars['item']->value['my_responses']['abstain']) {?> ivoted<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['conlabels'][2];?>

									</a>
								</div>
							</div>
							<?php }?>
							<div class="btn-group">
								<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" id="wall-item-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-end" role="menu" aria-labelledby="wall-item-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
									<?php if ($_smarty_tpl->tpl_vars['item']->value['share']) {?>
									<a class="dropdown-item" href="#" onclick="jotShare(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['item_type'];?>
); return false"><i class="generic-icons-nav fa fa-fw fa-retweet" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['share'][0];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['share'][0];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['embed']) {?>
									<a class="dropdown-item" href="#" onclick="jotEmbed(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['item_type'];?>
); return false"><i class="generic-icons-nav fa fa-fw fa-share" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['embed'][0];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['embed'][0];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['plink']) {?>
									<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['plink']['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['plink']['title'];?>
" class="u-url"><i class="generic-icons-nav fa fa-fw fa-external-link"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['plink']['title'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['edpost']) {?>
									<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['edpost'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['edpost'][1];?>
"><i class="generic-icons-nav fa fa-fw fa-pencil"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['edpost'][1];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['tagger']) {?>
									<a class="dropdown-item" href="#"  onclick="itemTag(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"><i id="tagger-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="generic-icons-nav fa fa-fw fa-tag" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['tagger']['tagit'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['tagger']['tagit'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['filer']) {?>
									<a class="dropdown-item" href="#" onclick="itemFiler(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"><i id="filer-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="generic-icons-nav fa fa-fw fa-folder-open" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['filer'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['filer'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['bookmark']) {?>
									<a class="dropdown-item" href="#" onclick="itemBookmark(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"><i id="bookmarker-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="generic-icons-nav fa fa-fw fa-bookmark" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['bookmark'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['bookmark'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['addtocal']) {?>
									<a class="dropdown-item" href="#" onclick="itemAddToCal(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"><i id="addtocal-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="generic-icons-nav fa fa-fw fa-calendar" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['addtocal'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['addtocal'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['star']) {?>
									<a class="dropdown-item" href="#" onclick="dostar(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"><i id="starred-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="generic-icons-nav fa fa-fw<?php if ($_smarty_tpl->tpl_vars['item']->value['star']['isstarred']) {?> starred fa-star<?php } else { ?> unstarred fa-star-o<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['star']['toggle'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['star']['toggle'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['thread_action_menu']) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['thread_action_menu'], 'mitem');
$_smarty_tpl->tpl_vars['mitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mitem']->value) {
$_smarty_tpl->tpl_vars['mitem']->do_else = false;
?>
									<a class="dropdown-item" <?php if ($_smarty_tpl->tpl_vars['mitem']->value['href']) {?>href="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['href'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['mitem']->value['action']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['action'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['mitem']->value['title']) {?>title="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
"<?php }?> ><i class="generic-icons-nav fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['mitem']->value['icon'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
</a>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['drop']['dropping']) {?>
									<a class="dropdown-item" href="#" onclick="dropItem('item/drop/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', '#thread-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['mid'];?>
'); return false;" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['drop']['delete'];?>
" ><i class="generic-icons-nav fa fa-fw fa-trash-o"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['drop']['delete'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['edpost'] && $_smarty_tpl->tpl_vars['item']->value['dreport']) {?>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="dreport/<?php echo $_smarty_tpl->tpl_vars['item']->value['mid'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['dreport'];?>
</a>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['settings']) {?>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item conversation-settings-link" href="" data-toggle="modal" data-target="#conversation_settings"><?php echo $_smarty_tpl->tpl_vars['item']->value['settings'];?>
</a>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
					<div id="like-rotator-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="like-rotator"></div>
					<div class="wall-item-tools-left btn-group"  id="wall-item-tools-left-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['star'] && $_smarty_tpl->tpl_vars['item']->value['star']['isstarred']) {?>
						<div class="btn-group" id="star-button-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
							<button type="button" class="btn btn-outline-secondary btn-sm wall-item-like" onclick="dostar(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"><i class="fa fa-star"></i></button>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['attachments']) {?>
						<div class="btn-group">
							<button type="button" class="btn btn-outline-secondary btn-sm wall-item-like dropdown-toggle" data-bs-toggle="dropdown" id="attachment-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-paperclip"></i></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="attachment-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['attachments'];?>
</ul>
						</div>
						<?php }?>
						<div class="wall-item-list-comments btn-group">
							<a class="btn btn-outline-secondary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['viewthread'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['item']->value['comment_count_txt'];
if ($_smarty_tpl->tpl_vars['item']->value['unseen_comments']) {?><span class="unseen-wall-indicator-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">, <?php echo $_smarty_tpl->tpl_vars['item']->value['list_unseen_txt'];?>
</span><?php }?>
							</a>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['unseen_comments']) {?>
						<div class="unseen-wall-indicator-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 btn-group">
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['markseen'];?>
" onclick="markItemRead(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;">
								<i class="fa fa-check-square-o"></i>
							</button>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['responses']) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['responses'], 'response', false, 'verb');
$_smarty_tpl->tpl_vars['response']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['verb']->value => $_smarty_tpl->tpl_vars['response']->value) {
$_smarty_tpl->tpl_vars['response']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['response']->value['count']) {?>
						<div class="btn-group">
							<button type="button" class="btn btn-outline-secondary btn-sm wall-item-like dropdown-toggle"<?php if ($_smarty_tpl->tpl_vars['response']->value['modal']) {?> data-bs-toggle="modal" data-bs-target="#<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
Modal-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php } else { ?> data-bs-toggle="dropdown"<?php }?> id="wall-item-<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['response']->value['count'];?>
 <?php echo $_smarty_tpl->tpl_vars['response']->value['button'];?>
</button>
							<?php if ($_smarty_tpl->tpl_vars['response']->value['modal']) {?>
							<div class="modal" id="<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
Modal-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['response']->value['count'];?>
 <?php echo $_smarty_tpl->tpl_vars['response']->value['button'];?>
</h4>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
										</div>
										<div class="modal-body response-list">
											<ul class="nav nav-pills flex-column"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value['list'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
?><li class="nav-item"><?php echo $_smarty_tpl->tpl_vars['liker']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
										</div>
										<div class="modal-footer clear">
											<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['item']->value['modal_dismiss'];?>
</button>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
							<?php } else { ?>
							<div class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value['list'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
echo $_smarty_tpl->tpl_vars['liker']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
							<?php }?>
						</div>
						<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['item']->value['comment_lastcollapsed']) {?>
</div>
<?php }
}
}
