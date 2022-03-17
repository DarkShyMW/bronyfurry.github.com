<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:32:24
  from '/sites/git.bronyfurry.com/view/tpl/jot_geotag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231cac88225c9_62180027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b181cf04a9697ea615ddb4cb9561b2fede2840b' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/jot_geotag.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231cac88225c9_62180027 (Smarty_Internal_Template $_smarty_tpl) {
?>	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			$('#jot-coord').val(position.coords.latitude + ' ' + position.coords.longitude);
			$('#profile-nolocation-wrapper').attr('disabled', false);
		});
	}

<?php }
}
