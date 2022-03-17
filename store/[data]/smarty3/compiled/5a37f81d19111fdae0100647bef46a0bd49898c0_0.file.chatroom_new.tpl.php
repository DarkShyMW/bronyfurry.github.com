<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:53:16
  from '/sites/git.bronyfurry.com/view/tpl/chatroom_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231cfacf18856_28467540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a37f81d19111fdae0100647bef46a0bd49898c0' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/chatroom_new.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 2,
  ),
),false)) {
function content_6231cfacf18856_28467540 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="chatroom-new" class="section-content-tools-wrapper">
	<form id="chatroom-new-form" action="chat" method="post" class="acl-form" data-form_id="chatroom-new-form" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['allow_cid']->value;?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['allow_gid']->value;?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['deny_cid']->value;?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['deny_gid']->value;?>
'>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['name']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['chat_expire']->value), 0, true);
?>
		<div class="btn-group float-end">
			<button id="dbtn-acl" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#aclModal" title="<?php echo $_smarty_tpl->tpl_vars['permissions']->value;?>
" onclick="return false;" ><i id="jot-perms-icon" class="fa fa-<?php echo $_smarty_tpl->tpl_vars['lockstate']->value;?>
"></i></button>
			<button id="dbtn-submit" class="acl-submit btn btn-primary" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" data-formid="chatroom-new-form"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
		</div>
		<div class="clear"></div>
	</form>
</div>
<?php echo $_smarty_tpl->tpl_vars['acl']->value;?>

<?php }
}
