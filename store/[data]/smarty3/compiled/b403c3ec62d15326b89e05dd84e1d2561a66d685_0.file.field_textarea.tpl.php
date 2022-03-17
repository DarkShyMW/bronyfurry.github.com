<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:21
  from '/sites/git.bronyfurry.com/view/tpl/field_textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b841185663_11236964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b403c3ec62d15326b89e05dd84e1d2561a66d685' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_textarea.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b841185663_11236964 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="mb-3">
		<label for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<textarea class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value[4]) {
echo $_smarty_tpl->tpl_vars['field']->value[4];
}?> ><?php echo $_smarty_tpl->tpl_vars['field']->value[2];?>
</textarea>
		<small class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</small>
	</div>
<?php }
}
