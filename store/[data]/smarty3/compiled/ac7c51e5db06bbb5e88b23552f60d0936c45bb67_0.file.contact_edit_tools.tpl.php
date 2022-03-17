<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:42
  from '/sites/git.bronyfurry.com/view/tpl/contact_edit_tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c04e62fb36_21285052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac7c51e5db06bbb5e88b23552f60d0936c45bb67' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/contact_edit_tools.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c04e62fb36_21285052 (Smarty_Internal_Template $_smarty_tpl) {
?><button id="contact-tools" class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<i class="fa fa-cog"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tools_label']->value;?>

</button>
<div class="dropdown-menu">
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['refresh']['title'];?>
" data-cmd="refresh"><?php echo $_smarty_tpl->tpl_vars['tools']->value['refresh']['label'];?>
</a>
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['rephoto']['title'];?>
" data-cmd="resetphoto"><?php echo $_smarty_tpl->tpl_vars['tools']->value['rephoto']['label'];?>
</a>
	<div class="dropdown-divider"></div>
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['block']['title'];?>
"  data-cmd="block"><?php echo $_smarty_tpl->tpl_vars['tools']->value['block']['label'];?>
</a>
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['ignore']['title'];?>
" data-cmd="ignore"><?php echo $_smarty_tpl->tpl_vars['tools']->value['ignore']['label'];?>
</a>
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['archive']['title'];?>
" data-cmd="archive"><?php echo $_smarty_tpl->tpl_vars['tools']->value['archive']['label'];?>
</a>
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['hide']['title'];?>
" data-cmd="hide"><?php echo $_smarty_tpl->tpl_vars['tools']->value['hide']['label'];?>
</a>
	<div class="dropdown-divider"></div>
	<a class="dropdown-item contact-tool" href="#" title="<?php echo $_smarty_tpl->tpl_vars['tools']->value['delete']['title'];?>
" data-cmd="drop"><?php echo $_smarty_tpl->tpl_vars['tools']->value['delete']['label'];?>
</a>
</div>
<?php }
}
