<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:03:59
  from '/sites/git.bronyfurry.com/view/tpl/field_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b60fee70f7_17516036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9088b667dfae459e302a75709fba88d88b9e776c' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_password.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b60fee70f7_17516036 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="mb-3">
		<label for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<input class="form-control" type="password" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value[2];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value[5]) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value[5];
}?>><?php if ($_smarty_tpl->tpl_vars['field']->value[4]) {?> <span class="required"><?php echo $_smarty_tpl->tpl_vars['field']->value[4];?>
</span> <?php }?>
		<small id="help_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</small>
	</div>
<?php }
}
