<?php
/* Smarty version 3.1.39, created on 2022-03-16 15:09:25
  from '/sites/git.bronyfurry.com/view/tpl/usermenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231d37549e499_19209205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1569dc0679ee96938e7c2caca96512b74a2d588a' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/usermenu.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231d37549e499_19209205 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['wrap']->value) {?>
<div id="pmenu-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pmenu<?php if (!$_smarty_tpl->tpl_vars['class']->value) {?> widget<?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_desc']) {?>
	<h3 class="pmenu-title"><?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_desc'];
if ($_smarty_tpl->tpl_vars['edit']->value) {?> <a href="mitem/<?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
"><i class="fa fa-pencil fakelink" title="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
"></i></a><?php }?></h3>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
	<ul class="pmenu-body<?php if ($_smarty_tpl->tpl_vars['wrap']->value || !$_smarty_tpl->tpl_vars['class']->value) {?> nav nav-pills flex-column<?php } elseif (!$_smarty_tpl->tpl_vars['wrap']->value || $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'mitem');
$_smarty_tpl->tpl_vars['mitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mitem']->value) {
$_smarty_tpl->tpl_vars['mitem']->do_else = false;
?>
		<li id="pmenu-item-<?php echo $_smarty_tpl->tpl_vars['mitem']->value['mitem_id'];?>
" class="nav-item pmenu-item<?php if ($_smarty_tpl->tpl_vars['mitem']->value['submenu']) {?> dropdown<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['mitem']->value['submenu']) {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['mitem']->value['mitem_link'];
}?>" class="nav-link <?php if ($_smarty_tpl->tpl_vars['mitem']->value['submenu']) {?> dropdown-toggle<?php }?>"<?php if ($_smarty_tpl->tpl_vars['mitem']->value['submenu']) {?> data-bs-toggle="dropdown"<?php }
if ($_smarty_tpl->tpl_vars['mitem']->value['newwin']) {?>target="_blank"<?php }?> rel="nofollow noopener"><?php echo $_smarty_tpl->tpl_vars['mitem']->value['mitem_desc'];
if ($_smarty_tpl->tpl_vars['mitem']->value['submenu']) {?><span class="caret"></span><?php }?></a>
			<?php if ($_smarty_tpl->tpl_vars['mitem']->value['submenu']) {
echo $_smarty_tpl->tpl_vars['mitem']->value['submenu'];
}?>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<?php }
if ($_smarty_tpl->tpl_vars['wrap']->value) {?>
	<div class="pmenu-end"></div>
</div>
<?php }
}
}
