<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:02:58
  from '/sites/git.bronyfurry.com/view/tpl/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b5d26da3d0_73509559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5223acd4db22fc52d879996c7e69b41743e7c3cd' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/head.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b5d26da3d0_73509559 (Smarty_Internal_Template $_smarty_tpl) {
?><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=<?php echo $_smarty_tpl->tpl_vars['user_scalable']->value;?>
" />
<?php echo $_smarty_tpl->tpl_vars['metas']->value;?>

<?php echo $_smarty_tpl->tpl_vars['head_css']->value;?>

<?php echo $_smarty_tpl->tpl_vars['js_strings']->value;?>

<?php echo $_smarty_tpl->tpl_vars['head_js']->value;?>

<?php echo $_smarty_tpl->tpl_vars['linkrel']->value;?>

<?php echo $_smarty_tpl->tpl_vars['plugins']->value;?>

<?php echo '<script'; ?>
>
	var updateInterval = <?php echo $_smarty_tpl->tpl_vars['update_interval']->value;?>
;
	var sse_enabled = <?php echo $_smarty_tpl->tpl_vars['sse_enabled']->value;?>
;
	var localUser = <?php if ($_smarty_tpl->tpl_vars['local_channel']->value) {
echo $_smarty_tpl->tpl_vars['local_channel']->value;
} else { ?>false<?php }?>;
	var zid = <?php if ($_smarty_tpl->tpl_vars['zid']->value) {?>'<?php echo $_smarty_tpl->tpl_vars['zid']->value;?>
'<?php } else { ?>null<?php }?>;
	var justifiedGalleryActive = false;
	<?php if ($_smarty_tpl->tpl_vars['channel_hash']->value) {?>var channelHash = '<?php echo $_smarty_tpl->tpl_vars['channel_hash']->value;?>
';<?php }?>
	var channelId = <?php if ($_smarty_tpl->tpl_vars['channel_id']->value) {
echo $_smarty_tpl->tpl_vars['channel_id']->value;
} else { ?>false<?php }?>;	var preloadImages = <?php echo $_smarty_tpl->tpl_vars['preload_images']->value;?>
;
	var auto_save_draft = <?php echo $_smarty_tpl->tpl_vars['auto_save_draft']->value;?>
;
	<?php if ($_smarty_tpl->tpl_vars['module']->value) {?>var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
';<?php }
echo '</script'; ?>
>



<?php }
}
