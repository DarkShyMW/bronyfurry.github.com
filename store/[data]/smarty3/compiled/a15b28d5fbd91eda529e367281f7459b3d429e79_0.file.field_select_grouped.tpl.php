<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:04:50
  from '/sites/git.bronyfurry.com/view/tpl/field_select_grouped.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b642ed5932_61854800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15b28d5fbd91eda529e367281f7459b3d429e79' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_select_grouped.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b642ed5932_61854800 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
_wrapper' class='mb-3 field select'>
		<label for='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<select class="form-control" name='<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' id='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value[4], 'opts', false, 'group');
$_smarty_tpl->tpl_vars['opts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['opts']->value) {
$_smarty_tpl->tpl_vars['opts']->do_else = false;
?>
				<optgroup label='<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opts']->value, 'val', false, 'opt');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opt']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['opt']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['opt']->value == $_smarty_tpl->tpl_vars['field']->value[2]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</optgroup>
		</select>
		<small class='help-block'><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</small>
	</div>
<?php }
}
