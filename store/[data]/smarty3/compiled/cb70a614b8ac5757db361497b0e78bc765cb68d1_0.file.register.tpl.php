<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:12:57
  from '/sites/git.bronyfurry.com/view/tpl/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b8290f7006_18494969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb70a614b8ac5757db361497b0e78bc765cb68d1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/register.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 4,
    'file:field_password.tpl' => 2,
    'file:field_textarea.tpl' => 1,
    'file:field_checkbox.tpl' => 1,
  ),
),false)) {
function content_6231b8290f7006_18494969 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper">
		<form action="register" method="post" id="register-form">
			<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
			<?php if ($_smarty_tpl->tpl_vars['now']->value) {?>
			<div class="section-content-danger-wrapper">
				<div class="h3"><?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['reg_is']->value || $_smarty_tpl->tpl_vars['other_sites']->value || $_smarty_tpl->tpl_vars['msg']->value) {?>
			<div class="section-content-warning-wrapper">
				<div id="register-desc" class="descriptive-paragraph"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
				<div id="register-desc" class="descriptive-paragraph"><?php echo $_smarty_tpl->tpl_vars['reg_is']->value;?>
</div>
				<div id="register-sites" class="descriptive-paragraph"><?php echo $_smarty_tpl->tpl_vars['other_sites']->value;?>
</div>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['registertext']->value) {?>
			<div class="section-content-info-wrapper">
				<div id="register-text" class="descriptive-paragraph"><?php echo $_smarty_tpl->tpl_vars['registertext']->value;?>
</div>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['invitations']->value) {?>
			<a id="zar014" href="javascript:;" style="display: inline-block;"><?php echo $_smarty_tpl->tpl_vars['haveivc']->value;?>
</a>
			<div id="zar015" style="display: none;">
				<div class="position-relative">
					<div id="invite-spinner" class="spinner-wrapper position-absolute" style="top: 2.5rem; right: 0.5rem;"><div class="spinner s"></div></div>
					<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>array($_smarty_tpl->tpl_vars['invite_code']->value[0],$_smarty_tpl->tpl_vars['invite_code']->value[1],'','','')), 0, false);
?>
				</div>
			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['auto_create']->value) {?>
			<div class="position-relative">
				<div id="name-spinner" class="spinner-wrapper position-absolute" style="top: 2.5rem; right: 0.75rem;"><div class="spinner s"></div></div>
				<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['name']->value), 0, true);
?>
			</div>
			<div class="position-relative">
				<div id="nick-hub" class="position-absolute" style="top: 2.3rem; right: 0.75rem;"><span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['nickhub']->value;?>
</span></div>
				<div id="nick-spinner" class="spinner-wrapper position-absolute" style="top: 2.5rem; right: 0.75rem;"><div class="spinner s"></div></div>
				<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['nickname']->value), 0, true);
?>
			</div>
			<?php }?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['email']->value), 0, true);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['pass1']->value), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['pass2']->value), 0, true);
?>
			<?php if ($_smarty_tpl->tpl_vars['reg_is']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_msg']->value), 0, false);
?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['enable_tos']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['tos']->value), 0, false);
?>
			<?php } else { ?>
			<input type="hidden" name="tos" value="1" />
			<?php }?>
			<button class="btn btn-primary" type="submit" name="submit" id="newchannel-submit-button" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['atform']->value;?>
><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			<div id="register-submit-end" class="register-field-end"></div>
		</form>
	</div>
</div>
<?php }
}
