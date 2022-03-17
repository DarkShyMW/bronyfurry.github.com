<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:42
  from '/sites/git.bronyfurry.com/view/tpl/contact_edit_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c04e622767_51290077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e610f7b684a948382c846c3278b96d14960ebbe0' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/contact_edit_header.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c04e622767_51290077 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="float-start me-2">
	<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['link_label']->value;?>
" target="_blank">
		<img src="<?php echo $_smarty_tpl->tpl_vars['img_src']->value;?>
" class="rounded" style="width: 3rem; height: 3rem;" />
	</a>
</div>
<div class="m-1">
	<div class="text-truncate h3 m-0"><strong><?php if ($_smarty_tpl->tpl_vars['is_group']->value) {?><i class="fa fa-comments-o" title="<?php echo $_smarty_tpl->tpl_vars['group_label']->value;?>
"></i> <?php }
echo $_smarty_tpl->tpl_vars['name']->value;?>
</strong></div>
	<div class="text-truncate text-muted"><?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
</div>
</div>
<?php }
}
