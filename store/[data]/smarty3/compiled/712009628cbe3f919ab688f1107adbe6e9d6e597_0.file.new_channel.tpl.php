<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:43:38
  from '/sites/git.bronyfurry.com/view/tpl/new_channel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bf5adb3204_07362442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712009628cbe3f919ab688f1107adbe6e9d6e597' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/new_channel.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_select.tpl' => 1,
    'file:field_input.tpl' => 2,
  ),
),false)) {
function content_6231bf5adb3204_07362442 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper">
		<?php if (!$_smarty_tpl->tpl_vars['default_role']->value) {?>
		<div class="section-content-info-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['channel_usage_message']->value) {?>
		<div class="section-content-warning-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['channel_usage_message']->value;?>

		</div>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['canadd']->value) {?>
			<form action="new_channel" method="post" id="newchannel-form">
				<?php if ($_smarty_tpl->tpl_vars['default_role']->value) {?>
					<input type="hidden" name="permissions_role" value="<?php echo $_smarty_tpl->tpl_vars['default_role']->value;?>
" />
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['role']->value), 0, false);
?>
				<?php }?>

				<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['name']->value), 0, false);
?>

				<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['nickname']->value), 0, true);
?>
				<button class="btn btn-primary" type="submit" id="newchannel-submit-button"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>


				<div id="newchannel-submit-end" class="clear"></div>

				<div id="newchannel-import-link" class="descriptive-paragraph" ><?php echo $_smarty_tpl->tpl_vars['label_import']->value;?>
</div>
				<div id="newchannel-import-end" class="clear"></div>
			</form>
		<?php }?>
	</div>
</div>
<?php }
}
