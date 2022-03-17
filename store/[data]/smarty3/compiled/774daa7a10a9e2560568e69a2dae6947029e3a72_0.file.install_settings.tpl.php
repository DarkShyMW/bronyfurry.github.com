<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:04:50
  from '/sites/git.bronyfurry.com/view/tpl/install_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b642ecd288_27655426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '774daa7a10a9e2560568e69a2dae6947029e3a72' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/install_settings.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 2,
    'file:field_select_grouped.tpl' => 1,
  ),
),false)) {
function content_6231b642ecd288_27655426 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-4 mb-4">
	<div class="jumbotron">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<hr class="my-4">
		<h2><i class="fa fa-cogs"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</h2>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
	<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</div>
	<?php }?>

	<form id="install-form" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/setup" method="post">
		<input type="hidden" name="phpath" value="<?php echo $_smarty_tpl->tpl_vars['phpath']->value;?>
" />
		<input type="hidden" name="dbhost" value="<?php echo $_smarty_tpl->tpl_vars['dbhost']->value;?>
" />
		<input type="hidden" name="dbport" value="<?php echo $_smarty_tpl->tpl_vars['dbport']->value;?>
" />
		<input type="hidden" name="dbuser" value="<?php echo $_smarty_tpl->tpl_vars['dbuser']->value;?>
" />
		<input type="hidden" name="dbpass" value="<?php echo $_smarty_tpl->tpl_vars['dbpass']->value;?>
" />
		<input type="hidden" name="dbdata" value="<?php echo $_smarty_tpl->tpl_vars['dbdata']->value;?>
" />
		<input type="hidden" name="dbtype" value="<?php echo $_smarty_tpl->tpl_vars['dbtype']->value;?>
" />
		<input type="hidden" name="pass" value="4" />

		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['adminmail']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['siteurl']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_select_grouped.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['timezone']->value), 0, false);
?>

		<button class="btn btn-primary" id="install-submit" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
	</form>
</div>
<?php }
}
