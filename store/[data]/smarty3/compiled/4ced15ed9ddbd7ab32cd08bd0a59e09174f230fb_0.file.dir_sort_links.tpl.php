<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:04
  from '/sites/git.bronyfurry.com/view/tpl/dir_sort_links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b8309ee581_12710741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ced15ed9ddbd7ab32cd08bd0a59e09174f230fb' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/dir_sort_links.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 3,
  ),
),false)) {
function content_6231b8309ee581_12710741 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget" id="dir_sort_links">
<h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>

<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['safemode']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['globaldir']->value), 0, true);
$_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['pubforums']->value), 0, true);
?>

</div>
<?php }
}
