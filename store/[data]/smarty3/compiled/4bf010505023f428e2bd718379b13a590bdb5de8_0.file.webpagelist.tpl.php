<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:48:38
  from '/sites/git.bronyfurry.com/view/tpl/webpagelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c086d6f532_64269143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf010505023f428e2bd718379b13a590bdb5de8' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/webpagelist.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c086d6f532_64269143 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['editor']->value) {?>
		<div class="float-end">
			<button id="webpage-create-btn" class="btn btn-sm btn-success acl-form-trigger" onclick="openClose('webpage-editor');" data-form_id="profile-jot-form"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['create']->value;?>
</button>
		</div>
		<?php }?>
		<h2><?php echo $_smarty_tpl->tpl_vars['listtitle']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['editor']->value) {?>
	<div id="webpage-editor" class="section-content-tools-wrapper">
		<?php echo $_smarty_tpl->tpl_vars['editor']->value;?>

	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
	<div id="pagelist-content-wrapper" class="section-content-wrapper-np">
		<table id="webpage-list-table">
			<tr>
				<th width="1%"><?php echo $_smarty_tpl->tpl_vars['pagelink_txt']->value;?>
</th>
				<th width="95%"><?php echo $_smarty_tpl->tpl_vars['title_txt']->value;?>
</th>
				<th width="1%"></th>
				<th width="1%"></th>
				<th width="1%"></th>
				<th width="1%"></th>
				<th width="1%" class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['created_txt']->value;?>
</th>
				<th width="1%" class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['edited_txt']->value;?>
</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'items', false, 'key');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr id="webpage-list-item-<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
				<td>
					<?php if ($_smarty_tpl->tpl_vars['view']->value) {?>
					<a href="page/<?php echo $_smarty_tpl->tpl_vars['channel']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['pageurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['pagetitle'];?>
</a>
					<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['pagetitle'];?>

					<?php }?>
				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

				</td>
				<td class="webpage-list-tool dropdown">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['lockstate'] == 'lock') {?>
					<i class="fa fa-lock lockview" data-bs-toggle="dropdown" onclick="lockview('item',<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
);" ></i>
					<ul id="panel-<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="lockview-panel dropdown-menu"></ul>
					<?php }?>
				</td>
				<td class="webpage-list-tool">
					<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
"><i class="fa fa-pencil"></i></a>
					<?php }?>
				</td>
				<td class="webpage-list-tool">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['bb_element']) {?>
					<a href="rpost?attachment=<?php echo $_smarty_tpl->tpl_vars['item']->value['bb_element'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['share']->value;?>
"><i class="fa fa-share-square-o"></i></a>
					<?php }?>
				</td>
				<td class="webpage-list-tool">
					<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
					<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
" onclick="dropItem('item/drop/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
', '#webpage-list-item-<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
'); return false;"><i class="fa fa-trash-o drop-icons"></i></a>
					<?php }?>
				</td>
				<td class="d-none d-md-table-cell">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['created'];?>

				</td>
				<td class="d-none d-md-table-cell">
					<?php echo $_smarty_tpl->tpl_vars['item']->value['edited'];?>

				</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
	<?php }?>
	<div class="clear"></div>
</div>
<?php }
}
