<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:40
  from '/sites/git.bronyfurry.com/view/tpl/app_install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9bc3590f4_77127122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab58d4b2a8c99ed794851e29676a1e59e4fd1a8b' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/app_install.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9bc3590f4_77127122 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
	<h2><?php echo $_smarty_tpl->tpl_vars['papp']->value['name'];?>
</h2>
</div>
<div class="mb-3">
	<?php echo $_smarty_tpl->tpl_vars['papp']->value['desc'];?>

</div>
<form action="appman" method="post">
	<input type="hidden" name="papp" value="<?php echo $_smarty_tpl->tpl_vars['papp']->value['papp'];?>
" />
	<input type="hidden" name="return_path" value="<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
" />
	<button type="submit" name="install" value="install" class="btn btn-success">
		<i class="fa fa-fw fa-arrow-circle-o-down"></i> <?php echo $_smarty_tpl->tpl_vars['install']->value;?>

	</button>
</form>
<?php }
}
