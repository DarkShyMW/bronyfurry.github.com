<?php
/* Smarty version 3.1.39, created on 2022-03-16 19:18:44
  from '/sites/git.bronyfurry.com/view/tpl/profile_entry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ffd4d504f3_91732798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae7b87d2b92e18ef5be9f317e2140b6bb681502' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_entry.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ffd4d504f3_91732798 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="profile-listing-row">
	<div class="profile-listing-cell" >
		<a href="profiles/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><img class="profile-listing-photo" id="profile-listing-photo-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
" /></a>
	</div>
	<div class="profile-listing-cell" id="profile-listing-name-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		<a href="profiles/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="profile-listing-edit-link" ><?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
</a>
	</div>
	<div class="profile-listing-cell">
		<?php echo $_smarty_tpl->tpl_vars['visible']->value;?>

	</div>
</div>
<?php }
}
