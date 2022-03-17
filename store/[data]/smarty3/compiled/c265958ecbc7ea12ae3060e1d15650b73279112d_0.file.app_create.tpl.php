<?php
/* Smarty version 3.1.39, created on 2022-03-16 15:56:17
  from '/sites/git.bronyfurry.com/view/tpl/app_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231d061d952f1_65854546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c265958ecbc7ea12ae3060e1d15650b73279112d' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/app_create.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 7,
    'file:field_textarea.tpl' => 2,
  ),
),false)) {
function content_6231d061d952f1_65854546 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
</h2>
	</div>

	<div class="clearfix section-content-wrapper">
		<form action="appman" method="post">
		<?php if ($_smarty_tpl->tpl_vars['guid']->value) {?>
		<input type="hidden" name="guid" value="<?php echo $_smarty_tpl->tpl_vars['guid']->value;?>
" />
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['author']->value) {?>
		<input type="hidden" name="author" value="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" />
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['addr']->value) {?>
		<input type="hidden" name="addr" value="<?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
" />
		<?php }?>

		<input type="hidden" name="requires" value="<?php echo $_smarty_tpl->tpl_vars['requires']->value;?>
" />
		<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
" />
		<input type="hidden" name="plugin" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
" />


		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['name']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['categories']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['url']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['desc']->value), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['photo']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['version']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['price']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['page']->value), 0, true);
?>

		<?php if ($_smarty_tpl->tpl_vars['embed']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['embed']->value), 0, true);
?>
		<?php }?>

		<button class="btn btn-primary float-end" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>

		</form>
	</div>
</div>
<?php }
}
