<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:30:26
  from '/sites/git.bronyfurry.com/view/tpl/search_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bc427ace20_56946471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd2dd3ff51158f0ae48dd4970e1a5c54cfb896e0' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/search_item.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bc427ace20_56946471 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="thread-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="thread-wrapper<?php if ($_smarty_tpl->tpl_vars['item']->value['toplevel']) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['toplevel'];?>
 clearfix generic-content-wrapper<?php }?>" data-b64mids='<?php echo $_smarty_tpl->tpl_vars['item']->value['mids'];?>
'>
	<a name="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ></a>
	<div class="clearfix wall-item-outside-wrapper <?php echo $_smarty_tpl->tpl_vars['item']->value['indent'];
echo $_smarty_tpl->tpl_vars['item']->value['previewing'];
if ($_smarty_tpl->tpl_vars['item']->value['owner_url']) {?> wallwall<?php }?>" id="wall-item-outside-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
		<div class="wall-item-content-wrapper <?php echo $_smarty_tpl->tpl_vars['item']->value['indent'];?>
" id="wall-item-content-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
)"><?php }
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
if ($_smarty_tpl->tpl_vars['item']->value['is_new'] && !$_smarty_tpl->tpl_vars['item']->value['event'] && !$_smarty_tpl->tpl_vars['item']->value['is_comment']) {?> wall-item-head-new<?php }?>" >
				<div class="wall-item-info" id="wall-item-info-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
					<div class="wall-item-photo-wrapper<?php if ($_smarty_tpl->tpl_vars['item']->value['owner_url']) {?> wwfrom<?php }?>" id="wall-item-photo-wrapper-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['contact_id']) {?>
						<div class="spinner-wrapper contact-edit-rotator contact-edit-rotator-<?php echo $_smarty_tpl->tpl_vars['item']->value['contact_id'];?>
"><div class="spinner s"></div></div>
						<?php }?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" class="fakelink wall-item-photo<?php echo $_smarty_tpl->tpl_vars['item']->value['sparkle'];?>
 u-photo p-name" id="wall-item-photo-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-bs-toggle="dropdown" loading="lazy" />
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
							<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['mitem']->value['class']) {?> <?php echo $_smarty_tpl->tpl_vars['mitem']->value['class'];
}?>" <?php if ($_smarty_tpl->tpl_vars['mitem']->value['href']) {?>href="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['href'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['mitem']->value['action']) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['action'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['mitem']->value['title']) {?>title="<?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['mitem']->value['data']) {?> <?php echo $_smarty_tpl->tpl_vars['mitem']->value['data'];
}?>><?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
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
				</div>
				<?php }?>
				<div class="wall-item-author">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['previewing']) {?><span class="preview-indicator"><i class="fa fa-eye" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['preview_lbl'];?>
"></i></span>&nbsp;<?php }?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['profile_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['linktitle'];?>
" class="wall-item-name-link"><span class="wall-item-name<?php echo $_smarty_tpl->tpl_vars['item']->value['sparkle'];?>
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
if ($_smarty_tpl->tpl_vars['item']->value['location']) {?><span class="wall-item-location" id="wall-item-location-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['location'];?>
,&nbsp;</span><?php }?><span class="autotime" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['isotime'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['localtime'];
if ($_smarty_tpl->tpl_vars['item']->value['editedtime']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['editedtime'];
}
if ($_smarty_tpl->tpl_vars['item']->value['expiretime']) {?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['expiretime'];
}?></span><?php if ($_smarty_tpl->tpl_vars['item']->value['editedtime']) {?>&nbsp;<i class="fa fa-pencil"></i><?php }?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['item']->value['app']) {?><span class="item.app"><?php echo $_smarty_tpl->tpl_vars['item']->value['str_app'];?>
</span><?php }?>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['divider']) {?>
			<hr class="wall-item-divider">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['body']) {?>
			<div class="p-2 clrearfix <?php if ($_smarty_tpl->tpl_vars['item']->value['is_photo']) {?> wall-photo-item<?php } else { ?> wall-item-content<?php }?>" id="wall-item-content-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				<div class="wall-item-body" id="wall-item-body-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
					<div class="btn-group">
						<div id="like-rotator-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="spinner-wrapper">
							<div class="spinner s"></div>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['star'] || $_smarty_tpl->tpl_vars['item']->value['thread_action_menu'] || $_smarty_tpl->tpl_vars['item']->value['drop']['dropping']) {?>
					<div class="btn-group">
						<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
							<i class="fa fa-cog"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['star']) {?>
							<a class="dropdown-item" href="#" onclick="dostar(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;"><i id="starred-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="fa fa-fw<?php if ($_smarty_tpl->tpl_vars['item']->value['star']['isstarred']) {?> starred fa-star<?php } else { ?> unstarred fa-star-o<?php }?> generic-icons-nav" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['star']['toggle'];?>
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
"<?php }?> ><i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['mitem']->value['icon'];?>
 generic-icons-nav"></i><?php echo $_smarty_tpl->tpl_vars['mitem']->value['title'];?>
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
						</div>
					</div>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['star'] && $_smarty_tpl->tpl_vars['item']->value['star']['isstarred']) {?>
				<div class="btn-group" id="star-button-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<button type="button" class="btn btn-outline-secondary btn-sm wall-item-like" onclick="dostar(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"><i class="fa fa-star"></i></button>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['attachments']) {?>
				<div class="wall-item-tools-left btn-group">
					<button type="button" class="btn btn-outline-secondary btn-sm wall-item-like dropdown-toggle" data-bs-toggle="dropdown" id="attachment-menu-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-paperclip"></i></button>
					<div class="dropdown-menu"><?php echo $_smarty_tpl->tpl_vars['item']->value['attachments'];?>
</div>
				</div>
				<?php }?>

				<div class="wall-item-tools-left btn-group" id="wall-item-tools-left-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['mode'] === 'moderate') {?>
					<a href="moderate/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/approve" class="btn btn-success btn-sm"><?php echo $_smarty_tpl->tpl_vars['item']->value['approve'];?>
</a>
					<a href="moderate/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/drop" class="btn btn-danger btn-sm"><?php echo $_smarty_tpl->tpl_vars['item']->value['delete'];?>
</a>
					<?php }?>
				</div>

			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['conv']) {?>
		<div class="p-2 wall-item-conv" id="wall-item-conv-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
			<a href='<?php echo $_smarty_tpl->tpl_vars['item']->value['conv']['href'];?>
' id='context-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['item']->value['conv']['title'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['conv']['title'];?>
</a>
		</div>
		<?php }?>
	</div>
</div>

<?php }
}
