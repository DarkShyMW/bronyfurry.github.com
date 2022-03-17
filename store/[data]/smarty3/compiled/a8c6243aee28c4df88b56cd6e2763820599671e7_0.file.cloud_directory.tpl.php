<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:34
  from '/sites/git.bronyfurry.com/view/tpl/cloud_directory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba2e422475_64434051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c6243aee28c4df88b56cd6e2763820599671e7' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cloud_directory.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_select.tpl' => 2,
    'file:field_checkbox.tpl' => 5,
    'file:field_input.tpl' => 3,
  ),
),false)) {
function content_6231ba2e422475_64434051 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['tiles']->value) {?>section-content-wrapper<?php } else { ?>section-content-wrapper-np<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['tiles']->value) {?>
	<table id="cloud-index">
		<tr id="new-upload-progress-bar-0"></tr> 	</table>
	<div class="row row-cols-2 row-cols-md-4">
		<?php if ($_smarty_tpl->tpl_vars['parentpath']->value) {?>
		<div class="col mb-4">
			<div class="card h-100">
				<a href="<?php echo $_smarty_tpl->tpl_vars['parentpath']->value;?>
" class="text-decoration-none">
					<div class="d-flex align-items-center justify-content-center m-1" style="height: 4.5rem;">
						<i class="fa fa-fw fa-level-up fa-5x" style="font-size: 4rem"></i>
					</div>
					<div class="card-footer text-center">
						<small class="text-muted text-truncate">..</small>
					</div>
				</a>
			</div>
		</div>
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<div class="col mb-4">
			<div class="card h-100">
				<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel_path'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="text-decoration-none">
					<div class="d-flex align-items-center justify-content-center m-1" style="height: 4.5rem;">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['photo_icon']) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_icon'];?>
" class="rounded" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_icon'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['size_formatted'];?>
" style="max-height: 4rem; width: auto; max-width: 100%;">
						<?php } else { ?>
						<i class="fa fa-fw <?php echo $_smarty_tpl->tpl_vars['item']->value['icon_from_type'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['size_formatted'];?>
" style="font-size: 4rem"></i>
						<?php }?>
					</div>
					<div class="card-footer text-truncate text-center">
						<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</small>
					</div>
				</a>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php } else { ?>
	<table id="cloud-index">
		<tr>
			<th width="1%"></th>
			<th width="1%"></th>
			<th width="93%"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</th>
			<th width="1%"></th>
			<th width="1%"></th>
			<th width="1%"></th>
			<th width="1%" class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</th>
			<th width="1%" class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['lastmod']->value;?>
</th>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['parentpath']->value) {?>
		<tr id="cloud-index-up" class="cloud-index<?php if (!$_smarty_tpl->tpl_vars['is_root_folder']->value) {?> attach-drop<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_root_folder']->value) {?> data-folder="<?php echo $_smarty_tpl->tpl_vars['folder_parent']->value;?>
"/<?php }?>>
			<td></td>
			<td><i class="fa fa-level-up"></i></td>
			<td colspan="6"><a href="<?php echo $_smarty_tpl->tpl_vars['parentpath']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" class="p-2" draggable="false">..</a></td>
		</tr>
		<tr class="cloud-tools">
			<td colspan="8" class="attach-edit-panel"></td>
		</tr>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['channel_id']->value && $_smarty_tpl->tpl_vars['is_owner']->value && $_smarty_tpl->tpl_vars['entries']->value[0]) {?>
		<tr id="cloud-multi-actions">
			<td colspan="2">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="cloud-multi-tool-select-all" value="" title="<?php echo $_smarty_tpl->tpl_vars['select_all_label']->value;?>
">
				</div>
			</td>
			<td colspan="3">
				<div class="form-check form-check-inline">
					<label class="form-check-label" for="cloud-multi-tool-select-all"><?php echo $_smarty_tpl->tpl_vars['select_all_label']->value;?>
</label>
				</div>
			</td>
			<td colspan="3">
				<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
				<div class="dropdown">
					<button class="btn btn-warning btn-sm" id="multi-dropdown-button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-ellipsis-v d-table-cell"></i><span class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['bulk_actions_label']->value;?>
</span>
					</button>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-button">
						<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
						<a id="cloud-multi-tool-perms-btn" class="dropdown-item" href="#"><i class="fa fa-fw fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['adjust_permissions_label']->value;?>
</a>
						<?php }?>
						<a id="cloud-multi-tool-move-btn" class="dropdown-item" href="#"><i class="fa fa-fw fa-copy"></i> <?php echo $_smarty_tpl->tpl_vars['move_copy_label']->value;?>
