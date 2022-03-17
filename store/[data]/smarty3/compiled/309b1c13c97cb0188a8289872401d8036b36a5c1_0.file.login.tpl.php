<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:09:31
  from '/sites/git.bronyfurry.com/view/tpl/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b75b3971a4_25796397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '309b1c13c97cb0188a8289872401d8036b36a5c1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/login.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 1,
    'file:field_password.tpl' => 1,
    'file:field_checkbox.tpl' => 1,
  ),
),false)) {
function content_6231b75b3971a4_25796397 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['dest_url']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" method="post" >
	<input type="hidden" name="auth-params" value="login" />
	<div id="login-main" class="d-grid gap-2">
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['lname']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['lpassword']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['remember_me']->value), 0, false);
?>
		<button type="submit" name="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</button>
		<?php if ($_smarty_tpl->tpl_vars['register']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['register']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['register']->value['title'];?>
" id="register-link" class="float-end"><?php echo $_smarty_tpl->tpl_vars['register']->value['desc'];?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['lostlink']->value) {?><a href="lostpass" title="<?php echo $_smarty_tpl->tpl_vars['lostpass']->value;?>
" id="lost-password-link" ><?php echo $_smarty_tpl->tpl_vars['lostlink']->value;?>
</a><?php }?>
<hr>
		<a href="rmagic" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['remote_login']->value;?>
</a>
	</div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hiddens']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" />
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</form>
<?php if ($_smarty_tpl->tpl_vars['login_page']->value) {
echo '<script'; ?>
 type="text/javascript"> $(document).ready(function() { $("#id_<?php echo $_smarty_tpl->tpl_vars['lname']->value[0];?>
").focus();} );<?php echo '</script'; ?>
>
<?php }
}
}
