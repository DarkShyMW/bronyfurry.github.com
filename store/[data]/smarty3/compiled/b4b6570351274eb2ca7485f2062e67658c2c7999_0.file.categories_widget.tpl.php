<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:45
  from '/sites/git.bronyfurry.com/view/tpl/categories_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9c1ea9d26_13448366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4b6570351274eb2ca7485f2062e67658c2c7999' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/categories_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9c1ea9d26_13448366 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="categories-sidebar" class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<div id="categories-sidebar-desc"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</div>

	<ul class="nav nav-pills flex-column">
		<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
" class="nav-link<?php if ($_smarty_tpl->tpl_vars['sel_all']->value) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['all']->value;?>
</a></li>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['terms']->value, 'term');
$_smarty_tpl->tpl_vars['term']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['term']->value) {
$_smarty_tpl->tpl_vars['term']->do_else = false;
?>
		<li class="nav-item"><a  href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/?cat=<?php echo urlencode($_smarty_tpl->tpl_vars['term']->value['name']);?>
" class="nav-link<?php if ($_smarty_tpl->tpl_vars['term']->value['selected']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['term']->value['name'];?>
</a></li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>

</div>
<?php }
}
