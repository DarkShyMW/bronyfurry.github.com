<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:45:59
  from '/sites/git.bronyfurry.com/view/tpl/activity_filter_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bfe777a528_29240515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6e7284434d8b7a1a65e7cb4e4a9848e90df658b' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/activity_filter_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bfe777a528_29240515 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget">
	<h3 class="d-flex justify-content-between align-items-center">
		<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['reset']->value) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['reset']->value['url'];?>
" class="text-muted" title="<?php echo $_smarty_tpl->tpl_vars['reset']->value['title'];?>
">
			<i class="fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['reset']->value['icon'];?>
"></i>
		</a>
		<?php }?>
	</h3>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['name']->value) {?>
	<div id="cid-filter-wrapper" class="notifications-textinput">
		<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['name']->value['url'];?>
" role="search">
			<div class="text-muted notifications-textinput-filter"><i class="fa fa-fw fa-filter"></i></div>
			<input id="cid" type="hidden" value="" name="cid" />
			<input id="cid-filter" class="form-control form-control-sm<?php if ($_smarty_tpl->tpl_vars['name']->value['sel']) {?> <?php echo $_smarty_tpl->tpl_vars['name']->value['sel'];
}?>" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['name']->value['label'];?>
" name="name" title="" />
		</form>
	</div>
	<?php echo '<script'; ?>
>
		$("#cid-filter").contact_autocomplete(baseurl + '/acl', 'a', true, function(data) {
			$("#cid").val(data.id);
		});
	<?php echo '</script'; ?>
>
	<?php }?>
</div>
<?php }
}
