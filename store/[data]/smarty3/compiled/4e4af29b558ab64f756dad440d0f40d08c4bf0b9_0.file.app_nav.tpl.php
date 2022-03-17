<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:09:31
  from '/sites/git.bronyfurry.com/view/tpl/app_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b75b3dff14_51339067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4af29b558ab64f756dad440d0f40d08c4bf0b9' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/app_nav.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b75b3dff14_51339067 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['app']->value['active']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
" data-papp="<?php echo $_smarty_tpl->tpl_vars['app']->value['papp'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
"><?php if ($_smarty_tpl->tpl_vars['icon']->value) {?><i class="generic-icons-nav fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['photo'];?>
" width="16" height="16" style="margin-right:9px;"/><?php }
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</a>
<?php }
}
