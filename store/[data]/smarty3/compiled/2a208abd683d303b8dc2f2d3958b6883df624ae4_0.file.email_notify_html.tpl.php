<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:27
  from '/sites/git.bronyfurry.com/view/tpl/email_notify_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c03fef3a20_06346916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a208abd683d303b8dc2f2d3958b6883df624ae4' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/email_notify_html.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c03fef3a20_06346916 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional //EN">
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<table style="border:1px solid #ccc; background-color: #FFFFFF; color: #000000;">
	<tbody>
	<tr><td colspan="2" style="background:#43488A; color:#FFFFFF; font-weight:bold; font-family:'lucida grande', tahoma, verdana,arial, sans-serif; padding: 4px 8px; vertical-align: middle; font-size:16px; letter-spacing: -0.03em; text-align: left;"><img style="width:32px;height:32px; float:left;" src="<?php echo $_smarty_tpl->tpl_vars['notify_icon']->value;?>
"><div style="padding:7px; margin-left: 5px; float:left; font-size:18px;letter-spacing:1px;"><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</div><div style="clear: both;"></div></td></tr>


	<tr><td style="padding-top:22px;" colspan="2"><?php echo $_smarty_tpl->tpl_vars['preamble']->value;?>
</td></tr>


	<tr><td style="padding-left:22px;padding-top:22px;width:60px;" valign="top" rowspan=3><a href="<?php echo $_smarty_tpl->tpl_vars['source_link']->value;?>
"><img style="border:0px;width:48px;height:48px;" src="<?php echo $_smarty_tpl->tpl_vars['source_photo']->value;?>
"></a></td>
		<td style="padding-top:22px;"><a href="<?php echo $_smarty_tpl->tpl_vars['source_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['source_name']->value;?>
</a></td></tr>
	<tr><td style="font-weight:bold;padding-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td></tr>
	<tr><td style="padding-right:22px;"><?php echo $_smarty_tpl->tpl_vars['htmlversion']->value;?>
</td></tr>
	<tr><td style="padding-top:11px;" colspan="2"><?php echo $_smarty_tpl->tpl_vars['hsitelink']->value;?>
</td></tr>
	<tr><td style="padding:11px 0;" colspan="2"><?php echo $_smarty_tpl->tpl_vars['hitemlink']->value;?>
</td></tr>
	<tr><td></td><td><?php echo $_smarty_tpl->tpl_vars['thanks']->value;?>
</td></tr>
	<tr><td></td><td><?php echo $_smarty_tpl->tpl_vars['site_admin']->value;?>
</td></tr>

	<tr><td style="font-size: 12px; color: #444444; padding-top: 18px;" colspan="2"><?php echo $_smarty_tpl->tpl_vars['opt_out1']->value;?>
</td></tr>
	<tr><td style="font-size: 12px; color: #444444;" colspan="2"><?php echo $_smarty_tpl->tpl_vars['opt_out2']->value;?>
</td></tr>
	</tbody>
</table>
</body>
</html>
<?php }
}
