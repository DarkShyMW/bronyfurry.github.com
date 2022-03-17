<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:22:44
  from '/sites/git.bronyfurry.com/view/tpl/admin_profiles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba743337d2_30906841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '611ea1b2eee6db6103f66c8563693ce456432a71' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_profiles.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_textarea.tpl' => 2,
  ),
),false)) {
function content_6231ba743337d2_30906841 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
<div class="section-title-wrapper"><a title="<?php echo $_smarty_tpl->tpl_vars['new']->value;?>
" class="btn btn-primary btn-sm float-end" href="admin/profs/new"><i class="fa fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['new']->value;?>
</a><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
<div class="clear"></div>
</div>

<div class="section-content-tools-wrapper">

<div class="section-content-info-wrapper"><?php echo $_smarty_tpl->tpl_vars['all_desc']->value;?>

<br /><br />
<?php echo $_smarty_tpl->tpl_vars['all']->value;?>

</div>

<form action="admin/profs" method="post">

<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['basic']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['advanced']->value), 0, true);
?>

<input type="submit" name="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />

</form>



<?php if ($_smarty_tpl->tpl_vars['cust_fields']->value) {?>
<br /><br />
<div><strong><?php echo $_smarty_tpl->tpl_vars['cust_field_desc']->value;?>
</strong></div>
<br />

<table width="100%">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cust_fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['field']->value['field_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['field']->value['field_desc'];?>
</td><td><a class="btn btn-danger btn-sm" href="admin/profs/drop/<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['drop']->value;?>
"><i class="fa fa-trash-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['drop']->value;?>
</a> <a class="btn btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
" href="admin/profs/<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" ><i class="fa fa-pencil"></i></a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }?>

</div>

</div>
<?php }
}
