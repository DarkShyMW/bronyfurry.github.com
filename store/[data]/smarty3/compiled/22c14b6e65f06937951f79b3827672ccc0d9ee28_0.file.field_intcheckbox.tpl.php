<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:37:42
  from '/sites/git.bronyfurry.com/view/tpl/field_intcheckbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bdf6986b52_45957877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22c14b6e65f06937951f79b3827672ccc0d9ee28' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/field_intcheckbox.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bdf6986b52_45957877 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
_container" class="clearfix onoffswitch mb-3 checkbox">
		<label for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value[1];?>
</label>
		<div class="float-end"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" id="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value[3];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value[2]) {?>checked="checked"<?php }?>><label class="switchlabel" for="id_<?php echo $_smarty_tpl->tpl_vars['field']->value[0];?>
"> <span class="onoffswitch-inner" data-on="<?php if ($_smarty_tpl->tpl_vars['field']->value[5]) {
echo $_smarty_tpl->tpl_vars['field']->value[5][1];
}?>" data-off="<?php if ($_smarty_tpl->tpl_vars['field']->value[5]) {
echo $_smarty_tpl->tpl_vars['field']->value[5][0];
}?>"></span><span class="onoffswitch-switch"></span> </label></div>
		<small class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['field']->value[4];?>
</small>
	</div>
<?php }
}
