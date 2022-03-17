<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:53:59
  from '/sites/git.bronyfurry.com/view/tpl/field_acheckbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c1c752e844_81262741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '879ef34ce0fd61fbb5936a879713f2e66a8816d1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_acheckbox.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c1c752e844_81262741 (Smarty_Internal_Template $_smarty_tpl) {
?><tr>
	<td>
		<label class="mainlabel" for="me_id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<span class="field_abook_help"><?php echo $_smarty_tpl->tpl_vars['field']->value[6];?>
</span>
	</td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['field']->value[5]) {?>
		<span class="text-nowrap text-danger">
			<?php echo $_smarty_tpl->tpl_vars['inherited']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['field']->value[7]) {?>
			<i class="fa fa-check-square-o"></i>
			<?php } else { ?>
			<i class="fa fa-square-o"></i>
			<?php }?>
		</span>
		<?php }?>
	</td>
	<td>
		<?php if ($_smarty_tpl->tpl_vars['is_system_role']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value[3]) {?>
		<i class="fa fa-check-square-o"></i>
		<?php } else { ?>
		<i class="fa fa-square-o"></i>
		<?php }?>
		<?php } else { ?>
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value[4];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value[3]) {?>checked="checked"<?php }?> />
		<?php }?>

	</td>

</tr>
<?php }
}