</a>
						<a id="cloud-multi-tool-categories-btn" class="dropdown-item" href="#"><i class="fa fa-fw fa-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['categories_label']->value;?>
</a>
						<a id="cloud-multi-tool-download-btn" class="dropdown-item" href="#"><i class="fa fa-fw fa-cloud-download"></i> <?php echo $_smarty_tpl->tpl_vars['download_label']->value;?>
</a>
						<a id="cloud-multi-tool-delete-btn" class="dropdown-item" href="#"><i class="fa fa-fw fa-trash-o"></i> <?php echo $_smarty_tpl->tpl_vars['delete_label']->value;?>
</a>
					</div>
				</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
				<div class="dropdown">
					<button class="btn btn-warning btn-sm" id="multi-dropdown-button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-ellipsis-v d-table-cell"></i><span class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['bulk_actions_label']->value;?>
</span>
					</button>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-button">
						<a id="cloud-multi-tool-delete-btn" class="dropdown-item" href="#"><i class="fa fa-fw fa-trash-o"></i> <?php echo $_smarty_tpl->tpl_vars['admin_delete_label']->value;?>
</a>
					</div>
				</div>
				<?php }?>
			</td>
		</tr>
		<tr id="cloud-multi-tools">
			<td id="attach-multi-edit-panel" colspan="8">
				<form id="attach_multi_edit_form" action="attach_edit" method="post" class="acl-form" data-form_id="attach_multi_edit_form" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['allow_cid']->value;?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['allow_gid']->value;?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['deny_cid']->value;?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['deny_gid']->value;?>
'>
					<input type="hidden" name="channel_id" value="<?php echo $_smarty_tpl->tpl_vars['channel_id']->value;?>
" />
					<input id="multi-perms" type="hidden" name="permissions" value="0">
					<input type="hidden" name="return_path" value="<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
">
					<div id="cloud-multi-tool-move" class="cloud-multi-tool">
						<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['newfolder']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['copy']->value), 0, false);
?>
					</div>
					<div id="cloud-multi-tool-categories" class="cloud-multi-tool">
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['categories']->value), 0, false);
?>
					</div>
					<div id="cloud-multi-tool-submit" class="cloud-multi-tool">
						<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['recurse']->value), 0, true);
?>
						<?php }?>
						<div id="attach-multi-submit" class="mb-3">
							<button id="cloud-multi-tool-cancel-btn" class="btn btn-outline-secondary btn-sm cloud-multi-tool-cancel-btn" type="button">
									<?php echo $_smarty_tpl->tpl_vars['cancel_label']->value;?>

							</button>
							<div id="attach-multi-edit-perms" class="btn-group float-end">
								<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
								<button id="multi-dbtn-acl" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#aclModal" title="<?php echo $_smarty_tpl->tpl_vars['permset']->value;?>
" type="button">
									<i id="multi-jot-perms-icon" class="fa fa-<?php echo $_smarty_tpl->tpl_vars['lockstate']->value;?>
 jot-icons jot-perms-icon"></i>
								</button>
								<?php }?>
								<button id="multi-dbtn-submit" class="btn btn-primary btn-sm" type="submit" name="submit">
									<?php echo $_smarty_tpl->tpl_vars['submit_label']->value;?>

								</button>
							</div>
						</div>
					</div>
				</form>
			</td>
		</tr>
		<?php }?>
		<tr id="new-upload-progress-bar-0"></tr> 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<tr id="cloud-index-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-index<?php if ($_smarty_tpl->tpl_vars['item']->value['collection']) {?> attach-drop<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->value['collection']) {?> data-folder="<?php echo $_smarty_tpl->tpl_vars['item']->value['resource'];?>
