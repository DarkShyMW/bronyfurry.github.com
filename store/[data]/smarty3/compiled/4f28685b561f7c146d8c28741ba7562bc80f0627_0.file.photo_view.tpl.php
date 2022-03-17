<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:30:20
  from '/sites/git.bronyfurry.com/view/tpl/photo_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bc3c751457_32865008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f28685b561f7c146d8c28741ba7562bc80f0627' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/photo_view.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_select.tpl' => 1,
    'file:field_checkbox.tpl' => 1,
  ),
),false)) {
function content_6231bc3c751457_32865008 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="live-photos"></div>
<div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<div class="float-end">
			<?php if ($_smarty_tpl->tpl_vars['tools']->value || $_smarty_tpl->tpl_vars['map']->value || $_smarty_tpl->tpl_vars['edit']->value) {?>
			<div class="btn-group">
				<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
					<i class="fa fa-cog"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tools_label']->value;?>

				</button>
				<div class="dropdown-menu dropdown-menu-end flex-column">
					<?php if ($_smarty_tpl->tpl_vars['tools']->value) {?>
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['tools']->value['profile'][0];?>
"><i class="fa fa-user"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tools']->value['profile'][1];?>
</a>
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['tools']->value['cover'][0];?>
"><i class="fa fa-picture-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tools']->value['cover'][1];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['map']->value) {?>
					<a class="dropdown-item" href="#" onclick="var pos = $('#photo-map').css('position'); if(pos === 'absolute') { $('#photo-map').css( { position: 'relative', left: 'auto', top: 'auto' }); } else { $('#photo-map').css( { position: 'absolute', left: '-9999px', top: '-9999px' }); } return false; " ><i class="fa fa-globe"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['map_text']->value;?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
					<a class="dropdown-item acl-form-trigger" href="#"  title="" onclick="openClose('photo-edit'); return false;" data-form_id="photo_edit_form"><i class="fa fa-pencil"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['edit']->value['edit'];?>
</a>
					<?php }?>
				</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['lock']->value) {?>
			<div class="btn-group">
				<button id="lockview" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" title="<?php echo $_smarty_tpl->tpl_vars['lock']->value;?>
" onclick="lockview('photo',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);" ><i class="fa fa-lock"></i></button>
				<ul id="panel-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="lockview-panel dropdown-menu dropdown-menu-end"></ul>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prevlink']->value || $_smarty_tpl->tpl_vars['nextlink']->value) {?>
			<div class="btn-group">
				<?php if ($_smarty_tpl->tpl_vars['prevlink']->value) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['prevlink']->value[0];?>
" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['prevlink']->value[1];?>
"><i class="fa fa-backward"></i></a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['nextlink']->value) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['nextlink']->value[0];?>
" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['nextlink']->value[1];?>
"><i class="fa fa-forward"></i></a>
				<?php }?>
			</div>
			<?php }?>
		</div>
		<h2><?php if ($_smarty_tpl->tpl_vars['desc']->value) {
echo $_smarty_tpl->tpl_vars['desc']->value;
} elseif ($_smarty_tpl->tpl_vars['filename']->value) {
echo $_smarty_tpl->tpl_vars['filename']->value;
} else {
echo $_smarty_tpl->tpl_vars['unknown']->value;
}?></h2>
		<div class="clear"></div>
	</div>
	<div id="photo-map">
	<?php echo $_smarty_tpl->tpl_vars['map']->value;?>

	</div>
	<div id="photo-edit" class="section-content-tools-wrapper">
		<form action="photos/<?php echo $_smarty_tpl->tpl_vars['edit']->value['nickname'];?>
/<?php echo $_smarty_tpl->tpl_vars['edit']->value['resource_id'];?>
" method="post" id="photo_edit_form" class="acl-form" data-form_id="photo_edit_form" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['edit']->value['allow_cid'];?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['edit']->value['allow_gid'];?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['edit']->value['deny_cid'];?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['edit']->value['deny_gid'];?>
'>
			<input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['item_id'];?>
" />
						<div class="mb-3">
				<label id="photo-edit-caption-label" for="photo-edit-caption"><?php echo $_smarty_tpl->tpl_vars['edit']->value['capt_label'];?>
</label>
				<input id="photo-edit-caption" class="form-control" type="text" name="desc" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['caption'];?>
" />
			</div>
						<div class="form-group">
				<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['edit']->value['album_select']), 0, false);
?>
			</div>
			<div class="mb-3">
				<label class="radio-inline" id="photo-edit-rotate-cw-label" for="photo-edit-rotate-cw"><input id="photo-edit-rotate-cw" type="radio" name="rotate" value="1" /><?php echo $_smarty_tpl->tpl_vars['edit']->value['rotatecw'];?>
</label>
				<label class="radio-inline" id="photo-edit-rotate-ccw-label" for="photo-edit-rotate-ccw"><input id="photo-edit-rotate-ccw" type="radio" name="rotate" value="2" /><?php echo $_smarty_tpl->tpl_vars['edit']->value['rotateccw'];?>
