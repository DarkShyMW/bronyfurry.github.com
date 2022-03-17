<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:21
  from '/sites/git.bronyfurry.com/view/tpl/new_member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b8411bd3b7_24106570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870fa9321abd8f0f45ecbc9e77718655e1e34a2b' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/new_member.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b8411bd3b7_24106570 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
<ul class="nav nav-pills flex-column">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'x');
$_smarty_tpl->tpl_vars['x']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->do_else = false;
?>
	<?php if (is_array($_smarty_tpl->tpl_vars['x']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['x']->value, 'z', false, 'y');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
		<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
" class="nav-link"><?php echo $_smarty_tpl->tpl_vars['z']->value;?>
</a></li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<div><strong><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</strong></div>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }?>
</div>

<?php }
}
