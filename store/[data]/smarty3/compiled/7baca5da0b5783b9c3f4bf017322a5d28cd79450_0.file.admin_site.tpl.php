<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:20:04
  from '/sites/git.bronyfurry.com/view/tpl/admin_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9d47e1837_12407681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7baca5da0b5783b9c3f4bf017322a5d28cd79450' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_site.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 23,
    'file:field_textarea.tpl' => 5,
    'file:field_select.tpl' => 6,
    'file:field_checkbox.tpl' => 13,
    'file:register_duty.tpl' => 1,
  ),
),false)) {
function content_6231b9d47e1837_12407681 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="adminpage" class="generic-content-wrapper-styled">
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>

	<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/site" method="post">
    <input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>

	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['sitename']->value), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['location']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['banner']->value), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['siteinfo']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['admininfo']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['access_policy']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['reply_address']->value), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['from_email']->value), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['from_email_name']->value), 0, true);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['language']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['theme']->value), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['frontpage']->value), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['mirror_frontpage']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['login_on_homepage']->value), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['enable_context_help']->value), 0, true);
?>
	<?php if ($_smarty_tpl->tpl_vars['directory_server']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['directory_server']->value), 0, true);
?>
	<?php }?>

	<div class="submit">
	    <input type="submit" name="page_site" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
    </div>

	<h3><?php echo $_smarty_tpl->tpl_vars['registration']->value;?>
</h3>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_text']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['role']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_policy']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:register_duty.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_duty']->value), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_perday']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_sameip']->value), 0, true);
?>
	<?php echo $_smarty_tpl->tpl_vars['reg_delay']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['reg_expire']->value;?>

	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['reg_autochannel']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['invitation_only']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['invitation_also']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['verify_email']->value), 0, true);
?>

	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['minimum_age']->value), 0, true);
?>
		<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['first_page']->value), 0, true);
?>

	<div class="submit">
	    <input type="submit" name="page_site" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
    </div>

	<h3><?php echo $_smarty_tpl->tpl_vars['corporate']->value;?>
</h3>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['feed_contacts']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['force_publish']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['disable_discover_tab']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['site_firehose']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['open_pubstream']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['incl']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['excl']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['abandon_days']->value), 0, true);
?>

	<div class="submit">
        <input type="submit" name="page_site" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
    </div>

	<h3><?php echo $_smarty_tpl->tpl_vars['advanced']->value;?>
</h3>
	<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['sse_enabled']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['imagick_path']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['proxy']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['proxyuser']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['timeout']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['delivery_interval']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['delivery_batch_count']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['force_queue']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['poll_interval']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['maxloadavg']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['default_expire_days']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['active_expire_days']->value), 0, true);
?>


	<div class="submit">
        <input type="submit" name="page_site" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
    </div>

	</form>
</div>
<?php echo '<script'; ?>
>
	$(function(){

		$("#cnftheme").colorbox({
			width: 800,
			onLoad: function(){
				var theme = $("#id_theme :selected").val();
				$("#cnftheme").attr('href',"<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/themes/"+theme);
			},
			onComplete: function(){
				$(this).colorbox.resize();
				$("#colorbox form").submit(function(e){
					var url = $(this).attr('action');
					// can't get .serialize() to work...
					var data={};
					$(this).find("input").each(function(){
						data[$(this).attr('name')] = $(this).val();
					});
					$(this).find("select").each(function(){
						data[$(this).attr('name')] = $(this).children(":selected").val();
					});
					console.log(":)", url, data);

					$.post(url, data, function(data) {
						if(timer) clearTimeout(timer);
						updateInit();
						$.colorbox.close();
					})

					return false;
				});

			}
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
