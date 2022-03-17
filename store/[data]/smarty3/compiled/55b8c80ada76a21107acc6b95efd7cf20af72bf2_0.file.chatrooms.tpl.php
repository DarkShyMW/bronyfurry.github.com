<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:53:17
  from '/sites/git.bronyfurry.com/view/tpl/chatrooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231cfad018e44_19369984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55b8c80ada76a21107acc6b95efd7cf20af72bf2' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/chatrooms.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231cfad018e44_19369984 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper clearfix">
		<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
		<button type="button" class="btn btn-success btn-sm float-end acl-form-trigger" onclick="openClose('chatroom-new');" data-form_id="chatroom-new-form"><i class="fa fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['newroom']->value;?>
</button>
		<?php }?>
		<h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['chatroom_new']->value;?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['rooms']->value) {?>
	<div class="section-content-wrapper-np">
		<table id="chatrooms-index">
			<tr>
				<th width="97%"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</th>
				<th width="1%"><?php echo $_smarty_tpl->tpl_vars['expire']->value;?>
</th>
				<th width="1%" class="chatrooms-index-tool"></th>
				<th width="1%"></th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
			<tr class="chatroom-index-row">
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/chat/<?php echo $_smarty_tpl->tpl_vars['nickname']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['room']->value['cr_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['room']->value['cr_name'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['room']->value['cr_expire'];?>
&nbsp;min</td>
				<td class="chatrooms-index-tool<?php if ($_smarty_tpl->tpl_vars['room']->value['allow_cid'] || $_smarty_tpl->tpl_vars['room']->value['allow_gid'] || $_smarty_tpl->tpl_vars['room']->value['deny_cid'] || $_smarty_tpl->tpl_vars['room']->value['deny_gid']) {?> dropdown float-end<?php }?>">
					<?php if ($_smarty_tpl->tpl_vars['room']->value['allow_cid'] || $_smarty_tpl->tpl_vars['room']->value['allow_gid'] || $_smarty_tpl->tpl_vars['room']->value['deny_cid'] || $_smarty_tpl->tpl_vars['room']->value['deny_gid']) {?>
					<i class="fa fa-lock lockview" data-bs-toggle="dropdown" onclick="lockview('chatroom',<?php echo $_smarty_tpl->tpl_vars['room']->value['cr_id'];?>
);"></i>
					<ul id="panel-<?php echo $_smarty_tpl->tpl_vars['room']->value['cr_id'];?>
" class="lockview-panel dropdown-menu"></ul>
					<?php }?>
				</td>
				<td><span class="badge bg-secondary"><?php echo $_smarty_tpl->tpl_vars['room']->value['cr_inroom'];?>
</span></td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>

	</div>
	<?php } else { ?>
	<div class="section-content-wrapper">
		<?php echo $_smarty_tpl->tpl_vars['norooms']->value;?>

	</div>
	<?php }?>
</div>
<?php }
}
