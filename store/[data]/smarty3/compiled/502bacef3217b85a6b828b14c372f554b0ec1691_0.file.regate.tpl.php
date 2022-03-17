<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:12
  from '/sites/git.bronyfurry.com/view/tpl/regate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b838afd859_79257465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '502bacef3217b85a6b828b14c372f554b0ec1691' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/regate.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 1,
  ),
),false)) {
function content_6231b838afd859_79257465 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['now']->value) {?>
		<div class="section-content-danger-wrapper">
			<div class="h3"><?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</div>
		</div>
		<?php } else { ?>
		<div class="section-content-info-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['id']->value;?>

			<div class="h3"><?php echo $_smarty_tpl->tpl_vars['pin']->value;?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['email_extra']->value) {?><b><?php echo $_smarty_tpl->tpl_vars['email_extra']->value;?>
</b><?php }?>

		</div>

		<form action="regate/<?php echo $_smarty_tpl->tpl_vars['did2']->value;?>
" method="post">
			<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
			<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>array($_smarty_tpl->tpl_vars['acpin']->value[0],$_smarty_tpl->tpl_vars['acpin']->value[1],'','','',$_smarty_tpl->tpl_vars['atform']->value)), 0, false);
?>

			<div class="float-end submit-wrapper">
				<button type="submit" name="submit" class="btn btn-primary" <?php echo $_smarty_tpl->tpl_vars['atform']->value;?>
><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['resend']->value) {?>
			<div class="resend-email" >
				<button type="submit" name="resend" class="btn btn-warning" <?php echo $_smarty_tpl->tpl_vars['atform']->value;?>
><?php echo $_smarty_tpl->tpl_vars['resend']->value;?>
</button>
			</div>
			<?php }?>

		</form>
		<?php }?>
		<div class="clearfix"></div>
	</div>
</div>
<?php echo '<script'; ?>
>
	$('.register_date').each( function () {
		var date = new Date($(this).data('utc'));
		$(this).html(date.toLocaleString(undefined, {weekday: 'short', hour: 'numeric', minute: 'numeric'}));
	});
<?php echo '</script'; ?>
>
<?php }
}
