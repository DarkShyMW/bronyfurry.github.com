<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:42
  from '/sites/git.bronyfurry.com/view/tpl/contact_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c04e607c42_76530479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75be1d118118fe298ec721489eca6e24eb65ce94' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/contact_slider.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c04e607c42_76530479 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="contact-slider" class="slider mb-3"><input id="contact-range" type="text" name="fake-closeness" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" /></div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
	// The slider does not render correct if width is given in % and
	// the slider container is hidden (display: none) during rendering.
	// So let's unhide it to render and hide again afterwards.
	if(!$("#affinity-tool-collapse").hasClass("show")) {
		$("#affinity-tool-collapse").addClass("show");
		makeContactSlider();
		$("#affinity-tool-collapse").removeClass("show");
	}
	else {
		makeContactSlider();
	}
});

function makeContactSlider() {
	$("#contact-range").jRange({ from: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['min']->value)===null||$tmp==='' ? '0' : $tmp);?>
, to: 99, step: 1, scale: [<?php echo $_smarty_tpl->tpl_vars['labels']->value;?>
], width:'98%', showLabels: false, onstatechange: function(v) { $("#contact-closeness-mirror").val(v); }  });
}
<?php echo '</script'; ?>
>
<?php }
}
