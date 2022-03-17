<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:45:59
  from '/sites/git.bronyfurry.com/view/tpl/common_pills.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bfe776ee77_12772650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b81bcc5ae8d967176903c8883bc02bd813f14fb' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/common_pills.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bfe776ee77_12772650 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-pills flex-column">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pills']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
	<li class="nav-item hover-fx-show"<?php if ($_smarty_tpl->tpl_vars['p']->value['id']) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>>
		<a class="nav-link<?php if ($_smarty_tpl->tpl_vars['p']->value['sel']) {?> <?php echo $_smarty_tpl->tpl_vars['p']->value['sel'];
}?>" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value['title']) {?> title="<?php echo $_smarty_tpl->tpl_vars['p']->value['title'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['p']->value['sub']) {?> onclick="<?php if ($_smarty_tpl->tpl_vars['p']->value['sel']) {?>closeOpen('<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
_sub');<?php } else { ?>openClose('<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
_sub');<?php }?> return false;"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['p']->value['icon']) {?><i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['p']->value['icon'];?>
"></i><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['p']->value['img']) {?><img class="menu-img-1" src="<?php echo $_smarty_tpl->tpl_vars['p']->value['img'];?>
"><?php }?>
			<?php echo $_smarty_tpl->tpl_vars['p']->value['label'];?>

			<?php if ($_smarty_tpl->tpl_vars['p']->value['sub']) {?><i class="fa fa-fw fa-caret-down hover-fx-hide"></i><?php }?>
		</a>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['sub']) {?>
		<ul class="nav nav-pills flex-column ml-4" id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
_sub"<?php if (!$_smarty_tpl->tpl_vars['p']->value['sel']) {?> style="display: none;"<?php }?>>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['sub'], 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
			<li class="nav-item"<?php if ($_smarty_tpl->tpl_vars['ps']->value['id']) {?> id="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
"<?php }?>>
				<a class="nav-link<?php if ($_smarty_tpl->tpl_vars['ps']->value['sel']) {?> <?php echo $_smarty_tpl->tpl_vars['ps']->value['sel'];
}?>" href="<?php echo $_smarty_tpl->tpl_vars['ps']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['ps']->value['title']) {?> title="<?php echo $_smarty_tpl->tpl_vars['ps']->value['title'];?>
"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['ps']->value['icon']) {?><i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['ps']->value['icon'];?>
"></i><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['ps']->value['img']) {?><img class="menu-img-1" src="<?php echo $_smarty_tpl->tpl_vars['ps']->value['img'];?>
"><?php }?>
				<?php echo $_smarty_tpl->tpl_vars['ps']->value['label'];?>

				<?php if ($_smarty_tpl->tpl_vars['ps']->value['lock']) {?><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['ps']->value['lock'];?>
 text-muted"></i><?php }?>
				</a>
			</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<?php }?>
	</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
