<?php
/* Smarty version 3.1.39, created on 2022-03-16 14:43:52
  from '/sites/git.bronyfurry.com/view/tpl/connections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bf68693fd4_44563935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e238325de6c187f88c31f1ee52d02a9964950a6' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/connections.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:connection_template.tpl' => 1,
    'file:contact_edit_modal.tpl' => 1,
  ),
),false)) {
function content_6231bf68693fd4_44563935 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper clearfix">
		<div class="dropdown float-end">
			<button type="button" class="btn btn-success btn-sm" onclick="openClose('contacts-follow-form'); closeMenu('contacts-search-form'); $('#contacts-follow').focus();">
				<i class="fa fa-plus"></i>&nbsp;Add
			</button>
			<button type="button" class="btn btn-primary btn-sm" onclick="openClose('contacts-search-form'); closeMenu('contacts-follow-form'); $('#contacts-search').focus();">
				<i class="fa fa-search"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

			</button>
			<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
				<i class="fa fa-filter"></i>
			</button>
			<div class="dropdown-menu dropdown-menu-end">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
				<a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['menu']->value['sel'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['label'];?>
</a>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['finding']->value) {?><h2><?php echo $_smarty_tpl->tpl_vars['finding']->value;?>
</h2><?php } else { ?><h2><?php echo $_smarty_tpl->tpl_vars['header']->value;
if ($_smarty_tpl->tpl_vars['total']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
)<?php }?></h2><?php }?>
	</div>
	<div id="contacts-search-form" class="section-content-tools-wrapper">
		<form action="<?php echo $_smarty_tpl->tpl_vars['cmd']->value;?>
" method="get" name="contacts-search-form">
			<div class="input-group mb-3">
				<input type="text" name="search" id="contacts-search" class="form-control" onfocus="this.select();" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" />
				<button id="contacts-search-submit" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-search"></i></button>
			</div>
		</form>
	</div>
	<div id="contacts-follow-form" class="section-content-tools-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['abook_usage_message']->value) {?>
		<div class="section-conten-info-wrapper">
			<?php echo $_smarty_tpl->tpl_vars['abook_usage_message']->value;?>

		</div>
		<?php }?>
		<form action="follow" method="post">
			<div class="input-group mb-3">
				<input class="form-control" id="contacts-follow" type="text" name="url" title="Examples: bob@example.com, https://example.com/barbara" placeholder="Enter channel address">
				<button class="btn btn-success" type="submit" name="submit" value="Connect" title="Connect"><i class="fa fa-fw fa-plus"></i></button>
			</div>
		</form>
	</div>
	<div class="connections-wrapper clearfix">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
			<?php $_smarty_tpl->_subTemplateRender("file:connection_template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div id="page-end"></div>
	</div>
</div>
<?php echo '<script'; ?>
>$(document).ready(function() { loadingPage = false;});<?php echo '</script'; ?>
>
<div id="page-spinner" class="spinner-wrapper">
	<div class="spinner m"></div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:contact_edit_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
