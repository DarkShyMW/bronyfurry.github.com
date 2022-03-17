<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:42:18
  from '/sites/git.bronyfurry.com/view/tpl/channel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bf0ab96065_23616792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd720287c94d8a320b1a4ac36dd77e70964188013' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/channel.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bf0ab96065_23616792 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section-subtitle-wrapper">
	<div class="float-end">
		<?php if ($_smarty_tpl->tpl_vars['channel']->value['default_links']) {?>
		<?php if ($_smarty_tpl->tpl_vars['channel']->value['default']) {?>
		<div>
			<i class="fa fa-check-square-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['msg_default']->value;?>

		</div>
		<?php } else { ?>
		<a href="manage/<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_id'];?>
/default" class="make-default-link">
			<i class="fa fa-square-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['msg_make_default']->value;?>

		</a>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['channel']->value['delegate']) {?>
			<?php echo $_smarty_tpl->tpl_vars['delegated_desc']->value;?>

		<?php }?>
	</div>
	<h3>
		<?php if ($_smarty_tpl->tpl_vars['selected']->value == $_smarty_tpl->tpl_vars['channel']->value['channel_id']) {?>
		<i class="fa fa-circle text-success" title="<?php echo $_smarty_tpl->tpl_vars['msg_selected']->value;?>
"></i>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['channel']->value['delegate']) {?>
		<i class="fa fa-arrow-circle-right" title="<?php echo $_smarty_tpl->tpl_vars['delegated_desc']->value;?>
"></i>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['selected']->value != $_smarty_tpl->tpl_vars['channel']->value['channel_id']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['channel']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_name'];?>
"><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_name'];?>

		<?php if ($_smarty_tpl->tpl_vars['selected']->value != $_smarty_tpl->tpl_vars['channel']->value['channel_id']) {?></a><?php }?>
	</h3>
	<div class="clear"></div>
</div>
<div class="section-content-wrapper">
	<div class="channel-photo-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['selected']->value != $_smarty_tpl->tpl_vars['channel']->value['channel_id']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['channel']->value['link'];?>
" class="channel-selection-photo-link" title="<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_name'];?>
"><?php }?>
			<img class="channel-photo" src="<?php echo $_smarty_tpl->tpl_vars['channel']->value['xchan_photo_m'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_name'];?>
" />
		<?php if ($_smarty_tpl->tpl_vars['selected']->value != $_smarty_tpl->tpl_vars['channel']->value['channel_id']) {?></a><?php }?>
	</div>
	<div class="channel-notifications-wrapper">
		<?php if (!$_smarty_tpl->tpl_vars['channel']->value['delegate']) {?>
		<div class="channel-notification">
			<i class="fa fa-fw fa-user<?php if ($_smarty_tpl->tpl_vars['channel']->value['intros'] != 0) {?> text-danger<?php }?>"></i>
			<?php if ($_smarty_tpl->tpl_vars['channel']->value['intros'] != 0) {?><a href='manage/<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_id'];?>
/connections/ifpending'><?php }
echo sprintf($_smarty_tpl->tpl_vars['intros_format']->value,$_smarty_tpl->tpl_vars['channel']->value['intros']);
if ($_smarty_tpl->tpl_vars['channel']->value['intros'] != 0) {?></a><?php }?>
		</div>
		<?php }?>
	</div>
</div>
<?php }
}
