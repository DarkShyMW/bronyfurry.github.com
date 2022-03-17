<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:30:24
  from '/sites/git.bronyfurry.com/view/tpl/edpost_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bc4035bc30_81199786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5b42af7d5b3130259b1b10e48cf51cfef35c112' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/edpost_head.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bc4035bc30_81199786 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<div class="float-end">
			<?php if ($_smarty_tpl->tpl_vars['cancel']->value) {?>
			<button id="dbtn-cancel" class="btn btn-warning btn-sm" onclick="itemCancel(); return false;"><?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['delete']->value) {?>
			<a  href="item/drop/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="delete-btn" class="btn btn-sm btn-danger" onclick="return confirmDelete();"><i class="fa fa-trash-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</a>
			<?php }?>
		</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<div id="webpage-editor" class="section-content-tools-wrapper">
		<?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

	</div>
</div>
<?php }
}
