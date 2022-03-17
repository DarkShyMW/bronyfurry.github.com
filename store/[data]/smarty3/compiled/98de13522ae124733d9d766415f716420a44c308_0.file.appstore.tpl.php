<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:45
  from '/sites/git.bronyfurry.com/view/tpl/appstore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9c1ea1756_07127547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98de13522ae124733d9d766415f716420a44c308' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/appstore.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9c1ea1756_07127547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<ul class="nav nav-pills flex-column">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'x');
$_smarty_tpl->tpl_vars['x']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->do_else = false;
?>
	<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['x']->value[0];?>
" class="nav-link<?php if ($_smarty_tpl->tpl_vars['x']->value[2]) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['x']->value[1];?>
</a></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php }
}
