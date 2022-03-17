<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:18
  from '/sites/git.bronyfurry.com/view/tpl/rmagic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b83edc2e33_03805595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd291aaa6bcd44db66eee4bc2ef65e1a4a3ae95eb' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/rmagic.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 1,
  ),
),false)) {
function content_6231b83edc2e33_03805595 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled">
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<form action="rmagic" method="post" >
		<div class="mb-3">
			<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['address']->value), 0, false);
?>
			<input class="btn btn-primary" type="submit" name="submit" id="rmagic-submit-button" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
		</div>
	</form>
</div>
<?php }
}
