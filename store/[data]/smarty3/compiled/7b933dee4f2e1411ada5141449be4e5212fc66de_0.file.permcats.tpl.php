<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:53:59
  from '/sites/git.bronyfurry.com/view/tpl/permcats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c1c75279b4_01829407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b933dee4f2e1411ada5141449be4e5212fc66de' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/permcats.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 1,
    'file:field_checkbox.tpl' => 1,
    'file:field_acheckbox.tpl' => 1,
    'file:field_select.tpl' => 1,
  ),
),false)) {
function content_6231c1c75279b4_01829407 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<div class="section-content-tools-wrapper">
		<form action="permcats/<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
" id="settings-permcats-form" method="post" autocomplete="off" >
			<input type="hidden" name="form_security_token" value="<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
">
			<input type="hidden" name="return_path" value="<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
">

			<?php if ($_smarty_tpl->tpl_vars['is_system_role']->value) {?>
			<input type="hidden" name="is_system_role" value="1">
			<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['is_system_role']->value;?>
">
			<?php }?>

			<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['name']->value), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['default_role']->value), 0, false);
?>

			<?php echo $_smarty_tpl->tpl_vars['group_select']->value;?>


			<div class="section-subtitle-wrapper" id="perms-tool">
				<h3>
					<?php echo $_smarty_tpl->tpl_vars['permlbl']->value;?>

				</h3>
			</div>
			<div class="section-content-warning-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['permnote']->value;?>

			</div>
			<table id="" class="table table-hover">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'prm');
$_smarty_tpl->tpl_vars['prm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prm']->value) {
$_smarty_tpl->tpl_vars['prm']->do_else = false;
?>
				<?php $_smarty_tpl->_subTemplateRender("file:field_acheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['prm']->value), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
			<div class="clearfix">
				<?php if (!$_smarty_tpl->tpl_vars['is_system_role']->value && $_smarty_tpl->tpl_vars['return_path']->value) {?>
				<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-modal"><?php echo $_smarty_tpl->tpl_vars['delet_role_button']->value;?>
</button>
				<?php }?>
				<button type="submit" name="submit" class="btn btn-primary float-end"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			</div>
		</form>
	</div>
</div>
<?php if (!$_smarty_tpl->tpl_vars['is_system_role']->value && $_smarty_tpl->tpl_vars['return_path']->value) {?>
<div id="delete-modal" class="modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="h3">
					<?php echo $_smarty_tpl->tpl_vars['delete_label']->value;?>

				</div>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="permcats" id="delete-permcat-form" method="post">
				<input type="hidden" name="form_security_token" value="<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
">
				<input type="hidden" name="deleted_role" value="<?php echo $_smarty_tpl->tpl_vars['current_role']->value;?>
">
				<div id="edit-modal-body" class="modal-body">
					<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['delete_role_select']->value), 0, false);
?>
				</div>
				<div class="modal-footer">
					<button id="" type="submit" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['delet_role_button']->value;?>
</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php }
}
}
