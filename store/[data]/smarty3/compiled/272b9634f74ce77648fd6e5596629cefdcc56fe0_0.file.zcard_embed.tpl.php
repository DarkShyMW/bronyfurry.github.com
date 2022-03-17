<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:33
  from '/sites/git.bronyfurry.com/view/tpl/zcard_embed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba2d0c1be0_35773756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '272b9634f74ce77648fd6e5596629cefdcc56fe0' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/zcard_embed.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba2d0c1be0_35773756 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hz_card <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
	<div class="hz_cover_photo" style="max-width: 100;"><a href="<?php echo $_smarty_tpl->tpl_vars['zcard']->value['chan']['xchan_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value['href'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['zcard']->value['chan']['xchan_name'];?>
" /></a>
		<div style="position: relative;top: -40px;left: 120px;color: #fff;font-size: 18px;text-rendering: optimizelegibility;text-shadow: 0 0 3px rgba(0, 0, 0, 0.8);" ><?php echo $_smarty_tpl->tpl_vars['zcard']->value['chan']['xchan_name'];?>
</div>
		<div style="position: relative;top: -40px;left: 120px;color: #fff;font-size: 10px;text-rendering: optimizelegibility;text-shadow: 0 0 3px rgba(0, 0, 0, 0.8);" ><?php echo $_smarty_tpl->tpl_vars['zcard']->value['chan']['channel_addr'];?>
</div>
	</div>
	<div style="position:relative;top: -75px;left: 20px;background-color: white;border: 1px solid #ddd;padding: 3px;width: 80px;height: 80px;"><a href="<?php echo $_smarty_tpl->tpl_vars['zcard']->value['chan']['xchan_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pphoto']->value['href'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['zcard']->value['chan']['xchan_name'];?>
" /></a></div>
</div>

<?php }
}
