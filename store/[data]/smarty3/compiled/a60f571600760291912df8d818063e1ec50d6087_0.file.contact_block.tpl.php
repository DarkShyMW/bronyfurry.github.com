<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:48:05
  from '/sites/git.bronyfurry.com/view/tpl/contact_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c0652aa020_05075470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a60f571600760291912df8d818063e1ec50d6087' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/contact_block.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c0652aa020_05075470 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="contact-block" class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['contacts']->value;?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['micropro']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['viewconnections']->value) {?>
	<a class="allcontact-link" href="viewconnections/<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['viewconnections']->value;?>
</a>
	<?php }?>
	<div class='contact-block-content'>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['micropro']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['m']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php }?>
</div>
<div class="clear"></div>
<?php }
}