</label>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['edit']->value['adult_enabled']) {?>
			<div class="mb-3">
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['edit']->value['adult']), 0, false);
?>
			</div>
			<?php }?>

			<div class="mb-3 float-start">
				<button class="btn btn-danger btn-sm" id="photo-edit-delete-button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['delete'];?>
" onclick="return confirmDelete();" /><?php echo $_smarty_tpl->tpl_vars['edit']->value['delete'];?>
</button>
			</div>
			<div class="mb-3 btn-group float-end">
				<?php if ($_smarty_tpl->tpl_vars['edit']->value['aclselect']) {?>
				<button id="dbtn-acl" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#aclModal" onclick="return false;">
					<i id="jot-perms-icon" class="fa fa-<?php echo $_smarty_tpl->tpl_vars['edit']->value['lockstate'];?>
"></i>
				</button>
				<?php }?>
				<button id="tool-submit" class="btn btn-primary btn-sm" type="submit" name="submit" ><?php echo $_smarty_tpl->tpl_vars['edit']->value['submit'];?>
</button>
			</div>
		</form>
		<?php echo $_smarty_tpl->tpl_vars['edit']->value['aclselect'];?>

		<div id="photo-edit-end" class="clear"></div>
	</div>
	<div id="photo-view-wrapper">
		<div id="photo-photo"><a href="<?php echo $_smarty_tpl->tpl_vars['photo']->value['href'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"><img style="width: 100%;" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value['src'];?>
"></a></div>
		<div id="photo-photo-end" class="clear"></div>
		<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
		<div class="photo-item-tools-left" id="in-this-photo">
			<span id="in-this-photo-text"><?php echo $_smarty_tpl->tpl_vars['tag_hdr']->value;?>
</span>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
				<?php echo $_smarty_tpl->tpl_vars['t']->value[0];
if ($_smarty_tpl->tpl_vars['edit']->value) {?><span id="tag-remove">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['t']->value[1];?>
" onclick="return confirmDelete();"><i class="fa fa-times"></i></a>&nbsp;</span><?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<?php }?>
		<div class="photo-item-tools">
			<?php if ($_smarty_tpl->tpl_vars['responses']->value['count']) {?>
			<div class="photo-item-tools-left float-start">
				<div class="<?php if ($_smarty_tpl->tpl_vars['responses']->value['count'] > 1) {?>btn-group<?php }?>">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['responses']->value, 'response', false, 'verb');
$_smarty_tpl->tpl_vars['response']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['verb']->value => $_smarty_tpl->tpl_vars['response']->value) {
$_smarty_tpl->tpl_vars['response']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['response']->value['count']) {?>
					<div class="btn-group">
						<button type="button" class="btn btn-outline-secondary btn-sm wall-item-like dropdown-toggle" data-bs-toggle="dropdown" id="wall-item-<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['response']->value['count'];?>
 <?php echo $_smarty_tpl->tpl_vars['response']->value['button'];?>
</button>
						<?php if ($_smarty_tpl->tpl_vars['response']->value['list_part']) {?>
						<ul class="dropdown-menu" role="menu" aria-labelledby="wall-item-<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value['list_part'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
?><li role="presentation"><?php echo $_smarty_tpl->tpl_vars['liker']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
						<?php } else { ?>
						<ul class="dropdown-menu" role="menu" aria-labelledby="wall-item-<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value['list'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
?><li role="presentation"><?php echo $_smarty_tpl->tpl_vars['liker']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['response']->value['list_part']) {?>
						<div class="modal" id="<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
Modal-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
										<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['response']->value['title'];?>
</h4>
									</div>
									<div class="modal-body">
										<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value['list'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
?><li role="presentation"><?php echo $_smarty_tpl->tpl_vars['liker']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
									</div>
									<div class="modal-footer clear">
										<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['modal_dismiss']->value;?>
</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<?php }?>
					</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['likebuttons']->value) {?>
			<div class="photo-item-tools-right btn-group float-end">
				<button type="button" class="btn btn-outline-secondary btn-sm" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['likebuttons']->value['id'];?>
,'like'); return false">
					<i class="fa fa-thumbs-o-up" title="<?php echo $_smarty_tpl->tpl_vars['likebuttons']->value['likethis'];?>
"></i>
				</button>
				<button type="button" class="btn btn-outline-secondary btn-sm" onclick="dolike(<?php echo $_smarty_tpl->tpl_vars['likebuttons']->value['id'];?>
,'dislike'); return false">
					<i class="fa fa-thumbs-o-down" title="<?php echo $_smarty_tpl->tpl_vars['likebuttons']->value['nolike'];?>
"></i>
				</button>
			</div>
			<div id="like-rotator-<?php echo $_smarty_tpl->tpl_vars['likebuttons']->value['id'];?>
" class="photo-like-rotator float-end"></div>
			<?php }?>
			<div class="clear"></div>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['commentbox']->value) {?>
	<div class="wall-item-comment-wrapper<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?> wall-item-comment-wrapper-wc<?php }?>" >
		<?php echo $_smarty_tpl->tpl_vars['commentbox']->value;?>

	</div>
	<?php }?>
	<div class="clear"></div>
</div>
<?php echo $_smarty_tpl->tpl_vars['paginate']->value;?>


<?php }
}
