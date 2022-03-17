<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:53:59
  from '/sites/git.bronyfurry.com/view/tpl/permcats_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c1c753bdf5_15736620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7ae0d8e3972a43d4e11618af89fbf71ceae8de' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/permcats_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c1c753bdf5_15736620 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['roles_label']->value;?>
</h3>
	<ul class="nav nav-pills flex-column">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
		<li class="nav-item">
			<a class="nav-link<?php if ($_smarty_tpl->tpl_vars['role']->value['active']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['role']->value['url'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>

			</a>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<?php if ($_smarty_tpl->tpl_vars['members']->value) {?>
<div class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['members_label']->value;?>
</h3>
	<div class="border rounded overflow-auto" style="height: 19rem;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['member']->value['url'];?>
" class="lh-sm border-bottom p-2 d-block text-truncate">
			<img src="<?php echo $_smarty_tpl->tpl_vars['member']->value['photo'];?>
" class="float-start rounded me-2" style="height: 2.2rem; width: 2.2rem;" loading="lazy">
			<?php echo $_smarty_tpl->tpl_vars['member']->value['name'];?>
<br>
			<span class="text-muted small"><?php echo $_smarty_tpl->tpl_vars['member']->value['addr'];?>
</span>
		</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
}
