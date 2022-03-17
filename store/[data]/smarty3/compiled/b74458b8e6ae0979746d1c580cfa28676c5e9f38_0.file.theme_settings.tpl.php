<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:28:28
  from '/sites/git.bronyfurry.com/view/theme/redbasic/tpl/theme_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c9dc42fd95_76818479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74458b8e6ae0979746d1c580cfa28676c5e9f38' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/theme/redbasic/tpl/theme_settings.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 2,
    'file:field_input.tpl' => 6,
    'file:field_colorinput.tpl' => 10,
  ),
),false)) {
function content_6231c9dc42fd95_76818479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['narrow_navbar']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['converse_width']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['font_size']->value), 0, true);
$_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['advanced_theming']->value), 0, true);
if ($_smarty_tpl->tpl_vars['expert']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['nav_bg']->value), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['nav_icon_colour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['nav_active_icon_colour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['banner_colour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['bgcolour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['background_image']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['item_colour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['comment_item_colour']->value), 0, true);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['font_colour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_colorinput.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['link_colour']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['radius']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['shadow']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['top_photo']->value), 0, true);
?>
	<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['reply_photo']->value), 0, true);
?>

<?php echo '<script'; ?>
>
	$(function(){
		$('#id_redbasic_nav_bg, #id_redbasic_nav_icon_colour, #id_redbasic_nav_active_icon_colour, #id_redbasic_banner_colour').colorpicker({format: 'rgba'});
		$('#id_redbasic_link_colour,#id_redbasic_background_colour').colorpicker();
		$('#id_redbasic_toolicon_colour,#id_redbasic_toolicon_activecolour,#id_redbasic_font_colour').colorpicker();
		$('#id_redbasic_item_colour,#id_redbasic_comment_item_colour,#id_redbasic_comment_border_colour').colorpicker({format: 'rgba'});
	});
<?php echo '</script'; ?>
>
<?php }?>
<div class="settings-submit-wrapper" >
	<button type="submit" name="redbasic-settings-submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
</div>
<?php }
}
