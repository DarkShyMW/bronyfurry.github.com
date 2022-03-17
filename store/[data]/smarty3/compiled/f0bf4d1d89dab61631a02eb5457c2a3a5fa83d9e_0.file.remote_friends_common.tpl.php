<?php
/* Smarty version 3.1.39, created on 2022-03-16 19:45:03
  from '/sites/git.bronyfurry.com/view/tpl/remote_friends_common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_623205ffa8af93_99875695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0bf4d1d89dab61631a02eb5457c2a3a5fa83d9e' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/remote_friends_common.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623205ffa8af93_99875695 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['linkmore']->value) {?>
	<a class="allcontact-link" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/common/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['more']->value;?>
</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
	<div class="contact-block-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<div class="contact-block-div">
			<a class="contact-block-link mpfriend" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/chanview?f=&url=<?php echo $_smarty_tpl->tpl_vars['item']->value['xchan_url'];?>
"><img class="contact-block-img mpfriend" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['xchan_photo_s'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['xchan_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['xchan_name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['item']->value['xchan_addr'];?>
]" /></a>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php }?>
</div>
<?php }
}
