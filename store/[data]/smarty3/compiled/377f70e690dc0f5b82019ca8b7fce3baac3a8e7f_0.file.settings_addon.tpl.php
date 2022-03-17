<?php
/* Smarty version 3.1.39, created on 2022-03-17 08:24:20
  from '/sites/git.bronyfurry.com/view/tpl/settings_addon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6232c6040a1756_82572439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377f70e690dc0f5b82019ca8b7fce3baac3a8e7f' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings_addon.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6232c6040a1756_82572439 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['action_url']->value) {?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" method="post" autocomplete="off">
		<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['form_security_token']->value) {?>
			<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['submit']->value) {?>
			<div class="settings-submit-wrapper" >
				<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			</div>
			<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['action_url']->value) {?>
		</form>
		<?php }?>
	</div>
</div>
<?php }
}
