<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:07
  from '/sites/git.bronyfurry.com/view/tpl/searchbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b833b3b396_08813663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028840b2e2a1cee50ab92104b956c61f7322288c' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/searchbox.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b833b3b396_08813663 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" method="get" >
	<input type="hidden" name="f" value="" />
	<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="input-group">
		<input class="form-control" type="text" name="search" id="search-text" value="<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
" onclick="this.submit();" />
		<button type="submit" name="submit" class="btn btn-outline-secondary" id="search-submit" value="<?php echo $_smarty_tpl->tpl_vars['search_label']->value;?>
"><i class="fa fa-search"></i></button>
		<?php if ($_smarty_tpl->tpl_vars['savedsearch']->value) {?>
		<button type="submit" name="searchsave" class="btn btn-outline-secondary" id="search-save" value="<?php echo $_smarty_tpl->tpl_vars['save_label']->value;?>
"><i class="fa fa-floppy-o"></i></button>
		<?php }?>
	</div>
</form>
<?php }
}
