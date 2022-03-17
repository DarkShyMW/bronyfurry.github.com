<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:30:28
  from '/sites/git.bronyfurry.com/view/tpl/generic_links_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bc4497cb66_68681340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a09cceaba3a0c3418e368b2066f73f5575faee0' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/generic_links_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bc4497cb66_68681340 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
	<?php if ($_smarty_tpl->tpl_vars['title']->value) {?><h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['desc']->value) {?><div class="desc"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</div><?php }?>
	
	<ul class="nav nav-pills flex-column">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="nav-link<?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	
</div>
<?php }
}
