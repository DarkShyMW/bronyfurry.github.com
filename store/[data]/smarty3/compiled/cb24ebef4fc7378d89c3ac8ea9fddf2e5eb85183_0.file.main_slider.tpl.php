<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:45:59
  from '/sites/git.bronyfurry.com/view/tpl/main_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bfe7811c44_88866476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb24ebef4fc7378d89c3ac8ea9fddf2e5eb85183' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/main_slider.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bfe7811c44_88866476 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="main-slider" class="slider" >
	<input id="main-range" type="text" name="cminmax" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
" />
	<div id="profile-jot-text-loading" class="spinner-wrapper">
		<div class="spinner m"></div>
	</div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
	var old_cmin = 0;
	var old_cmax = 99;

	$("#main-range").jRange({ isRange: true, from: 0, to: 99, step: 1, scale: [<?php echo $_smarty_tpl->tpl_vars['labels']->value;?>
], width:'100%', showLabels: false,  onstatechange: function(v) { 
		var carr = v.split(",");
		if(carr[0] != bParam_cmin) {
			old_cmin = bParam_cmin;
	 		bParam_cmin = carr[0];
		}
		if(carr[1] != bParam_cmax) {
			old_cmax = bParam_cmax; 
			bParam_cmax = carr[1];
		}
		networkRefresh();
 	} });

	var slideTimer = null;
	function networkRefresh() {

		$("#profile-jot-text-loading").show();

		if((document.readyState !== "complete") || (slideTimer !== null))
			return;
		if((bParam_cmin == old_cmin) && (bParam_cmax == old_cmax))
			return;

		slideTimer = setTimeout(networkTimerRefresh,2000);
	}

	function networkTimerRefresh() {
		slideTimer = null;
		page_load = true;
		liveUpdate();
	}
});
<?php echo '</script'; ?>
>
<?php }
}
