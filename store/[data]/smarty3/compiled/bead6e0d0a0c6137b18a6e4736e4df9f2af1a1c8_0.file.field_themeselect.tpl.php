<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:28:28
  from '/sites/git.bronyfurry.com/view/tpl/field_themeselect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c9dc46ddb3_89839753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bead6e0d0a0c6137b18a6e4736e4df9f2af1a1c8' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_themeselect.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c9dc46ddb3_89839753 (Smarty_Internal_Template $_smarty_tpl) {
?>	<?php if ($_smarty_tpl->tpl_vars['field']->value[5] == 'preview') {?>
		<?php echo '<script'; ?>
>$(document).ready(function(){ previewTheme($("#id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
")[0]); });<?php echo '</script'; ?>
>
	<?php }?>
	<div class='mb-3 field select'>
		<label for='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<select class="form-control" name='<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' id='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
' <?php if ($_smarty_tpl->tpl_vars['field']->value[5] == 'preview') {?>onchange="previewTheme(this);"<?php }?> >
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value[4], 'val', false, 'opt');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['opt']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['opt']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['opt']->value == $_smarty_tpl->tpl_vars['field']->value[2]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<span class='field_help'><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['field']->value[5] == 'preview') {?>
			<div id="theme-preview"></div>
		<?php }?>
	</div>
<?php }
}
