<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:45
  from '/sites/git.bronyfurry.com/view/tpl/myapps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9c1e9c348_77974293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1007629ac10f2d58163c3edfc4648ef7e254253' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/myapps.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9c1e9c348_77974293 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper clearfix">
		<?php if ($_smarty_tpl->tpl_vars['authed']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['create']->value) {?>
		<a href="appman" class="float-end btn btn-success btn-sm"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['create']->value;?>
</a>
		<?php } elseif ($_smarty_tpl->tpl_vars['manage']->value) {?>
		<a href="apps/edit<?php if ($_smarty_tpl->tpl_vars['cat']->value[0]) {?>/?f=&cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value[0];
}?>" class="float-end btn btn-primary btn-sm"><?php echo $_smarty_tpl->tpl_vars['manage']->value;?>
</a>
		<?php }?>
		<?php }?>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['cat']->value[0]) {?> - <?php echo $_smarty_tpl->tpl_vars['cat']->value[0];
}?></h2>
	</div>
	<div class="clearfix section-content-wrapper-np">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apps']->value, 'ap');
$_smarty_tpl->tpl_vars['ap']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ap']->value) {
$_smarty_tpl->tpl_vars['ap']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['ap']->value;?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
