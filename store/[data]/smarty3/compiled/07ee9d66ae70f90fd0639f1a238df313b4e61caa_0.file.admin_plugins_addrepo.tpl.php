<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:23:03
  from '/sites/git.bronyfurry.com/view/tpl/admin_plugins_addrepo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba87b6e752_04774190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07ee9d66ae70f90fd0639f1a238df313b4e61caa' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_plugins_addrepo.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 2,
  ),
),false)) {
function content_6231ba87b6e752_04774190 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="add-plugin-repo-form" action="<?php echo $_smarty_tpl->tpl_vars['post']->value;?>
" method="post" >

    <p class="descriptive-text"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</p>
    <?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['repoURL']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['repoName']->value), 0, true);
?>
    <div class="btn-group float-end">
		<button id="add-plugin-repo-submit" class="btn btn-primary" type="submit" name="submit" onclick="adminPluginsAddRepo(); return false;"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
	</div>
</form>
<?php }
}
