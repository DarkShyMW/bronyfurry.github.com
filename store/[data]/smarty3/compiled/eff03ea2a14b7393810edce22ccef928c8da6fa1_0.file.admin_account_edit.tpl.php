<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:55
  from '/sites/git.bronyfurry.com/view/tpl/admin_account_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba43e1b645_82942626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff03ea2a14b7393810edce22ccef928c8da6fa1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_account_edit.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_password.tpl' => 2,
    'file:field_select.tpl' => 1,
    'file:field_input.tpl' => 1,
  ),
),false)) {
function content_6231ba43e1b645_82942626 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

<h3><?php echo $_smarty_tpl->tpl_vars['account']->value['account_email'];?>
</h3>


<form action="admin/account_edit/<?php echo $_smarty_tpl->tpl_vars['account']->value['account_id'];?>
" method="post" >
<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['account']->value['account_id'];?>
" />

<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['pass1']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['pass2']->value), 0, true);
$_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['account_language']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['service_class']->value), 0, false);
?>


<input type="submit" name="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />

</form>
<?php }
}
