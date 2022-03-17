<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:13
  from '/sites/git.bronyfurry.com/view/tpl/lang_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b839575744_38444007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8155be42ca8489e878983ad40c37cd5464a5c873' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/lang_selector.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b839575744_38444007 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled">
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<br />
<div id="language-selector" >
	<form action="#" method="post" >
		<select name="system_language" onchange="this.form.submit();" >
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value[0], 'l', false, 'v');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['langs']->value[1]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
	</form>
</div>
</div>
<?php }
}
