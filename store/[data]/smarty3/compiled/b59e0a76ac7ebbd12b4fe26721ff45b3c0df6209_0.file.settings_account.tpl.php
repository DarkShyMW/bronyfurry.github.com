<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:28:22
  from '/sites/git.bronyfurry.com/view/tpl/settings_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c9d63b9265_56099640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b59e0a76ac7ebbd12b4fe26721ff45b3c0df6209' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings_account.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 1,
    'file:field_password.tpl' => 3,
  ),
),false)) {
function content_6231c9d63b9265_56099640 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<a title="<?php echo $_smarty_tpl->tpl_vars['removeaccount']->value;?>
" class="btn btn-danger btn-sm float-end" href="removeaccount"><i class="fa fa-trash-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['removeme']->value;?>
</a>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<form action="settings/account" id="settings-account-form" method="post" autocomplete="off" >
		<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
		<div class="section-content-tools-wrapper">
			<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['email']->value), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['origpass']->value), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['password1']->value), 0, true);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['password2']->value), 0, true);
?>

			<div class="settings-submit-wrapper" >
				<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			</div>
			<?php echo $_smarty_tpl->tpl_vars['account_settings']->value;?>

		</div>
	</form>
</div>

<?php }
}
