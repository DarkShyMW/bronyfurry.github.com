<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:53:59
  from '/sites/git.bronyfurry.com/view/tpl/group_selection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c1c751e862_73279312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b043fa28fdf02543668a915cf80a68adf8ab42e1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/group_selection.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c1c751e862_73279312 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mb-3 field custom">
	<label for="id_<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label>
	<select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" >
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value['selected']) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
</div>
<?php }
}
