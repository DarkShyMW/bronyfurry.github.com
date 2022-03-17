<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:04
  from '/sites/git.bronyfurry.com/view/tpl/peoplefind.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b8309e3c41_24785520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f68ace91d221b8335136de07a773b86eea92e434' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/peoplefind.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b8309e3c41_24785520 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="peoplefind-sidebar" class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['findpeople']->value;?>
</h3>
	<form action="directory" method="post" />
		<div class="input-group mb-3">
			<input class="form-control" type="text" name="search" title="<?php echo $_smarty_tpl->tpl_vars['hint']->value;
if ($_smarty_tpl->tpl_vars['advanced_search']->value) {
echo $_smarty_tpl->tpl_vars['advanced_hint']->value;
}?>" placeholder="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" />
			<button class="btn btn-outline-secondary" type="submit" name="submit"><i class="fa fa-fw fa-search"></i></button>
		</div>
	</form>
	<ul class="nav nav-pills flex-column">
		<?php if ($_smarty_tpl->tpl_vars['similar']->value) {?><li class="nav-item"><a class="nav-link" href="match" ><?php echo $_smarty_tpl->tpl_vars['similar']->value;?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?><li class="nav-item"><a class="nav-link" href="directory?f=&suggest=1" ><?php echo $_smarty_tpl->tpl_vars['suggest']->value;?>
</a></li><?php }?>
		<li class="nav-item"><a class="nav-link" href="randprof" ><?php echo $_smarty_tpl->tpl_vars['random']->value;?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
if ($_smarty_tpl->tpl_vars['inv']->value) {?><li class="nav-item"><a class="nav-link" href="invite" ><?php echo $_smarty_tpl->tpl_vars['inv']->value;?>
</a></li><?php }
}?>
	</ul>
</div>
<?php }
}
