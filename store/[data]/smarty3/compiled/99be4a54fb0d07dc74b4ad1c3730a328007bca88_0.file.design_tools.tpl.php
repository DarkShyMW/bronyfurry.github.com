<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:48:38
  from '/sites/git.bronyfurry.com/view/tpl/design_tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c086d7c5d4_31944652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99be4a54fb0d07dc74b4ad1c3730a328007bca88' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/design_tools.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c086d7c5d4_31944652 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="design-tools" class="widget design-tools">
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<div class="nav nav-pills flex-column">
		<a class="nav-link" href="blocks/<?php echo $_smarty_tpl->tpl_vars['who']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value;?>
</a>
		<a class="nav-link" href="menu/<?php echo $_smarty_tpl->tpl_vars['who']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['menus']->value;?>
</a>
		<a class="nav-link" href="layouts/<?php echo $_smarty_tpl->tpl_vars['who']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['layout']->value;?>
</a>
		<a class="nav-link" href="webpages/<?php echo $_smarty_tpl->tpl_vars['who']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</a>
	</div>
</div>
<?php }
}
