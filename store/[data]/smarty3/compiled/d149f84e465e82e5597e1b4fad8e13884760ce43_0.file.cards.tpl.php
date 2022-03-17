<?php
/* Smarty version 3.1.39, created on 2022-03-17 00:34:36
  from '/sites/git.bronyfurry.com/view/tpl/cards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_623257ec6e2a09_15619856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd149f84e465e82e5597e1b4fad8e13884760ce43' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cards.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623257ec6e2a09_15619856 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="live-cards"></div>
<?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

<?php }
}
