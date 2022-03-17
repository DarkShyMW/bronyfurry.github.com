<?php
/* Smarty version 3.1.39, created on 2022-03-16 15:14:54
  from '/sites/git.bronyfurry.com/view/tpl/admin_logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231d4beab44a7_00319801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '017ce59fe32e5dc0809881cf0977a43dd6e25b63' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_logs.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 1,
    'file:field_input.tpl' => 1,
    'file:field_select.tpl' => 1,
  ),
),false)) {
function content_6231d4beab44a7_00319801 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled" id='adminpage'>
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
	
	<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/logs" method="post">
    <input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
' />

	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['debugging']->value), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['logfile']->value), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['loglevel']->value), 0, false);
?>
	
	<div class="submit">
	    <input type="submit" name="page_logs" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
	</div>
	
	</form>
	
	<h3><?php echo $_smarty_tpl->tpl_vars['logname']->value;?>
</h3>
	<div style="width:100%; height:400px; overflow: auto; "><pre><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</pre></div>
<!--	<iframe src='<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['logname']->value;?>
' style="width:100%; height:400px"></iframe> -->
	<!-- <div class="submit"><input type="submit" name="page_logs_clear_log" value="<?php echo $_smarty_tpl->tpl_vars['clear']->value;?>
" /></div> -->
</div>
<?php }
}
