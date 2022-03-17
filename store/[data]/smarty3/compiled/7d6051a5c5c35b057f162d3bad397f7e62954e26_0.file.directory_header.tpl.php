<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:35
  from '/sites/git.bronyfurry.com/view/tpl/directory_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b7c42375_51605628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d6051a5c5c35b057f162d3bad397f7e62954e26' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/directory_header.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:direntry.tpl' => 1,
  ),
),false)) {
function content_6231b9b7c42375_51605628 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper clearfix">
		<div class="btn-group float-end">
			<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
				<i class="fa fa-sort"></i>
			</button>
			<div class="dropdown-menu dropdown-menu-end">
				<a class="dropdown-item" href="directory?f=&order=date<?php echo $_smarty_tpl->tpl_vars['suggest']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</a>
				<a class="dropdown-item" href="directory?f=&order=normal<?php echo $_smarty_tpl->tpl_vars['suggest']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['normal']->value;?>
</a>
				<a class="dropdown-item" href="directory?f=&order=reversedate<?php echo $_smarty_tpl->tpl_vars['suggest']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['reversedate']->value;?>
</a>
				<a class="dropdown-item" href="directory?f=&order=reverse<?php echo $_smarty_tpl->tpl_vars['suggest']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['reverse']->value;?>
</a>
			</div>
		</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['dirlbl']->value;
if ($_smarty_tpl->tpl_vars['search']->value) {?>:&nbsp;<?php echo $_smarty_tpl->tpl_vars['safetxt']->value;
}?></h2>
	</div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
		<?php $_smarty_tpl->_subTemplateRender("file:direntry.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div id="page-end" class="float-start w-100"></div>
</div>
<?php echo '<script'; ?>
>$(document).ready(function() { loadingPage = false;});<?php echo '</script'; ?>
>
<div id="page-spinner" class="spinner-wrapper">
	<div class="spinner m"></div>
</div>
<?php }
}
