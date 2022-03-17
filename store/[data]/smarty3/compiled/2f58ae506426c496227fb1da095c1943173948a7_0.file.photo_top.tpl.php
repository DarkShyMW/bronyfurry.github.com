<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:08
  from '/sites/git.bronyfurry.com/view/tpl/photo_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b99caacf82_62859566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f58ae506426c496227fb1da095c1943173948a7' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/photo_top.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b99caacf82_62859566 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['photo']->value['link'];?>
" id="photo-top-photo-link-<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
">
	<img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value['src'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['photo']->value['album']['name']) {
echo $_smarty_tpl->tpl_vars['photo']->value['album']['name'];
} elseif ($_smarty_tpl->tpl_vars['photo']->value['desc']) {
echo $_smarty_tpl->tpl_vars['photo']->value['desc'];
} elseif ($_smarty_tpl->tpl_vars['photo']->value['alt']) {
echo $_smarty_tpl->tpl_vars['photo']->value['alt'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['unknown'];
}?>" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
" id="photo-top-photo-<?php echo $_smarty_tpl->tpl_vars['photo']->value['id'];?>
" loading="lazy" />
</a>

<?php }
}
