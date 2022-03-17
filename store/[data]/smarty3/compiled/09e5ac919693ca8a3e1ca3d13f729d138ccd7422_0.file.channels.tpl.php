<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:42:18
  from '/sites/git.bronyfurry.com/view/tpl/channels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bf0ab794f5_48682383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09e5ac919693ca8a3e1ca3d13f729d138ccd7422' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/channels.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:channel.tpl' => 2,
  ),
),false)) {
function content_6231bf0ab794f5_48682383 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<a class="btn btn-success btn-sm float-end" href="<?php echo $_smarty_tpl->tpl_vars['create']->value[0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['create']->value[1];?>
"><i class="fa fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['create']->value[2];?>
</a>
		<h2><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper-np">
		<?php if ($_smarty_tpl->tpl_vars['channel_usage_message']->value) {?>
		<div id="channel-usage-message" class="section-content-warning-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['channel_usage_message']->value;?>

		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['desc']->value) {?>
		<div id="channels-desc" class="section-content-info-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

		</div>
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_channels']->value, 'chn');
$_smarty_tpl->tpl_vars['chn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chn']->value) {
$_smarty_tpl->tpl_vars['chn']->do_else = false;
?>
			<?php $_smarty_tpl->_subTemplateRender("file:channel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('channel'=>$_smarty_tpl->tpl_vars['chn']->value), 0, true);
?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['delegates']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delegates']->value, 'chn');
$_smarty_tpl->tpl_vars['chn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chn']->value) {
$_smarty_tpl->tpl_vars['chn']->do_else = false;
?>
				<?php $_smarty_tpl->_subTemplateRender("file:channel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('channel'=>$_smarty_tpl->tpl_vars['chn']->value), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</div>
<?php }
}
