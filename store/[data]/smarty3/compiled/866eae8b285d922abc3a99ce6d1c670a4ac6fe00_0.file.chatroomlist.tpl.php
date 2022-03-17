<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:53:53
  from '/sites/git.bronyfurry.com/view/tpl/chatroomlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231cfd19e20c8_18297925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866eae8b285d922abc3a99ce6d1c670a4ac6fe00' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/chatroomlist.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231cfd19e20c8_18297925 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="chatroom_list" class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>
	<ul class="nav nav-pills flex-column">
		<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/chat/<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['overview']->value;?>
</a></li>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/chat/<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['cr_id'];?>
"><span class="badge bg-secondary float-end"><?php echo $_smarty_tpl->tpl_vars['item']->value['cr_inroom'];?>
</span><?php echo $_smarty_tpl->tpl_vars['item']->value['cr_name'];?>
</a></li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<?php }
}
