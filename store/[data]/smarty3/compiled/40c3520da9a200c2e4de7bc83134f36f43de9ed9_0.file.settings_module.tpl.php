<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:30:28
  from '/sites/git.bronyfurry.com/view/tpl/settings_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bc4496d997_95595488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40c3520da9a200c2e4de7bc83134f36f43de9ed9' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings_module.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 1,
  ),
),false)) {
function content_6231bc4496d997_95595488 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper">
		<form action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" method="post" autocomplete="off">
			<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
			<?php if ($_smarty_tpl->tpl_vars['rpath']->value) {?>
			<input type='hidden' name='rpath' value='<?php echo $_smarty_tpl->tpl_vars['rpath']->value;?>
'>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['feature']->value), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ($_smarty_tpl->tpl_vars['extra_settings_html']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['extra_settings_html']->value;?>

			<?php }?>
			<div class="settings-submit-wrapper" >
				<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
