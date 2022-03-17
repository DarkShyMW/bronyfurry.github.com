<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:34
  from '/sites/git.bronyfurry.com/view/tpl/cloud_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba2e3de443_09991663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf4501592fdb9afb554c49296a8492177a6f673' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cloud_header.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba2e3de443_09991663 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section-title-wrapper">
	<div class="float-end">
		<a href="cloud_tiles/<?php echo $_smarty_tpl->tpl_vars['cpath']->value;?>
" class="btn btn-sm btn-outline-secondary"><i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['tiles']->value) {?>fa-th-list<?php } else { ?>fa-th-large<?php }?>"></i></a>
		<?php if ($_smarty_tpl->tpl_vars['actionspanel']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
		<a href="/sharedwithme" class="btn btn-sm btn-outline-secondary"><i class="fa fa-cloud-download"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['shared']->value;?>
</a>
		<?php }?>
		<button id="files-create-btn" class="btn btn-sm btn-primary" onclick="openClose('files-mkdir-tools'); closeMenu('files-upload-tools');"><i class="fa fa-folder-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['create']->value;?>
</button>
		<button id="files-upload-btn" class="btn btn-sm btn-success" onclick="openClose('files-upload-tools'); closeMenu('files-mkdir-tools');"><i class="fa fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['upload']->value;?>
</button>
		<?php }?>
	</div>

	<h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
	<div class="clear"></div>
</div>
<?php if ($_smarty_tpl->tpl_vars['actionspanel']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['actionspanel']->value;?>

<?php }
}
}
