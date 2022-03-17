<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:20:04
  from '/sites/git.bronyfurry.com/view/tpl/field_duration.qmc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9d47c4dd9_34150665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239a1a2fb90a44b19adce80c3bab85aacd5fd483' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_duration.qmc.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9d47c4dd9_34150665 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['wrapper']->value != "no") {?><div id="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_wrapper" class="mb-3"><?php }?>

<label for="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
fs"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['qmcid']->value) {?><sup class="zuiqmid required"><?php echo $_smarty_tpl->tpl_vars['qmcid']->value;?>
</sup><?php }?>	
</label>
<fieldset name="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
fs" id="id_<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_fs" title="<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
">

<input id="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
n" 
	 name="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
n" 
	class="inline-block mr-1 text-center" style="width: 5rem;"  
	 type="number" 
<?php if ($_smarty_tpl->tpl_vars['field']->value['min']) {?> min="<?php echo $_smarty_tpl->tpl_vars['field']->value['min'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['field']->value['max']) {?> max="<?php echo $_smarty_tpl->tpl_vars['field']->value['max'];?>
"<?php }?>
	 size="<?php echo $_smarty_tpl->tpl_vars['field']->value['size'];?>
" 
	value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" 
	title="<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rabot']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
	<input  id="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"
	  		type="radio" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['default'] == $_smarty_tpl->tpl_vars['k']->value) {?> checked="checked"<?php }?>>
	<label for="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];
echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</fieldset>

<small id="<?php echo $_smarty_tpl->tpl_vars['qmc']->value;
echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_help" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['help']->value;?>
</small>

<?php if ($_smarty_tpl->tpl_vars['wrapper']->value != "no") {?></div><?php }?>



<?php }
}
