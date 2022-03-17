<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/alt_pager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b2697829_82684416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6932096d1751027219e8a511766fff1ec61f09a8' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/alt_pager.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9b2697829_82684416 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pager">
<?php if ($_smarty_tpl->tpl_vars['has_less']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['url_appendix']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
" class="pager-prev"><?php echo $_smarty_tpl->tpl_vars['less']->value;?>
</a><?php }
if ($_smarty_tpl->tpl_vars['has_more']->value) {
if ($_smarty_tpl->tpl_vars['has_less']->value) {?>&nbsp;|&nbsp;<?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['url_appendix']->value;?>
page=<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
" class="pager-next"><?php echo $_smarty_tpl->tpl_vars['more']->value;?>
</a><?php }?>
</div>
<?php }
}
