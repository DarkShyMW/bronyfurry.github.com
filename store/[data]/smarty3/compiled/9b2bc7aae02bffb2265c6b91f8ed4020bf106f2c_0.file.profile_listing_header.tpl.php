<?php
/* Smarty version 3.1.39, created on 2022-03-16 19:18:44
  from '/sites/git.bronyfurry.com/view/tpl/profile_listing_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ffd4d56d44_81665718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b2bc7aae02bffb2265c6b91f8ed4020bf106f2c' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_listing_header.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ffd4d56d44_81665718 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<a class="btn btn-success btn-sm float-end" href="<?php echo $_smarty_tpl->tpl_vars['cr_new_link']->value;?>
" id="profile-listing-new-link" title="<?php echo $_smarty_tpl->tpl_vars['cr_new']->value;?>
" ><i class="fa fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['cr_new']->value;?>
</a>
		<h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper">
		<div class="profile-listing-table">
			<?php echo $_smarty_tpl->tpl_vars['profiles']->value;?>

		</div>
	</div>

</div>
<?php }
}
