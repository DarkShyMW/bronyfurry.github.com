<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:09:31
  from '/sites/git.bronyfurry.com/view/tpl/nav_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b75b3b7b57_80327132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7394b3638ca85b183b78099f5e053dd98cf4a223' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/nav_login.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b75b3b7b57_80327132 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['nav']->value['login'] && !$_smarty_tpl->tpl_vars['userinfo']->value) {?>
<div id="nav-login" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][1];?>
</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-3">
					<?php echo $_smarty_tpl->tpl_vars['nav']->value['login'];?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
}
