<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:50
  from '/sites/git.bronyfurry.com/view/tpl/admin_accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba3eb1a865_89468353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '667680ea0f4e06d07432195ef75aab45445eb90a' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_accounts.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba3eb1a865_89468353 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled" id="adminpage">
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>

	<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/accounts" method="post">
		<input type="hidden" name="form_security_token" value="<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
">

		<h3><?php echo $_smarty_tpl->tpl_vars['h_pending']->value;?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['debug']->value) {?><div><?php echo $_smarty_tpl->tpl_vars['debug']->value;?>
</div><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pending']->value) {?>
		<table id="pending">
			<thead>
			<tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['th_pending']->value, 'th');
$_smarty_tpl->tpl_vars['th']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['th']->value) {
$_smarty_tpl->tpl_vars['th']->do_else = false;
?><th><?php echo $_smarty_tpl->tpl_vars['th']->value;?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<th></th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pending']->value, 'u', false, 'n');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['u']->value['status'][0];?>
" class="<?php echo $_smarty_tpl->tpl_vars['u']->value['status'][1];?>
">
				<td class="text-nowrap"><?php echo $_smarty_tpl->tpl_vars['u']->value['reg_created'];?>
</td>
				<td class="text-nowrap"><?php echo $_smarty_tpl->tpl_vars['u']->value['reg_did2'];?>
</td>
				<td class="text-break"><?php echo $_smarty_tpl->tpl_vars['u']->value['reg_email'];?>
</td>
				<td class=""><?php echo $_smarty_tpl->tpl_vars['u']->value['reg_atip'];?>
</td>
				<td class=""><?php echo $_smarty_tpl->tpl_vars['u']->value['reg_atip_n'];?>
</td>
				<td class="checkbox_bulkedit"><input type="checkbox" class="pending_ckbx" id="id_pending_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" name="pending[]" value="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"></td>
				<td class="tools">
					<a id="zara_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"  class="zar2s zara btn btn-default btn-xs" title="<?php echo $_smarty_tpl->tpl_vars['approve']->value;?>
"><i class="fa fa-thumbs-o-up admin-icons"></i></a>
					<a id="zard_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"  class="zar2s zard btn btn-default btn-xs" title="<?php echo $_smarty_tpl->tpl_vars['deny']->value;?>
"><i class="fa fa-thumbs-o-down admin-icons"></i></a>
					<span id="zarreax_<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="zarreax"></span>
				</td>
			</tr>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['u']->value['status'][0];?>
" class="<?php echo $_smarty_tpl->tpl_vars['u']->value['status'][1];?>
">
				<td colspan="7"><strong><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['u']->value['msg'];?>
</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<div class="float-end">
			<a id="zar2sat" class="btn btn-sm btn-primary" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['sel_tall']->value;?>
</a>
			<a id="zar2aas" class="zar2xas btn btn-sm btn-success" href="javascript:;"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['sel_aprv']->value;?>
</a>
			<a id="zar2das" class="zar2xas btn btn-sm btn-danger" href="javascript:;"><i class="fa fa-close"></i> <?php echo $_smarty_tpl->tpl_vars['sel_deny']->value;?>
</a>
		</div>
		<?php } else { ?>
		<div class="text-muted">
		<?php echo $_smarty_tpl->tpl_vars['no_pending']->value;?>

		</div>
		<?php }?>
		<div class="float-start">
			<a class="btn btn-sm btn-link" href="<?php echo $_smarty_tpl->tpl_vars['get_all_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['get_all']->value;?>
</a>
		</div>
		<div class="clearfix"></div>
		<br><br>
		<h3><?php echo $_smarty_tpl->tpl_vars['h_users']->value;?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
			<table id="users">
				<thead>
				<tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['th_users']->value, 'th');
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
					<tr>
						<td class="account_id"><?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
</td>
						<td class="email"><?php if ($_smarty_tpl->tpl_vars['u']->value['blocked']) {?>
							<a href="admin/account_edit/<?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
"><i><?php echo $_smarty_tpl->tpl_vars['u']->value['account_email'];?>
</i></a>
						<?php } else { ?>
							<a href="admin/account_edit/<?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['u']->value['account_email'];?>
</strong></a>
						<?php }?></td>
						<td class="channels"><?php echo $_smarty_tpl->tpl_vars['u']->value['channels'];?>
</td>
						<td class="register_date"><?php echo $_smarty_tpl->tpl_vars['u']->value['account_created'];?>
</td>
						<td class="login_date"><?php echo $_smarty_tpl->tpl_vars['u']->value['account_lastlog'];?>
