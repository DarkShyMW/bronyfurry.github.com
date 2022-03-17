<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:37:42
  from '/sites/git.bronyfurry.com/view/tpl/settings_nick_set.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bdf6952122_62723109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981defe34638450ef730b72c212f67aad78b9330' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/settings_nick_set.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bdf6952122_62723109 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="settings-nick-wrapper" class="section-content-info-wrapper">
<div id="settings-nickname-desc"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
 <strong><?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
</strong></div>
<?php if ($_smarty_tpl->tpl_vars['davpath']->value) {?>
<br>
<div id="settings-dav-desc"><?php echo $_smarty_tpl->tpl_vars['davdesc']->value;?>
 <strong>'<?php echo $_smarty_tpl->tpl_vars['davpath']->value;?>
'</strong></div>
<?php }?>
</div>
<div id="settings-nick-end" ></div>
<?php }
}
