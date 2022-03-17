<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:48:05
  from '/sites/git.bronyfurry.com/view/tpl/micropro_img.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c065296374_57718691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c08524bba69e0d87b26c9835fd0f6997a8abdd8' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/micropro_img.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:connstatus.tpl' => 1,
  ),
),false)) {
function content_6231c065296374_57718691 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contact-block-div<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>"><a class="contact-block-link<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}
if ($_smarty_tpl->tpl_vars['click']->value) {?> fakelink<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['click']->value) {?>#<?php } else {
echo $_smarty_tpl->tpl_vars['url']->value;
}?>" <?php if ($_smarty_tpl->tpl_vars['click']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['click']->value;?>
"<?php }?>><img class="contact-block-img<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" alt="" loading="lazy" /><?php if ($_smarty_tpl->tpl_vars['perminfo']->value) {
$_smarty_tpl->_subTemplateRender("file:connstatus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?></a></div>
<?php }
}
