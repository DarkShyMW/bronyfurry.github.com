<?php
/* Smarty version 3.1.39, created on 2022-03-17 00:01:26
  from '/sites/git.bronyfurry.com/view/tpl/cloud_actionspanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_623250265f61d7_76525133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc0b60ad259b06a7bb854707dbc6768dfda08de' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cloud_actionspanel.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 1,
  ),
),false)) {
function content_623250265f61d7_76525133 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="invisible-cloud-file-upload" type="file" name="files" style="visibility:hidden;position:absolute;top:-50;left:-50;width:0;height:0;" multiple>
<div id="files-mkdir-tools">
	<div class="section-content-tools-wrapper">
		<label for="files-mkdir"><?php echo $_smarty_tpl->tpl_vars['folder_header']->value;?>
</label>
		<form id="mkdir-form" method="post" action="file_upload" class="acl-form" data-form_id="mkdir-form" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['allow_cid']->value;?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['allow_gid']->value;?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['deny_cid']->value;?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['deny_gid']->value;?>
'>
			<input type="hidden" name="folder" value="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" />
			<input type="hidden" name="channick" value="<?php echo $_smarty_tpl->tpl_vars['channick']->value;?>
" />
			<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" />
			<input id="files-mkdir" type="text" name="filename" class="form-control mb-3">
			<div class="float-end btn-group">
				<div class="btn-group">
					<?php if ($_smarty_tpl->tpl_vars['lockstate']->value) {?>
					<button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#aclModal" type="button">
						<i class="jot-perms-icon fa fa-<?php echo $_smarty_tpl->tpl_vars['lockstate']->value;?>
"></i>
					</button>
					<?php }?>
					<button class="btn btn-primary btn-sm float-end" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['folder_submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['folder_submit']->value;?>
</button>
				</div>
			</div>
		</form>
		<div class="clear"></div>
	</div>
	<hr class="m-0">
</div>
<div id="files-upload-tools">
	<div class="section-content-tools-wrapper ">
		<?php if ($_smarty_tpl->tpl_vars['quota']->value['limit'] || $_smarty_tpl->tpl_vars['quota']->value['used']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['quota']->value['warning']) {?>section-content-danger-wrapper<?php } else { ?>section-content-info-wrapper<?php }?>"><?php if ($_smarty_tpl->tpl_vars['quota']->value['warning']) {?><strong><?php echo $_smarty_tpl->tpl_vars['quota']->value['warning'];?>
 </strong><?php }
if ($_smarty_tpl->tpl_vars['quota']->value['desc']) {
echo $_smarty_tpl->tpl_vars['quota']->value['desc'];?>
<br><br><?php }?></div><?php }?>
		<form id="ajax-upload-files" method="post" action="#" enctype="multipart/form-data" class="acl-form" data-form_id="ajax-upload-files" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['allow_cid']->value;?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['allow_gid']->value;?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['deny_cid']->value;?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['deny_gid']->value;?>
'>
			<input id="file-folder"type="hidden" name="folder" value="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
" />
			<input type="hidden" name="channick" value="<?php echo $_smarty_tpl->tpl_vars['channick']->value;?>
" />
			<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" />
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify']->value), 0, false);
?>
			<div class="cloud-index attach-drop attach-drop-zone text-center p-4 mb-3" data-folder="<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
">
				<span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['drop_area_label']->value;?>
</span>
			</div>
			<div class="float-end btn-group">
				<div class="btn-group">
					<?php if ($_smarty_tpl->tpl_vars['lockstate']->value) {?>
					<button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#aclModal" type="button">
						<i class="jot-perms-icon fa fa-<?php echo $_smarty_tpl->tpl_vars['lockstate']->value;?>
"></i>
					</button>
					<?php }?>
					<button id="upload-submit" class="btn btn-primary btn-sm float-end"><?php echo $_smarty_tpl->tpl_vars['upload_submit']->value;?>
</button>
				</div>
			</div>
		</form>
		<div class="clear"></div>
	</div>
	<hr class="m-0">
</div>
<?php if ($_smarty_tpl->tpl_vars['aclselect']->value) {
echo $_smarty_tpl->tpl_vars['aclselect']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['breadcrumbs_html']->value) {
echo $_smarty_tpl->tpl_vars['breadcrumbs_html']->value;?>

<hr class="m-0">
<?php }
}
}
