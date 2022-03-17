<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:26
  from '/sites/git.bronyfurry.com/view/tpl/connstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c03edd4055_19824804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe4c2fed15514d3241abb1252c24561095cf8519' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/connstatus.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c03edd4055_19824804 (Smarty_Internal_Template $_smarty_tpl) {
?><i class="fa fa-circle oneway-overlay text-<?php if ($_smarty_tpl->tpl_vars['perminfo']->value['connpermcount'] == 3) {?>success<?php } elseif ($_smarty_tpl->tpl_vars['perminfo']->value['connpermcount'] > 0) {?>warning<?php } else { ?>danger<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['perminfo']->value['connperms'];?>
"></i>
<?php }
}
