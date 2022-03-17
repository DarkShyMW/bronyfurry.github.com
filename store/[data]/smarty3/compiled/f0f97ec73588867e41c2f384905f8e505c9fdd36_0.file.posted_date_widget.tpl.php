<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:28:39
  from '/sites/git.bronyfurry.com/view/tpl/posted_date_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bbd741aab5_04976988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f97ec73588867e41c2f384905f8e505c9fdd36' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/posted_date_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bbd741aab5_04976988 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

function toggle_posted_date_button() {
	if($('#posted-date-dropdown').is(':visible')) {
		$('#posted-date-icon').removeClass('fa-caret-up');
		$('#posted-date-icon').addClass('fa-cog');
		$('#posted-date-dropdown').hide();
	}
	else {
		$('#posted-date-icon').addClass('fa-caret-up');
		$('#posted-date-icon').removeClass('fa-cog');
		$('#posted-date-dropdown').show();
	}
}
<?php echo '</script'; ?>
>
		

<div id="datebrowse-sidebar" class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<?php echo '<script'; ?>
>function dateSubmit(dateurl) { window.location.href = dateurl; } <?php echo '</script'; ?>
>
	<ul id="posted-date-selector" class="nav nav-pills flex-column">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dates']->value, 'arr', false, 'y');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['y']->value == $_smarty_tpl->tpl_vars['cutoff_year']->value) {?>
		</ul>
		<div id="posted-date-dropdown" style="display: none;">
		<ul id="posted-date-selector-drop" class="nav nav-pills flex-column">
		<?php }?> 
		<li class="nav-item" id="posted-date-selector-year-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
">
			<a class="nav-link" href="#" onclick="openClose('posted-date-selector-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
'); return false;"><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</a>
		</li>
		<div id="posted-date-selector-<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
" style="display: none;">
			<ul class="posted-date-selector-months nav nav-pills flex-column">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
				<li class="nav-item">
					<a class="nav-link" href="#" onclick="dateSubmit('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?f=&dend=<?php echo $_smarty_tpl->tpl_vars['d']->value[1];
if ($_smarty_tpl->tpl_vars['showend']->value) {?>&dbegin=<?php echo $_smarty_tpl->tpl_vars['d']->value[2];
}?>'); return false;"><?php echo $_smarty_tpl->tpl_vars['d']->value[0];?>
</a>
				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['cutoff']->value) {?>
		</div>
		<button class="btn btn-outline-secondary btn-sm" onclick="toggle_posted_date_button(); return false;"><i id="posted-date-icon" class="fa fa-cog"></i></button>
		<?php }?>
	</ul>
</div>
<?php }
}
