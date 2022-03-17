<?php
/* Smarty version 3.1.39, created on 2022-03-16 15:04:03
  from '/sites/git.bronyfurry.com/view/tpl/saved_searches.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231d233621ea6_01053235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31f476d9d833c087efb6d88004320ee54b348309' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/saved_searches.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231d233621ea6_01053235 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget saved-search-widget clearfix">
	<h3 id="search"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<?php echo $_smarty_tpl->tpl_vars['searchbox']->value;?>

	<ul id="saved-search-list" class="nav nav-pills flex-column">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['saved']->value, 'search');
$_smarty_tpl->tpl_vars['search']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['search']->value) {
$_smarty_tpl->tpl_vars['search']->do_else = false;
?>
		<li class="nav-item nav-item-hack" id="search-term-<?php echo $_smarty_tpl->tpl_vars['search']->value['id'];?>
">
			<a class="nav-link widget-nav-pills-icons" title="<?php echo $_smarty_tpl->tpl_vars['search']->value['delete'];?>
" onclick="return confirmDelete();" id="drop-saved-search-term-<?php echo $_smarty_tpl->tpl_vars['search']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['search']->value['dellink'];?>
"><i id="dropfa-floppy-od-search-term-<?php echo $_smarty_tpl->tpl_vars['search']->value['id'];?>
" class="fa fa-trash-o drop-icons" ></i></a>
			<a id="saved-search-term-<?php echo $_smarty_tpl->tpl_vars['search']->value['id'];?>
" class="nav-link<?php if ($_smarty_tpl->tpl_vars['search']->value['selected']) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['search']->value['srchlink'];?>
"><?php echo $_smarty_tpl->tpl_vars['search']->value['displayterm'];?>
</a>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }
}
