<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:22
  from '/sites/git.bronyfurry.com/view/tpl/app_nav_pinned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b842317349_19433801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '088dade717f2a782331b882d5e92bae438cfd722' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/app_nav_pinned.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b842317349_19433801 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="navbar-app nav-link<?php if ($_smarty_tpl->tpl_vars['app']->value['active']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
	<i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
	<span class="d-lg-none"><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</span>
	<?php } else { ?>
	<img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['photo'];?>
" width="16" height="16" />
	<div class="d-lg-none d-inline-block" style="margin-left: 9px"><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</div>
	<?php }?>
</a>
<?php }
}
