<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:28:28
  from '/sites/git.bronyfurry.com/view/tpl/settings_display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c9dc4438d8_80628962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edaa213da9645ee817e5ab3de2970d6aca8ca30f' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings_display.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_themeselect.tpl' => 1,
    'file:field_select.tpl' => 1,
    'file:field_input.tpl' => 2,
    'file:field_checkbox.tpl' => 5,
  ),
),false)) {
function content_6231c9dc4438d8_80628962 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['ptitle']->value;?>
</h2>
	</div>
	<form action="settings/display" id="settings-form" method="post" autocomplete="off" >
		<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>

		<div class="panel-group" id="settings" role="tablist" aria-multiselectable="true">
			<?php if ($_smarty_tpl->tpl_vars['theme']->value) {?>
			<div class="panel">
				<div class="section-subtitle-wrapper" role="tab" id="theme-settings-title">
					<h3>
						<a data-bs-toggle="collapse" data-bs-target="#theme-settings-content" href="#" aria-expanded="true" aria-controls="theme-settings-content">
							<?php echo $_smarty_tpl->tpl_vars['d_tset']->value;?>

						</a>
					</h3>
				</div>
				<div id="theme-settings-content" class="collapse show" role="tabpanel" aria-labelledby="theme-settings" data-bs-parent="#settings" >
					<div class="section-content-tools-wrapper">
						<?php if ($_smarty_tpl->tpl_vars['theme']->value) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_themeselect.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['theme']->value), 0, false);
?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['schema']->value) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['schema']->value), 0, false);
?>
						<?php }?>
						<div class="settings-submit-wrapper" >
							<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<div class="panel">
				<div class="section-subtitle-wrapper" role="tab" id="custom-settings-title">
					<h3>
						<a data-bs-toggle="collapse" data-bs-target="#custom-settings-content" href="" aria-expanded="true" aria-controls="custom-settings-content">
							<?php echo $_smarty_tpl->tpl_vars['d_ctset']->value;?>

						</a>
					</h3>
				</div>
				<div id="custom-settings-content" class="collapse<?php if (!$_smarty_tpl->tpl_vars['theme']->value) {?> in<?php }?>" role="tabpanel" aria-labelledby="custom-settings" data-bs-parent="#settings" >
					<div class="section-content-tools-wrapper">
						<?php if ($_smarty_tpl->tpl_vars['theme_config']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['theme_config']->value;?>

						<?php }?>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="section-subtitle-wrapper" role="tab" id="content-settings-title">
					<h3>
						<a data-bs-toggle="collapse" data-bs-target="#content-settings-content" href="" aria-expanded="true" aria-controls="content-settings-content">
							<?php echo $_smarty_tpl->tpl_vars['d_cset']->value;?>

						</a>
					</h3>
				</div>
				<div id="content-settings-content" class="collapse<?php if (!$_smarty_tpl->tpl_vars['theme']->value && !$_smarty_tpl->tpl_vars['theme_config']->value) {?> in<?php }?>" role="tabpanel" aria-labelledby="content-settings" data-bs-parent="#settings">
					<div class="section-content-wrapper">
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['ajaxint']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['itemspage']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['nosmile']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['title_tosource']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['user_scalable']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['preload_images']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['start_menu']->value), 0, true);
?>
						<div class="settings-submit-wrapper" >
							<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<?php }
}
