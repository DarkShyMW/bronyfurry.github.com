<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:02:58
  from '/sites/git.bronyfurry.com/view/tpl/field_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b5d24d9de3_67222626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f596d8ba82f38d8817f9ca3f84c418239e992dc' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_input.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b5d24d9de3_67222626 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
_wrapper" class="mb-3">
		<label for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="label_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];
if ($_smarty_tpl->tpl_vars['field']->value[4]) {?><sup class="required zuiqmid"> <?php echo $_smarty_tpl->tpl_vars['field']->value[4];?>
</sup><?php }?></label>
		<input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['field']->value[2];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value[5]) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value[5];
}?>>
		<small id="help_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</small>
	</div>
<?php }
}
