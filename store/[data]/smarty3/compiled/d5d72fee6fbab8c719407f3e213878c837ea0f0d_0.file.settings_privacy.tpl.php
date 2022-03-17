<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:28:24
  from '/sites/git.bronyfurry.com/view/tpl/settings_privacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c9d8429301_08098888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d72fee6fbab8c719407f3e213878c837ea0f0d' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings_privacy.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 3,
    'file:field_select.tpl' => 1,
  ),
),false)) {
function content_6231c9d8429301_08098888 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['ptitle']->value;?>
</h2>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['nickname_block']->value;?>

	<form action="settings/privacy" id="settings-form" method="post" autocomplete="off">
		<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
' />

		<div class="section-content-tools-wrapper">

			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['autoperms']->value), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['index_opt_out']->value), 0, true);
?>

			<?php if ($_smarty_tpl->tpl_vars['sec_addon']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['sec_addon']->value;?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['permission_limits']->value) {?>
			<div id="permission-limits">
				<div class="modal" id="apsModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<div class="modal-title h3"><?php echo $_smarty_tpl->tpl_vars['permission_limits_label']->value;?>
</div>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="multi-collapse collapse show">
									<h2 class="text-danger mb-3"><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['permission_limits_warning']->value[0];?>
</h2>
									<h3 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['permission_limits_warning']->value[1];?>
</h3>
									<button type="button" class="btn btn-primary"  data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="collapseExample"><?php echo $_smarty_tpl->tpl_vars['permission_limits_warning']->value[2];?>
</button>
								</div>
								<div class="multi-collapse collapse">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permiss_arr']->value, 'permit');
$_smarty_tpl->tpl_vars['permit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permit']->value) {
$_smarty_tpl->tpl_vars['permit']->do_else = false;
?>
									<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['permit']->value), 0, true);
?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['group_actor']->value), 0, true);
?>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
			<div class="float-end">
				<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#apsModal"><?php echo $_smarty_tpl->tpl_vars['permission_limits_label']->value;?>
</button>
			</div>
			<?php }?>
			<div class="settings-submit-wrapper" >
				<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			</div>
		</div>
	</form>
</div>
<?php }
}
