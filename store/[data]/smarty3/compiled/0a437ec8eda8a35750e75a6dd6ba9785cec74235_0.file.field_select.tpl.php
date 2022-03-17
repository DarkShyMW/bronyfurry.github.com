<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:03:59
  from '/sites/git.bronyfurry.com/view/tpl/field_select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b60feedac4_13711276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a437ec8eda8a35750e75a6dd6ba9785cec74235' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_select.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b60feedac4_13711276 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
_wrapper" class="mb-3">
		<label for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];
if ($_smarty_tpl->tpl_vars['field']->value[5]) {?><sup class="required zuiqmid"> <?php echo $_smarty_tpl->tpl_vars['field']->value[5];?>
</sup><?php }?></label>
		<select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value[4], 'val', false, 'opt');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opt']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['opt']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['opt']->value == $_smarty_tpl->tpl_vars['field']->value[2]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<small class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</small	>
	</div>

<?php }
}
