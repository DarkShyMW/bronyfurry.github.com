<?php
/* Smarty version 3.1.39, created on 2022-03-16 22:18:14
  from '/sites/git.bronyfurry.com/view/tpl/item_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_623237f6383213_44486785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3fae1a2d74b02a71e9290568c2d4ffb02cd3c52' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/item_categories.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623237f6383213_44486785 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value) {?>
<!--div class="categorytags"-->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
<span class="item-category badge rounded-pill bg-warning text-dark"><i class="fa fa-asterisk"></i>&nbsp;<?php if ($_smarty_tpl->tpl_vars['cat']->value['url']) {?><a class="text-dark" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['term'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['cat']->value['term'];
}?></span>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!--/div-->
<?php }?>

<?php }
}
