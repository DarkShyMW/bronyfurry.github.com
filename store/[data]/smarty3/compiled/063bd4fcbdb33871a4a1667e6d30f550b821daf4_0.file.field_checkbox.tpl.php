<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:09:31
  from '/sites/git.bronyfurry.com/view/tpl/field_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b75b3a8136_89910669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '063bd4fcbdb33871a4a1667e6d30f550b821daf4' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_checkbox.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b75b3a8136_89910669 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
_container" class="clearfix onoffswitch checkbox mb-3">
		<label for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];
if ($_smarty_tpl->tpl_vars['field']->value[6]) {?><sup class="required zuiqmid"> <?php echo $_smarty_tpl->tpl_vars['field']->value[6];?>
</sup><?php }?></label>
		<div class="float-end"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value[2]) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[5]) {
echo $_smarty_tpl->tpl_vars['field']->value[5];
}?> /><label class="switchlabel" for='id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
'> <span class="onoffswitch-inner" data-on='<?php if ($_smarty_tpl->tpl_vars['field']->value[4]) {
echo $_smarty_tpl->tpl_vars['field']->value[4][1];
}?>' data-off='<?php if ($_smarty_tpl->tpl_vars['field']->value[4]) {
echo $_smarty_tpl->tpl_vars['field']->value[4][0];
}?>'></span><span class="onoffswitch-switch"></span></label></div>
		<small class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
</small>
	</div>
<?php }
}
