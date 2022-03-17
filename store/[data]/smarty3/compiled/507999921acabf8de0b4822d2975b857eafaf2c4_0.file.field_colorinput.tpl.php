<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:28:47
  from '/sites/git.bronyfurry.com/view/tpl/field_colorinput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c9efd89005_34919349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '507999921acabf8de0b4822d2975b857eafaf2c4' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_colorinput.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c9efd89005_34919349 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class='mb-3 field input color'>
		<label for='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' id='label_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<input class='form-control color' name='<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' id='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' type="text" value="<?php echo $_smarty_tpl->tpl_vars['field']->value[2];?>
"><?php if ($_smarty_tpl->tpl_vars['field']->value[4]) {?> <span class="required"><?php echo $_smarty_tpl->tpl_vars['field']->value[4];?>
</span> <?php }?>
		<span id='help_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' class='help-block'><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</span>
		<div id='end_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' class='field_end'></div>
	</div>
<?php }
}
