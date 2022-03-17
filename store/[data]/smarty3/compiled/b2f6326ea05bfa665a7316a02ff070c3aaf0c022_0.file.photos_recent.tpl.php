<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:30
  from '/sites/git.bronyfurry.com/view/tpl/photos_recent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba2ab09564_86914513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f6326ea05bfa665a7316a02ff070c3aaf0c022' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/photos_recent.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:photo_top.tpl' => 1,
  ),
),false)) {
function content_6231ba2ab09564_86914513 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<div class="float-end">
			<?php if ($_smarty_tpl->tpl_vars['can_post']->value) {?>
			<button class="btn btn-sm btn-success acl-form-trigger" title="<?php echo $_smarty_tpl->tpl_vars['usage']->value;?>
" onclick="openClose('photo-upload-form');" data-form_id="photos-upload-form"><i class="fa fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['upload']->value[0];?>
</button>
			<?php }?>
		</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['upload_form']->value;?>

	<div class="section-content-wrapper-np clearfix">
		<div id="photo-album-contents-<?php echo $_smarty_tpl->tpl_vars['album_id']->value;?>
" style="display: none">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
$_smarty_tpl->tpl_vars['photo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->do_else = false;
?>
				<?php $_smarty_tpl->_subTemplateRender("file:photo_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<span id="page-end" class="d-block float-start w-100" style="position: absolute; bottom: 0px"></span>
		</div>
	</div>
</div>
<div class="photos-end"></div>
<div id="page-spinner" class="spinner-wrapper">
	<div class="spinner m"></div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
	loadingPage = false;
	justifyPhotos('photo-album-contents-<?php echo $_smarty_tpl->tpl_vars['album_id']->value;?>
');
});
<?php echo '</script'; ?>
>
<?php }
}
