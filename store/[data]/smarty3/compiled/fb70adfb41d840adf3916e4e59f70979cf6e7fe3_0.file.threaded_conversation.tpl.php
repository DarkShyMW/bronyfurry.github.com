<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/threaded_conversation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b2602642_40404272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb70adfb41d840adf3916e4e59f70979cf6e7fe3' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/threaded_conversation.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9b2602642_40404272 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['preview']->value) {?>
<div id="threads-begin"></div>
<?php }
if ($_smarty_tpl->tpl_vars['photo_item']->value) {
echo $_smarty_tpl->tpl_vars['photo_item']->value;?>

<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread_item');
$_smarty_tpl->tpl_vars['thread_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thread_item']->value) {
$_smarty_tpl->tpl_vars['thread_item']->do_else = false;
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['thread_item']->value['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['thread_item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['preview']->value) {?>
<div id="threads-end"></div>
<div id="conversation-end"></div>
<?php }
}
}