"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" draggable="true">
			<td>
				<?php if ($_smarty_tpl->tpl_vars['channel_id']->value && $_smarty_tpl->tpl_vars['is_owner']->value) {?>
				<div class="form-check form-check-inline">
					<input class="form-check-input cloud-multi-tool-checkbox" type="checkbox" id="cloud-multi-tool-checkbox-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" name="attach_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
">
				</div>
				<?php }?>
			</td>
			<td><i class="fa <?php echo $_smarty_tpl->tpl_vars['item']->value['icon_from_type'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
"></i></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel_path'];?>
" class="p-2" draggable="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['terms'];?>
</td>
			<td class="cloud-index-tool p-2">
				<?php if ($_smarty_tpl->tpl_vars['item']->value['lockstate'] == 'lock') {?>
				<i class="fa fa-lock lockview" data-bs-toggle="dropdown" onclick="lockview('attach',<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
);"></i>
				<ul id="panel-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="lockview-panel dropdown-menu dropdown-menu-end"></ul>
				<?php }?>
			</td>
			<td class="cloud-index-tool">
				<?php if (($_smarty_tpl->tpl_vars['is_owner']->value || $_smarty_tpl->tpl_vars['item']->value['is_creator']) && $_smarty_tpl->tpl_vars['item']->value['attach_id']) {?>
				<div class="dropdown">
					<button class="btn btn-link btn-sm" id="dropdown-button-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-ellipsis-v"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-button-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
">
						<a id="cloud-tool-info-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-info-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-info"></i> <?php echo $_smarty_tpl->tpl_vars['info_label']->value;?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
						<a id="cloud-tool-perms-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-perms-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['item']->value['lockstate'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['adjust_permissions_label']->value;?>
</a>
						<?php }?>
						<a id="cloud-tool-rename-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-rename-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['rename_label']->value;?>
</a>
						<a id="cloud-tool-move-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-move-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-copy"></i> <?php echo $_smarty_tpl->tpl_vars['move_copy_label']->value;?>
</a>
						<a id="cloud-tool-categories-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-categories-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['categories_label']->value;?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['collection']) {?>
						<a id="cloud-tool-dir-download-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-dir-download-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-cloud-download"></i> <?php echo $_smarty_tpl->tpl_vars['download_label']->value;?>
</a>
						<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
						<a id="cloud-tool-share-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-share-btn" href="/rpost?attachment=[attachment]<?php echo $_smarty_tpl->tpl_vars['item']->value['resource'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['revision'];?>
[/attachment]&acl[allow_cid]=<?php echo $_smarty_tpl->tpl_vars['item']->value['raw_allow_cid'];?>
&acl[allow_gid]=<?php echo $_smarty_tpl->tpl_vars['item']->value['raw_allow_gid'];?>
&acl[deny_cid]=<?php echo $_smarty_tpl->tpl_vars['item']->value['raw_deny_cid'];?>
&acl[deny_gid]=<?php echo $_smarty_tpl->tpl_vars['item']->value['raw_deny_gid'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-share-square-o"></i> <?php echo $_smarty_tpl->tpl_vars['post_label']->value;?>
</a>
						<?php }?>
						<a id="cloud-tool-download-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-download-btn" href="/attach/<?php echo $_smarty_tpl->tpl_vars['item']->value['resource'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-cloud-download"></i> <?php echo $_smarty_tpl->tpl_vars['download_label']->value;?>
</a>
						<?php }?>
						<a id="cloud-tool-delete-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-delete-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-trash-o"></i> <?php echo $_smarty_tpl->tpl_vars['delete_label']->value;?>
</a>
					</div>
				</div>
				<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['is_admin']->value || $_smarty_tpl->tpl_vars['item']->value['attach_id']) {?>
				<div class="dropdown">
					<button class="btn btn-link btn-sm" id="dropdown-button-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-fw fa-ellipsis-v"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-button-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['item']->value['collection']) {?>
						<a id="cloud-tool-dir-download-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-dir-download-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-cloud-download"></i> <?php echo $_smarty_tpl->tpl_vars['download_label']->value;?>
</a>
						<?php } else { ?>
						<a id="cloud-tool-download-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-download-btn" href="/attach/<?php echo $_smarty_tpl->tpl_vars['item']->value['resource'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-cloud-download"></i> <?php echo $_smarty_tpl->tpl_vars['download_label']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
						<a id="cloud-tool-delete-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="dropdown-item cloud-tool-delete-btn" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><i class="fa fa-fw fa-trash-o"></i> <?php echo $_smarty_tpl->tpl_vars['admin_delete_label']->value;?>
</a>
						<?php }?>
					</div>
				</div>
				<?php }?>
			</td>
			<?php }?>
			<td class="d-none d-md-table-cell p-2"><?php echo $_smarty_tpl->tpl_vars['item']->value['size_formatted'];?>
