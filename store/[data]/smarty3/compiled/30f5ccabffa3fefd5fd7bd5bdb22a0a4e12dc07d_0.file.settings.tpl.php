<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:37:42
  from '/sites/git.bronyfurry.com/view/tpl/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bdf6979bc5_36073481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f5ccabffa3fefd5fd7bd5bdb22a0a4e12dc07d' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_select.tpl' => 1,
    'file:field_select_grouped.tpl' => 1,
    'file:field_input.tpl' => 6,
    'file:field_checkbox.tpl' => 4,
    'file:field_intcheckbox.tpl' => 25,
  ),
),false)) {
function content_6231bdf6979bc5_36073481 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<a title="<?php echo $_smarty_tpl->tpl_vars['removechannel']->value;?>
" class="btn btn-danger btn-sm float-end" href="removeme"><i class="fa fa-trash-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['removeme']->value;?>
</a>
		<h2><?php echo $_smarty_tpl->tpl_vars['ptitle']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['nickname_block']->value;?>

	<form action="settings" id="settings-form" method="post" autocomplete="off" class="acl-form" data-form_id="settings-form" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['allow_cid']->value;?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['allow_gid']->value;?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['deny_cid']->value;?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['deny_gid']->value;?>
'>
		<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
' />
		<div class="panel-group" id="settings" role="tablist" aria-multiselectable="true">
			<div class="panel">
				<div class="section-subtitle-wrapper" role="tab" id="basic-settings">
					<h3>
						<a data-bs-toggle="collapse" data-bs-target="#basic-settings-collapse" href="#">
							<?php echo $_smarty_tpl->tpl_vars['h_basic']->value;?>

						</a>
					</h3>
				</div>
				<div id="basic-settings-collapse" class="collapse show" role="tabpanel" aria-labelledby="basic-settings" data-bs-parent="#settings">
					<div class="section-content-tools-wrapper">
						<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['role']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_select_grouped.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['timezone']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['defloc']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['allowloc']->value), 0, false);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['adult']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['photo_path']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['attach_path']->value), 0, true);
?>
						<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['expire']->value), 0, true);
?>
						<?php if ($_smarty_tpl->tpl_vars['basic_addon']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['basic_addon']->value;?>

						<?php }?>
						<div class="settings-submit-wrapper" >
							<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
						</div>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="section-subtitle-wrapper" role="tab" id="notification-settings">
					<h3>
						<a data-bs-toggle="collapse" data-bs-target="#notification-settings-collapse" href="#">
							<?php echo $_smarty_tpl->tpl_vars['h_not']->value;?>

						</a>
					</h3>
				</div>
				<div id="notification-settings-collapse" class="collapse" role="tabpanel" aria-labelledby="notification-settings" data-bs-parent="#settings">
					<div class="section-content-tools-wrapper">
						<div id="settings-notifications">

							<div id="desktop-notifications-info" class="section-content-warning-wrapper" style="display: none;">
								<?php echo $_smarty_tpl->tpl_vars['desktop_notifications_info']->value;?>
<br>
								<a id="desktop-notifications-request" href="#"><?php echo $_smarty_tpl->tpl_vars['desktop_notifications_request']->value;?>
</a>
							</div>

							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['mailhost']->value), 0, true);
?>

							<h3><?php echo $_smarty_tpl->tpl_vars['activity_options']->value;?>
</h3>
							<div class="group">
																								<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['post_newfriend']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['post_profilechange']->value), 0, true);
?>
							</div>
							<h3><?php echo $_smarty_tpl->tpl_vars['lbl_not']->value;?>
</h3>
							<div class="group">
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify1']->value), 0, false);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify2']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify3']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify4']->value), 0, true);
?>
																<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify5']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify6']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify7']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['notify8']->value), 0, true);
?>
							</div>
							<h3><?php echo $_smarty_tpl->tpl_vars['lbl_vnot']->value;?>
</h3>
							<div class="group">
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify1']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify2']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify3']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify4']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify5']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify6']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify10']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify7']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify8']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify9']->value), 0, true);
?>
								<?php if ($_smarty_tpl->tpl_vars['vnotify11']->value) {?>
									<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify11']->value), 0, true);
?>
								<?php }?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify12']->value), 0, true);
?>
								<?php if ($_smarty_tpl->tpl_vars['vnotify13']->value) {?>
									<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify13']->value), 0, true);
?>
								<?php }?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify14']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['vnotify15']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['always_show_in_notices']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_intcheckbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['update_notices_per_parent']->value), 0, true);
?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['evdays']->value), 0, true);
?>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['notify_addon']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['notify_addon']->value;?>

						<?php }?>
						<div class="settings-submit-wrapper" >
							<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<?php echo $_smarty_tpl->tpl_vars['aclselect']->value;?>

</div>
<?php }
}