</td>
						<td class="account_expires"><?php echo $_smarty_tpl->tpl_vars['u']->value['account_expires'];?>
</td>
						<td class="service_class"><?php echo $_smarty_tpl->tpl_vars['u']->value['account_service_class'];?>
</td>
						<td class="checkbox_bulkedit"><input type="checkbox" class="users_ckbx" id="id_user_<?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
" name="user[]" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
"><input type="hidden" name="blocked[]" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['blocked'];?>
"></td>
						<td class="tools">
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/accounts/<?php if (($_smarty_tpl->tpl_vars['u']->value['blocked'])) {?>un<?php }?>block/<?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
?t=<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
" class="btn btn-default btn-xs" title='<?php if (($_smarty_tpl->tpl_vars['u']->value['blocked'])) {
echo $_smarty_tpl->tpl_vars['unblock']->value;
} else {
echo $_smarty_tpl->tpl_vars['block']->value;
}?>'><i class="fa fa-ban admin-icons<?php if (($_smarty_tpl->tpl_vars['u']->value['blocked'])) {?> dim<?php }?>"></i></a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/accounts/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['account_id'];?>
?t=<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
" class="btn btn-default btn-xs" title='<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
' onclick="return confirm_delete('<?php echo $_smarty_tpl->tpl_vars['u']->value['name'];?>
')"><i class="fa fa-trash-o admin-icons"></i></a>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>

			<div class="selectall"><a id="zarckbxtoggle" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['select_all']->value;?>
</a></div>
					<div class="submit">
                <input type="submit" name="page_accounts_block" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['block']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['unblock']->value;?>
" />
                <input type="submit" name="page_accounts_delete" class="btn btn-primary" onclick="return confirm_delete_multi()" value="<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
" />
            </div>
		<?php } else { ?>
			NO USERS?!?
		<?php }?>
	</form>
</div>
<?php echo '<script'; ?>
>
  	function confirm_delete(uname){
		return confirm( "<?php echo $_smarty_tpl->tpl_vars['confirm_delete']->value;?>
".format(uname));
	}
	function confirm_delete_multi(){
		return confirm("<?php echo $_smarty_tpl->tpl_vars['confirm_delete_multi']->value;?>
");
	}
	function toggle_selectall(cls){
		$("."+cls).prop("checked", !$("."+cls).prop("checked"));
		return false;
	}
  	// @hilmar |->
  	typeof(window.tao) == 'undefined' ? window.tao = {} : '';
  	tao.zar = { vsn: '2.0.0', c2s: {}, t: {} };
  	<?php echo $_smarty_tpl->tpl_vars['tao']->value;?>

  	$('#adminpage').on( 'click', '#zar2sat', function() {
		$('input.pending_ckbx:checkbox').each( function() { this.checked = ! this.checked; });
  	});
  	$('#adminpage').on( 'click', '.zar2xas', function() {
  	 	tao.zar.c2s.x = $(this).attr('id').substr(4,1);
		$('input.pending_ckbx:checkbox:checked').each( function() {
			//if (this.checked)
			// take the underscore with to prevent numeric 0 headdage
			tao.zar.c2s.n = $(this).attr('id').substr(10);
    		$('#zarreax'+tao.zar.c2s.n).html(tao.zar.zarax);
    		zarCSC();
		});
  	});
  	$('.zar2s').click( function() {
    	tao.zar.c2s.ix=$(this).attr('id');
    	if (tao.zar.c2s.ix=='') { return false; };
    	tao.zar.c2s.n=tao.zar.c2s.ix.substr(4);
    	tao.zar.c2s.x=tao.zar.c2s.ix.substr(3,1);
    	$('#zarreax'+tao.zar.c2s.n).html(tao.zar.zarax);
    	zarCSC();
  	});

  	function zarCSC() {
  		$.ajax({
      		type: 'POST', url: 'admin/accounts',
      		data: {
        		zarat: tao.zar.c2s.n,
        		zardo: tao.zar.c2s.x,
        		zarse: tao.zar.zarar[(tao.zar.c2s.n).substr(1)],
        		form_security_token: $("input[name='form_security_token']").val()
      		}
    	}).done( function(r) {
      		tao.zar.r = JSON.parse(r);
      		$('#zarreax'+tao.zar.r.at).html(tao.zar.r.re + ',' + tao.zar.r.rc);
      		$('#zara'+tao.zar.r.at+',#zard'+tao.zar.r.at+',#id_pending'+tao.zar.r.at).remove();
      		//$('#zar-remsg').text(tao.zar.r.feedbk);
    	})
  	}

<?php echo '</script'; ?>
>
<?php }
}
