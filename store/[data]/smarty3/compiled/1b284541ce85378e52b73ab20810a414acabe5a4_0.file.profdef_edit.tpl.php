<?php
/* Smarty version 3.1.39, created on 2022-03-16 15:15:03
  from '/sites/git.bronyfurry.com/view/tpl/profdef_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231d4c7dda501_05504776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b284541ce85378e52b73ab20810a414acabe5a4' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profdef_edit.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 4,
  ),
),false)) {
function content_6231d4c7dda501_05504776 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>

<form action="admin/profs" method="post" >

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field_name']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field_type']->value), 0, true);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field_desc']->value), 0, true);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field_help']->value), 0, true);
?>

<input name="submit" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />

</form>
<?php }
}
