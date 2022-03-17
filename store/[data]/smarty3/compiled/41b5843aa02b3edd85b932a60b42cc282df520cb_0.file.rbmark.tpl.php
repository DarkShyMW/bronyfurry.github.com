<?php
/* Smarty version 3.1.39, created on 2022-03-16 15:09:13
  from '/sites/git.bronyfurry.com/view/tpl/rbmark.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231d36915afb7_60563466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b5843aa02b3edd85b932a60b42cc282df520cb' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/rbmark.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 3,
    'file:field_select.tpl' => 1,
  ),
),false)) {
function content_6231d36915afb7_60563466 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>


<form action="rbmark" method="post" >

<input type="hidden" name="private" value="<?php echo $_smarty_tpl->tpl_vars['private']->value;?>
" />
<input type="hidden" name="ischat" value="<?php echo $_smarty_tpl->tpl_vars['ischat']->value;?>
" />

<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['url']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
$_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['menus']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['menu_name']->value), 0, true);
?>

<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />

</form>
<?php }
}