</td>
			<td class="d-none d-md-table-cell p-2"><?php echo $_smarty_tpl->tpl_vars['item']->value['last_modified'];?>
</td>
		</tr>
		<tr id="cloud-tools-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-tools">
			<td id="attach-edit-panel-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="attach-edit-panel" colspan="8">
				<form id="attach_edit_form_<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" action="attach_edit" method="post" class="acl-form" data-form_id="attach_edit_form_<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['item']->value['allow_cid'];?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['item']->value['allow_gid'];?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['item']->value['deny_cid'];?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['item']->value['deny_gid'];?>
'>
					<input type="hidden" name="attach_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" />
					<input type="hidden" name="channel_id" value="<?php echo $_smarty_tpl->tpl_vars['channel_id']->value;?>
" />
					<input type="hidden" name="return_path" value="<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
">
					<div id="cloud-tool-rename-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-tool">
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item']->value['newfilename']), 0, true);
?>
					</div>
					<div id="cloud-tool-info-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-tool">
						<?php if (!$_smarty_tpl->tpl_vars['item']->value['collection']) {?>
						<div class="mb-3">
							<label for="attach-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['attach_bbcode_label']->value;?>
</label>
							<input type="text" class="form-control" id="attach-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" name="attach-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_bbcode'];?>
" onclick="this.select();" />
						</div>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['embed_bbcode']) {?>
						<div class="mb-3">
							<label for="embed-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['embed_bbcode_label']->value;?>
</label>
							<input type="text" class="form-control" id="embed-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" name="embed-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['embed_bbcode'];?>
" onclick="this.select();" />
						</div>
						<?php }?>
						<?php }?>
						<div class="mb-3">
							<label for="link-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['link_bbcode_label']->value;?>
</label>
							<input type="text" class="form-control" id="link-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" name="link-code-input-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_bbcode'];?>
" onclick="this.select();" />
						</div>
						<div class="mb-3">
							<button id="cloud-tool-close-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="btn btn-outline-secondary btn-sm cloud-tool-cancel-btn" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['close_label']->value;?>

							</button>
						</div>
					</div>
					<div id="cloud-tool-move-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-tool">
						<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item']->value['newfolder']), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item']->value['copy']), 0, true);
?>
					</div>
					<div id="cloud-tool-categories-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-tool">
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item']->value['categories']), 0, true);
?>
					</div>
					<div id="cloud-tool-submit-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="cloud-tool">
						<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
						<?php if (!$_smarty_tpl->tpl_vars['item']->value['collection']) {
$_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item']->value['notify']), 0, true);
}?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['collection']) {
$_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item']->value['recurse']), 0, true);
}?>
						<?php }?>
						<div id="attach-submit-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="mb-3">
							<button id="cloud-tool-cancel-btn-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="btn btn-outline-secondary btn-sm cloud-tool-cancel-btn" type="button" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['cancel_label']->value;?>

							</button>
							<div id="attach-edit-perms-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="btn-group float-end">
								<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
								<button id="dbtn-acl-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#aclModal" title="<?php echo $_smarty_tpl->tpl_vars['permset']->value;?>
" type="button">
									<i id="jot-perms-icon-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="fa fa-<?php echo $_smarty_tpl->tpl_vars['item']->value['lockstate'];?>
 jot-icons jot-perms-icon"></i>
								</button>
								<?php }?>
								<button id="dbtn-submit-<?php echo $_smarty_tpl->tpl_vars['item']->value['attach_id'];?>
" class="btn btn-primary btn-sm" type="submit" name="submit">
									<?php echo $_smarty_tpl->tpl_vars['submit_label']->value;?>

								</button>
							</div>
						</div>
					</div>
				</form>
			</td>
		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
<?php }?>
</div>
<?php }
}
