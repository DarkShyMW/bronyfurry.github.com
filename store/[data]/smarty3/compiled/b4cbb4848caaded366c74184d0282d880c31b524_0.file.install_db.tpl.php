<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:03:59
  from '/sites/git.bronyfurry.com/view/tpl/install_db.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b60fedfb58_87117556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4cbb4848caaded366c74184d0282d880c31b524' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/install_db.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 4,
    'file:field_password.tpl' => 1,
    'file:field_select.tpl' => 1,
  ),
),false)) {
function content_6231b60fedfb58_87117556 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-4 mb-4">
	<div class="jumbotron">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<hr class="my-4">
		<h2><i class="fa fa-database"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</h2>
	</div>
	<div class="alert alert-info">
	<?php echo $_smarty_tpl->tpl_vars['info_01']->value;?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['info_02']->value;?>
<br>
	<?php echo $_smarty_tpl->tpl_vars['info_03']->value;?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
	<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</div>
	<?php }?>

	<form id="install-form" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/setup" method="post">
		<input type="hidden" name="phpath" value="<?php echo $_smarty_tpl->tpl_vars['phpath']->value;?>
" />
		<input type="hidden" name="pass" value="3" />

		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dbhost']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dbport']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dbuser']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dbpass']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dbdata']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dbtype']->value), 0, false);
?>

		<button class="btn btn-primary" id="install-submit" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button> 
	</form>
</div>

<?php }
}
