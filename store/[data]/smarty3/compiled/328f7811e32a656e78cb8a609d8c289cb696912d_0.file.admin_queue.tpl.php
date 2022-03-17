<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:23:02
  from '/sites/git.bronyfurry.com/view/tpl/admin_queue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba86a78c99_15736786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '328f7811e32a656e78cb8a609d8c289cb696912d' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_queue.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba86a78c99_15736786 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled">
<h3><?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
</h3>

<?php if ($_smarty_tpl->tpl_vars['hasentries']->value) {?>

<table cellpadding="10" id="admin-queue-table"><tr><td><?php echo $_smarty_tpl->tpl_vars['numentries']->value;?>
&nbsp;&nbsp;</td><td><?php echo $_smarty_tpl->tpl_vars['desturl']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['priority']->value;?>
</td><td>&nbsp;</td><td>&nbsp;</td></tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>

<tr><td><?php echo $_smarty_tpl->tpl_vars['e']->value['total'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value['outq_posturl'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value['priority'];?>
</td><?php if ($_smarty_tpl->tpl_vars['expert']->value) {?><td><a href="admin/queue?f=&drophub=<?php echo $_smarty_tpl->tpl_vars['e']->value['eurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nukehub']->value;?>
" class="btn btn-outline-secondary"><i class="fa fa-times"></i><a></td><td><a href="admin/queue?f=&emptyhub=<?php echo $_smarty_tpl->tpl_vars['e']->value['eurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
" class="btn btn-outline-secondary"><i class="fa fa-trash-o"></i></a></td><td><a href="admin/queue?f=&deliverhub=<?php echo $_smarty_tpl->tpl_vars['e']->value['eurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['deliverhub']->value;?>
" class="btn btn-outline-secondary"><i class="fa fa-refresh"></i><a></td><?php }?></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<?php }
}
}
