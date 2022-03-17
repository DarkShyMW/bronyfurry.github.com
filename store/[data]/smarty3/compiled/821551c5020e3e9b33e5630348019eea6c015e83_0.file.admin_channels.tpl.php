<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:22:05
  from '/sites/git.bronyfurry.com/view/tpl/admin_channels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba4d17ac74_49407663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '821551c5020e3e9b33e5630348019eea6c015e83' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_channels.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba4d17ac74_49407663 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	function confirm_delete(uname){
		return confirm( "<?php echo $_smarty_tpl->tpl_vars['confirm_delete']->value;?>
".format(uname));
	}
	function confirm_delete_multi(){
		return confirm("<?php echo $_smarty_tpl->tpl_vars['confirm_delete_multi']->value;?>
");
	}
	function selectall(cls){
		$("."+cls).attr('checked','checked');
		return false;
	}
<?php echo '</script'; ?>
>
<div class = "generic-content-wrapper-styled" id='adminpage'>
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
	
	<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/channels" method="post">
        <input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
		
		<h3><?php echo $_smarty_tpl->tpl_vars['h_channels']->value;?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
			<table id='channels'>
				<thead>
				<tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['th_channels']->value, 'th');
$_smarty_tpl->tpl_vars['th']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['th']->value) {
$_smarty_tpl->tpl_vars['th']->do_else = false;
?><th><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
&key=<?php echo $_smarty_tpl->tpl_vars['th']->value[1];?>
&dir=<?php echo $_smarty_tpl->tpl_vars['odir']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['th']->value[0];?>
</a></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['channels']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
					<tr>
						<td class='channel_id'><?php echo $_smarty_tpl->tpl_vars['c']->value['channel_id'];?>
</td>
						<td class='channel_name'><a href="channel/<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['channel_name'];?>
</a></td>
						<td class='channel_address'><?php echo $_smarty_tpl->tpl_vars['c']->value['channel_address'];?>
</td>
						<td class="checkbox_bulkedit"><input type="checkbox" class="channels_ckbx" id="id_channel_<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_id'];?>
" name="channel[]" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_id'];?>
"/></td>
						<td class="tools">
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/channels/block/<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_id'];?>
?t=<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
" class="btn btn-default btn-xs" title='<?php if (($_smarty_tpl->tpl_vars['c']->value['blocked'])) {
echo $_smarty_tpl->tpl_vars['unblock']->value;
} else {
echo $_smarty_tpl->tpl_vars['block']->value;
}?>'><i class='fa fa-ban admin-icons <?php if (($_smarty_tpl->tpl_vars['c']->value['blocked'])) {?>dim<?php }?>'></i></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/channels/code/<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_id'];?>
?t=<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
" class="btn btn-default btn-xs<?php if (($_smarty_tpl->tpl_vars['c']->value['allowcode'])) {?> btn-danger<?php }?>" title='<?php if (($_smarty_tpl->tpl_vars['c']->value['allowcode'])) {
echo $_smarty_tpl->tpl_vars['uncode']->value;
} else {
echo $_smarty_tpl->tpl_vars['code']->value;
}?>'><i class='fa fa-terminal admin-icons <?php if (($_smarty_tpl->tpl_vars['c']->value['allowcode'])) {?>dim<?php }?>'></i></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/channels/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_id'];?>
?t=<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
" class="btn btn-default btn-xs" title='<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
' onclick="return confirm_delete('<?php echo $_smarty_tpl->tpl_vars['c']->value['channel_name'];?>
')"><i class='fa fa-trash-o admin-icons'></i></a>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
			<div class='selectall'><a href='#' onclick="return selectall('channels_ckbx');"><?php echo $_smarty_tpl->tpl_vars['select_all']->value;?>
</a></div>
			<div class="submit">
                <input type="submit" name="page_channels_block" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['block']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['unblock']->value;?>
" /> 
                <input type="submit" name="page_channels_code" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['uncode']->value;?>
" /> 
                <input type="submit" name="page_channels_delete" class="btn btn-primary" onclick="return confirm_delete_multi()" value="<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
" />
            </div>						
		<?php } else { ?>
			NO CHANNELS?!?
		<?php }?>
	</form>
</div>
<?php }
}
