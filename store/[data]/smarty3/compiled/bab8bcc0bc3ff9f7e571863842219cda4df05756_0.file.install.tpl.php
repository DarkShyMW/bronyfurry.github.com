<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:08:18
  from '/sites/git.bronyfurry.com/view/tpl/install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b712c482c9_82333733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab8bcc0bc3ff9f7e571863842219cda4df05756' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/install.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b712c482c9_82333733 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-4 mb-4">
	<div class="jumbotron">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<hr class="my-4">
		<h2><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</h2>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
	<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</div>
	<?php }?>

	<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
	<br>
	<?php echo $_smarty_tpl->tpl_vars['what_next']->value;?>

</div>
<?php }
}
