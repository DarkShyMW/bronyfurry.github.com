<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:02:58
  from '/sites/git.bronyfurry.com/view/tpl/install_checks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b5d26bd155_40681484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b03b2c2a9af543230537d3e57821ea4874e69999' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/install_checks.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b5d26bd155_40681484 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-4 mb-4">
	<div class="jumbotron">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<hr class="my-4">
		<h2><i class="fa fa-heartbeat"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
</h2>
	</div>
	<form  action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/index.php?q=setup" method="post">
		<table class="table">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checks']->value, 'check');
$_smarty_tpl->tpl_vars['check']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['check']->value) {
$_smarty_tpl->tpl_vars['check']->do_else = false;
?>
			<tr><td<?php if (!$_smarty_tpl->tpl_vars['check']->value['status']) {?> class="text-danger"<?php }?>><?php echo $_smarty_tpl->tpl_vars['check']->value['title'];?>
</td><td><i class="fa <?php if ($_smarty_tpl->tpl_vars['check']->value['status']) {?>fa-check-square-o<?php } else {
if ($_smarty_tpl->tpl_vars['check']->value['required']) {?>fa-square-o<?php } else { ?>fa-exclamation text-danger<?php }
}?>"></i></td><td><?php if ($_smarty_tpl->tpl_vars['check']->value['required']) {?>(required)<?php }?></td></tr>
			<?php if ($_smarty_tpl->tpl_vars['check']->value['help']) {?>
			<tr><td colspan="3" class="border-top-0 pt-0 pb-0"><div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['check']->value['help'];?>
</div></td></tr>
			<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>

		<?php if ($_smarty_tpl->tpl_vars['phpath']->value) {?>
		<input type="hidden" name="phpath" value="<?php echo $_smarty_tpl->tpl_vars['phpath']->value;?>
">
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['passed']->value) {?>
		<input type="hidden" name="pass" value="2">
		<button class="btn btn-success" type="submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['next']->value;?>
</button>
		<?php } else { ?>
		<input type="hidden" name="pass" value="1">
		<button class="btn btn-warning" type="submit"><i class="fa fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['reload']->value;?>
</button>
		<?php }?>
	</form>
</div>
<?php }
}
