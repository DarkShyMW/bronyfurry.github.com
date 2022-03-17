<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:48:38
  from '/sites/git.bronyfurry.com/view/tpl/field_select_raw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c086d4f3e0_55134199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a8989afdefa6b823f1c488758d85b0c4970c3d7' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_select_raw.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c086d4f3e0_55134199 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class='mb-3 field select'>
		<label for='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<select class="form-control" name='<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' id='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'>
			<?php echo $_smarty_tpl->tpl_vars['field']->value[4];?>

		</select>
		<span class='help-block'><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</span>
	</div>
<?php }
}
