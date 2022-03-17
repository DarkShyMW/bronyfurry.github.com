<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:20:39
  from '/sites/git.bronyfurry.com/view/tpl/profile_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9f79031c1_18909774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee01621f449bddb1e0c6555bcaaf5374b5635516' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_tabs.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9f79031c1_18909774 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['tab']->value['sel']) {?> <?php echo $_smarty_tpl->tpl_vars['tab']->value['sel'];
}?>" href="<?php echo $_smarty_tpl->tpl_vars['tab']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['tab']->value['title']) {?> title="<?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
"<?php }?>><i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['tab']->value['icon'];?>
 generic-icons-nav"></i><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
