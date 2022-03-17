<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:24:31
  from '/sites/git.bronyfurry.com/view/tpl/hq_controls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231badf4c3930_53922040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2410858e765a4b40f0b01cffd1362d8bd34bcc5' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/hq_controls.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231badf4c3930_53922040 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mb-3<?php if ($_smarty_tpl->tpl_vars['wrapper_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;
}?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
	<button class="<?php echo $_smarty_tpl->tpl_vars['e']->value['class'];?>
 rounded-circle<?php if ($_smarty_tpl->tpl_vars['entry_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['entry_class']->value;
}?>" type="<?php echo $_smarty_tpl->tpl_vars['e']->value['type'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['e']->value['label'];?>
"<?php if ($_smarty_tpl->tpl_vars['e']->value['extra']) {?> <?php echo $_smarty_tpl->tpl_vars['e']->value['extra'];
}?>>
		<?php if ($_smarty_tpl->tpl_vars['e']->value['icon']) {?><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['e']->value['icon'];?>
 mt-1 mb-1"></i><?php }?>
	</button>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
