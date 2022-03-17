<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/build_query.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b25b6958_91740710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1be9bf8d653d7c226904d4c98811cfa6544d0bf' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/build_query.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9b25b6958_91740710 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

	var bParam_cmd = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/update/<?php echo $_smarty_tpl->tpl_vars['pgtype']->value;?>
";

	<?php if ($_smarty_tpl->tpl_vars['conv_mode']->value) {?>
	var conv_mode = '<?php echo $_smarty_tpl->tpl_vars['conv_mode']->value;?>
';
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['page_mode']->value) {?>
	var page_mode = '<?php echo $_smarty_tpl->tpl_vars['page_mode']->value;?>
';
	<?php }?>

	var bParam_uid = <?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
;
	var bParam_gid = <?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
;
	var bParam_cid = <?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
;
	var bParam_cmin = <?php echo $_smarty_tpl->tpl_vars['cmin']->value;?>
;
	var bParam_cmax = <?php echo $_smarty_tpl->tpl_vars['cmax']->value;?>
;
	var bParam_star = <?php echo $_smarty_tpl->tpl_vars['star']->value;?>
;
	var bParam_liked = <?php echo $_smarty_tpl->tpl_vars['liked']->value;?>
;
	var bParam_conv = <?php echo $_smarty_tpl->tpl_vars['conv']->value;?>
;
	var bParam_spam = <?php echo $_smarty_tpl->tpl_vars['spam']->value;?>
;
	var bParam_new = <?php echo $_smarty_tpl->tpl_vars['nouveau']->value;?>
;
	var bParam_page = <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
;
	var bParam_wall = <?php echo $_smarty_tpl->tpl_vars['wall']->value;?>
;
	var bParam_list = <?php echo $_smarty_tpl->tpl_vars['list']->value;?>
;
	var bParam_fh = <?php echo $_smarty_tpl->tpl_vars['fh']->value;?>
;
	var bParam_dm = <?php echo $_smarty_tpl->tpl_vars['dm']->value;?>
;

	var bParam_search = "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
";
	var bParam_xchan = "<?php echo $_smarty_tpl->tpl_vars['xchan']->value;?>
";
	var bParam_order = "<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
";
	var bParam_file = "<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
";
	var bParam_cats = "<?php echo $_smarty_tpl->tpl_vars['cats']->value;?>
";
	var bParam_tags = "<?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
";
	var bParam_dend = "<?php echo $_smarty_tpl->tpl_vars['dend']->value;?>
";
	var bParam_dbegin = "<?php echo $_smarty_tpl->tpl_vars['dbegin']->value;?>
";
	var bParam_mid = "<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
";
	var bParam_verb = "<?php echo $_smarty_tpl->tpl_vars['verb']->value;?>
";
	var bParam_net = "<?php echo $_smarty_tpl->tpl_vars['net']->value;?>
";
	var bParam_pf = "<?php echo $_smarty_tpl->tpl_vars['pf']->value;?>
";
	var bParam_unseen = "<?php echo $_smarty_tpl->tpl_vars['unseen']->value;?>
";

	function buildCmd() {
		var udargs = ((page_load) ? "/load" : "");
		var bCmd = bParam_cmd + udargs + "?f=" ;
		if(bParam_uid) bCmd = bCmd + "&p=" + bParam_uid;
		if(bParam_cmin != (-1)) bCmd = bCmd + "&cmin=" + bParam_cmin;
		if(bParam_cmax != (-1)) bCmd = bCmd + "&cmax=" + bParam_cmax;
		if(bParam_gid != 0) { bCmd = bCmd + "&gid=" + bParam_gid; } else
		if(bParam_cid != 0) { bCmd = bCmd + "&cid=" + bParam_cid; }
		if(bParam_star != 0) bCmd = bCmd + "&star=" + bParam_star;
		if(bParam_liked != 0) bCmd = bCmd + "&liked=" + bParam_liked;
		if(bParam_conv!= 0) bCmd = bCmd + "&conv=" + bParam_conv;
		if(bParam_spam != 0) bCmd = bCmd + "&spam=" + bParam_spam;
		if(bParam_new != 0) bCmd = bCmd + "&new=" + bParam_new;
		if(bParam_wall != 0) bCmd = bCmd + "&wall=" + bParam_wall;
		if(bParam_list != 0) bCmd = bCmd + "&list=" + bParam_list;
		if(bParam_fh != 0) bCmd = bCmd + "&fh=" + bParam_fh;
		if(bParam_dm != 0) bCmd = bCmd + "&dm=" + bParam_dm;
		if(bParam_search != "") bCmd = bCmd + "&search=" + bParam_search;
		if(bParam_xchan != "") bCmd = bCmd + "&xchan=" + bParam_xchan;
		if(bParam_order != "") bCmd = bCmd + "&order=" + bParam_order;
		if(bParam_file != "") bCmd = bCmd + "&file=" + bParam_file;
		if(bParam_cats != "") bCmd = bCmd + "&cat=" + bParam_cats;
		if(bParam_tags != "") bCmd = bCmd + "&tag=" + bParam_tags;
		if(bParam_dend != "") bCmd = bCmd + "&dend=" + bParam_dend;
		if(bParam_dbegin != "") bCmd = bCmd + "&dbegin=" + bParam_dbegin;
		if(bParam_mid != "") bCmd = bCmd + "&mid=" + bParam_mid;
		if(bParam_verb != "") bCmd = bCmd + "&verb=" + bParam_verb;
		if(bParam_net != "") bCmd = bCmd + "&net=" + bParam_net;
		if(bParam_page != 1) bCmd = bCmd + "&page=" + bParam_page;
		if(bParam_pf != 0) bCmd = bCmd + "&pf=" + bParam_pf;
		if(bParam_unseen != 0) bCmd = bCmd + "&unseen=" + bParam_unseen;
		return(bCmd);
	}

<?php echo '</script'; ?>
>

<?php }
}
