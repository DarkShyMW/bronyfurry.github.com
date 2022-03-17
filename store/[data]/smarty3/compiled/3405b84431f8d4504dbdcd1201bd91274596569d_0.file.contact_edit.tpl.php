<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:42
  from '/sites/git.bronyfurry.com/view/tpl/contact_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c04e6477e1_91064755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3405b84431f8d4504dbdcd1201bd91274596569d' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/contact_edit.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_select.tpl' => 1,
    'file:field_checkbox.tpl' => 1,
    'file:field_textarea.tpl' => 2,
  ),
),false)) {
function content_6231c04e6477e1_91064755 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="contact-edit-form" action="contactedit/<?php echo $_smarty_tpl->tpl_vars['contact_id']->value;?>
" method="post" >
	<div id="contact-edit-tools" class="panel-group"  role="tablist" >
		<div class="panel">
			<div class="section-subtitle-wrapper" role="tab" id="roles-tool">
				<h3>
					<a class="section" data-bs-toggle="collapse" data-bs-target="#roles-tool-collapse" href="#" aria-expanded="true" aria-controls="roles-tool-collapse" data-section="roles">
						<?php echo $_smarty_tpl->tpl_vars['roles_label']->value;?>

					</a>
				</h3>
			</div>
			<div id="roles-tool-collapse" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['section']->value == 'roles') {?> show<?php }?>" role="tabpanel" aria-labelledby="roles-tool" data-bs-parent="#contact-edit-tools">
				<div class="section-content-tools-wrapper">
					<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['permcat']->value), 0, false);
?>
					<button class="btn btn-outline-secondary btn-sm float-end sub_section<?php if ($_smarty_tpl->tpl_vars['sub_section']->value == 'perms') {?> sub_section_active<?php }?>" type="button" onclick="openClose('perms-table', 'table')" data-section="perms">
						<?php echo $_smarty_tpl->tpl_vars['compare_label']->value;?>

					</button>
					<a href="permcats/<?php echo $_smarty_tpl->tpl_vars['permcat_value']->value;?>
" class="btn btn-sm btn-outline-primary">
						<i class="fa fa-external-link"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['permcat_new']->value;?>

					</a>
					<table id="perms-table" class="table table-hover table-sm mt-3" style="display: <?php if ($_smarty_tpl->tpl_vars['sub_section']->value == 'perms') {?>table<?php } else { ?>none<?php }?>;">
						<thead>
							<tr class="w-100">
								<th scope="col"><?php echo $_smarty_tpl->tpl_vars['permission_label']->value;?>
</th>
								<th scope="col"><?php echo $_smarty_tpl->tpl_vars['them']->value;?>
</th>
								<th scope="col"><?php echo $_smarty_tpl->tpl_vars['me']->value;?>
</th>
							</tr>
						</thead>
						<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['perm']->value[1];?>
</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['perm']->value[2]) {?>
									<i class="fa fa-check text-success"></i>
									<?php } else { ?>
									<i class="fa fa-times text-danger"></i>
									<?php }?>
								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['perm']->value[3]) {?>
									<i class="fa fa-check text-success"></i>
									<?php } else { ?>
									<i class="fa fa-times text-danger"></i>
									<?php }?>
								</td>
							</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['groups']->value) {?>
		<div class="panel">
			<div class="section-subtitle-wrapper" role="tab" id="group-tool">
				<h3>
					<a class="section" data-bs-toggle="collapse" data-bs-target="#group-tool-collapse" href="#" aria-expanded="true" aria-controls="group-tool-collapse" data-section="group">
						<?php echo $_smarty_tpl->tpl_vars['pgroups_label']->value;?>

					</a>
				</h3>
			</div>
			<div id="group-tool-collapse" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['section']->value == 'group') {?> show<?php }?>" role="tabpanel" aria-labelledby="group-tool" data-bs-parent="#contact-edit-tools">
				<div class="section-content-tools-wrapper clearfix">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
					<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['group']->value), 0, true);
?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<a href="group/new" class="btn btn-sm btn-outline-primary">
						<i class="fa fa-external-link"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['pgroups_label']->value;?>

					</a>
				</div>
			</div>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['multiprofs']->value) {?>
		<div class="panel">
			<div class="section-subtitle-wrapper" role="tab" id="profile-tool">
				<h3>
					<a class="section" data-bs-toggle="collapse" data-bs-target="#profile-tool-collapse" href="#" aria-expanded="true" aria-controls="profile-tool-collapse" data-section="profile">
						<?php echo $_smarty_tpl->tpl_vars['profiles_label']->value;?>

					</a>
				</h3>
			</div>
			<div id="profile-tool-collapse" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['section']->value == 'profile') {?> show<?php }?>" role="tabpanel" aria-labelledby="profile-tool" data-bs-parent="#contact-edit-tools">
				<div class="section-content-tools-wrapper">
					<?php echo $_smarty_tpl->tpl_vars['profile_select']->value;?>

					<a href="profiles" class="btn btn-sm btn-outline-primary">
						<i class="fa fa-external-link"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['profiles_label']->value;?>

					</a>
				</div>
			</div>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['slide']->value) {?>
		<div class="panel">
			<div class="section-subtitle-wrapper" role="tab" id="affinity-tool">
				<h3>
					<a class="section" data-bs-toggle="collapse" data-bs-target="#affinity-tool-collapse" href="#" aria-expanded="true" aria-controls="affinity-tool-collapse" data-section="affinity">
						<?php echo $_smarty_tpl->tpl_vars['affinity_label']->value;?>

					</a>
				</h3>
			</div>
			<div id="affinity-tool-collapse" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['section']->value == 'affinity') {?> show<?php }?>" role="tabpanel" aria-labelledby="affinity-tool" data-bs-parent="#contact-edit-tools">
				<div class="section-content-tools-wrapper">
						<div class="mb-2"><label><?php echo $_smarty_tpl->tpl_vars['lbl_slider']->value;?>
</label></div>
						<?php echo $_smarty_tpl->tpl_vars['slide']->value;?>

						<input id="contact-closeness-mirror" type="hidden" name="closeness" value="<?php echo $_smarty_tpl->tpl_vars['close']->value;?>
" />
				</div>
			</div>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['connfilter']->value) {?>
		<div class="panel">
			<div class="section-subtitle-wrapper" role="tab" id="filter-tool">
				<h3>
					<a class="section"  data-bs-toggle="collapse" data-bs-target="#filter-tool-collapse" href="#" aria-expanded="true" aria-controls="filter-tool-collapse" data-section="filter">
						<?php echo $_smarty_tpl->tpl_vars['filter_label']->value;?>

					</a>
				</h3>
			</div>
			<div id="filter-tool-collapse" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['section']->value == 'filter') {?> show<?php }?>" role="tabpanel" aria-labelledby="filter-tool" data-bs-parent="#contact-edit-tools">
				<div class="section-content-tools-wrapper">
					<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['incl']->value), 0, false);
?>
					<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['excl']->value), 0, true);
?>
				</div>
			</div>
		</div>
		<?php } else { ?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['incl']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['incl']->value[2];?>
" />
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['excl']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['excl']->value[2];?>
" />
		<?php }?>
	</div>
</form>
<?php }
}
