<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:23:05
  from '/sites/git.bronyfurry.com/view/tpl/admin_settings_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba89c39b66_63956528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7de97a02444e0122626db463d4938e6087cdbc3e' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_settings_features.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 2,
  ),
),false)) {
function content_6231ba89c39b66_63956528 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	</div>
	<form action="admin/features" method="post" autocomplete="off">
	<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
	<div class="panel-group" id="settings" role="tablist" aria-multiselectable="true">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'f', false, 'g');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
		<div class="panel">
			<div class="section-subtitle-wrapper" role="tab" id="<?php echo $_smarty_tpl->tpl_vars['g']->value;?>
-settings-title">
				<h3>
					<a data-bs-toggle="collapse" data-bs-target="#<?php echo $_smarty_tpl->tpl_vars['g']->value;?>
-settings-content" href="#" aria-expanded="true" aria-controls="<?php echo $_smarty_tpl->tpl_vars['g']->value;?>
-settings-collapse">
						<?php echo $_smarty_tpl->tpl_vars['f']->value[0];?>

					</a>
				</h3>
			</div>
			<div id="<?php echo $_smarty_tpl->tpl_vars['g']->value;?>
-settings-content" class="panel-collapse collapse<?php if ($_smarty_tpl->tpl_vars['g']->value == 'general') {?> show<?php }?>" data-bs-parent="#settings" role="tabpanel" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['g']->value;?>
-settings-title">
				<div class="section-content-tools-wrapper">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value[1], 'fcat');
$_smarty_tpl->tpl_vars['fcat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->do_else = false;
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['fcat']->value[0]), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['fcat']->value[1]), 0, true);
?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<div class="settings-submit-wrapper" >
						<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
					</div>
				</div>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
