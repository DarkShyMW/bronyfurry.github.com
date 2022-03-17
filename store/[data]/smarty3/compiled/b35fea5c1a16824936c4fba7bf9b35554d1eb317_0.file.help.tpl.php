<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:46
  from '/sites/git.bronyfurry.com/view/tpl/help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b85a510373_05994253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b35fea5c1a16824936c4fba7bf9b35554d1eb317' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/help.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b85a510373_05994253 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="help-content" class="generic-content-wrapper">
	<div class="clearfix section-title-wrapper">
		<div class="float-end">
			<div class="btn-group">
				<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
					<i class="fa fa-language" style="font-size: 1.4em;"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-end flex-column lang-selector">
					<a class="dropdown-item lang-choice" href="/help">de</a>
					<a class="dropdown-item lang-choice" href="/help">en</a>
					<a class="dropdown-item lang-choice" href="/help">es</a>
					<a class="dropdown-item lang-choice" href="/help">fr</a>
				</div>
			</div>
		</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h2>
	</div>
	<div class="section-content-wrapper" id="doco-content">
		<h3 id="doco-top-toc-heading">
			<span class="fakelink" onclick="docoTocToggle(); return false;">
				<i class="fa fa-fw fa-caret-right fakelink" id="doco-toc-toggle"></i>
				<?php echo $_smarty_tpl->tpl_vars['tocHeading']->value;?>

			</span>
		</h3>
		<ul id="doco-top-toc" style="margin-bottom: 1.5em; display: none;"></ul>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div>
<?php echo '<script'; ?>
>
	var help_language = '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
'
<?php echo '</script'; ?>
>
<?php }
}
