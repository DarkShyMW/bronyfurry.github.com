<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:34
  from '/sites/git.bronyfurry.com/view/tpl/cloud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba2e3d9807_59876168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d54cb38f4bf7c8e8beebee18d8e9a6141a7072' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cloud.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cloud_header.tpl' => 1,
    'file:cloud_directory.tpl' => 1,
  ),
),false)) {
function content_6231ba2e3d9807_59876168 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="vendor/blueimp/jquery-file-upload/js/vendor/jquery.ui.widget.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/blueimp/jquery-file-upload/js/jquery.iframe-transport.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/blueimp/jquery-file-upload/js/jquery.fileupload.js"><?php echo '</script'; ?>
>

<div class="generic-content-wrapper">
<?php $_smarty_tpl->_subTemplateRender("file:cloud_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:cloud_directory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
