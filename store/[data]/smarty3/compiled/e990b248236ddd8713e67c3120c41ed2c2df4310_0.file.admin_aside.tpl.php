<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:20:02
  from '/sites/git.bronyfurry.com/view/tpl/admin_aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9d275f3d5_68488633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e990b248236ddd8713e67c3120c41ed2c2df4310' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_aside.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9d275f3d5_68488633 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	// update pending count //
	$(function(){

		$("nav").bind('nav-update',  function(e,data){
			var elm = $('#pending-update');
			var register = $(data).find('register').text();
			if (register=="0") { register=""; elm.hide();} else { elm.show(); }
			elm.html(register);
		});
	});
<?php echo '</script'; ?>
>
<div class="widget">
<h3><?php echo $_smarty_tpl->tpl_vars['admtxt']->value;?>
</h3>
<ul class="nav nav-pills flex-column">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
	<li class="nav-item"><a class="nav-link" href='<?php echo $_smarty_tpl->tpl_vars['link']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['link']->value[1];
if ($_smarty_tpl->tpl_vars['link']->value[3]) {?><span id='<?php echo $_smarty_tpl->tpl_vars['link']->value[3];?>
' title='<?php echo $_smarty_tpl->tpl_vars['link']->value[4];?>
'></span><?php }?></a></li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>

<?php if ($_smarty_tpl->tpl_vars['admin']->value['update']) {?>
<ul class="nav nav-pills flex-column">
	<li class="nav-item"><a class="nav-link" href='<?php echo $_smarty_tpl->tpl_vars['admin']->value['update'][0];?>
'><?php echo $_smarty_tpl->tpl_vars['admin']->value['update'][1];?>
</a></li>
	<li class="nav-item"><a class="nav-link" href=''>Important Changes</a></li>
</ul>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['plugins']->value) {?>
<div class="widget">
<h3><?php echo $_smarty_tpl->tpl_vars['plugadmtxt']->value;?>
</h3>
<ul class="nav nav-pills flex-column">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
	<li class="nav-item"><a class="nav-link" href='<?php echo $_smarty_tpl->tpl_vars['l']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['l']->value[1];?>
</a></li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php }?>
	
<div class="widget">	
<h3><?php echo $_smarty_tpl->tpl_vars['logtxt']->value;?>
</h3>
<ul class="nav nav-pills flex-column">
	<li class="nav-item"><a class="nav-link" href='<?php echo $_smarty_tpl->tpl_vars['logs']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['logs']->value[1];?>
</a></li>
</ul>
</div>
<?php }
}
