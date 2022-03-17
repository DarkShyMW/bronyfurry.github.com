<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:45
  from '/sites/git.bronyfurry.com/view/tpl/app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9c1e6dbe4_59132260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96f9501df5e0b75f9c6d3bff263bc89514172e0' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/app.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9c1e6dbe4_59132260 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section-subtitle-wrapper clearfix">
	<div class="float-end">
		<?php if ($_smarty_tpl->tpl_vars['app']->value['type'] !== 'system') {?>
		<?php if ($_smarty_tpl->tpl_vars['purchase']->value) {?>
		<div class="app-purchase">
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['page'];?>
" class="btn btn-outline-secondary" title="<?php echo $_smarty_tpl->tpl_vars['purchase']->value;?>
" ><i class="fa fa-external"></i></a>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['action_label']->value || $_smarty_tpl->tpl_vars['update']->value || $_smarty_tpl->tpl_vars['delete']->value || $_smarty_tpl->tpl_vars['feature']->value) {?>
		<div class="app-tools">
			<form action="<?php echo $_smarty_tpl->tpl_vars['hosturl']->value;?>
appman" method="post">
			<input type="hidden" name="papp" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['papp'];?>
" />
			<?php if ($_smarty_tpl->tpl_vars['action_label']->value) {?><button type="submit" name="install" value="<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
" class="btn btn-<?php if ($_smarty_tpl->tpl_vars['installed']->value) {?>outline-secondary<?php } else { ?>success<?php }?> btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
" ><i class="fa fa-fw <?php if ($_smarty_tpl->tpl_vars['installed']->value) {?>fa-refresh<?php } else { ?>fa-arrow-circle-o-down<?php }?>" ></i> <?php echo $_smarty_tpl->tpl_vars['action_label']->value;?>
</button><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?><input type="hidden" name="appid" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['guid'];?>
" /><button type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
" ><i class="fa fa-fw fa-pencil" ></i></button><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['delete']->value) {?><button type="submit" name="delete" value="<?php if ($_smarty_tpl->tpl_vars['deleted']->value) {
echo $_smarty_tpl->tpl_vars['undelete']->value;
} else {
echo $_smarty_tpl->tpl_vars['delete']->value;
}?>" class="btn btn-outline-secondary btn-sm" title="<?php if ($_smarty_tpl->tpl_vars['deleted']->value) {
echo $_smarty_tpl->tpl_vars['undelete']->value;
} else {
echo $_smarty_tpl->tpl_vars['delete']->value;
}?>" ><i class="fa fa-fw fa-trash-o drop-icons"></i></button><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['settings_url']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['settings_url']->value;?>
/?f=&rpath=<?php echo $_smarty_tpl->tpl_vars['rpath']->value;?>
" class="btn btn-outline-secondary btn-sm"><i class="fa fa-fw fa-cog"></i></a><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['feature']->value) {?><button type="submit" name="feature" value="nav_featured_app" class="btn btn-outline-secondary btn-sm" title="<?php if ($_smarty_tpl->tpl_vars['featured']->value) {
echo $_smarty_tpl->tpl_vars['remove']->value;
} else {
echo $_smarty_tpl->tpl_vars['add']->value;
}?>"><i class="fa fa-fw fa-star<?php if ($_smarty_tpl->tpl_vars['featured']->value) {?> text-warning<?php }?>"></i></button><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['pin']->value) {?><button type="submit" name="pin" value="nav_pinned_app" class="btn btn-outline-secondary btn-sm" title="<?php if ($_smarty_tpl->tpl_vars['pinned']->value) {
echo $_smarty_tpl->tpl_vars['remove_nav']->value;
} else {
echo $_smarty_tpl->tpl_vars['add_nav']->value;
}?>"><i class="fa fa-fw fa-thumb-tack<?php if ($_smarty_tpl->tpl_vars['pinned']->value) {?> text-success<?php }?>"></i></button><?php }?>
			</form>
		</div>
		<?php }?>
		<?php }?>
	</div>
	<h3><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];
if ($_smarty_tpl->tpl_vars['app']->value['price']) {?> (<?php echo $_smarty_tpl->tpl_vars['app']->value['price'];?>
)<?php }?></h3>
</div>
<div class="section-content-tools-wrapper container">
	<div class="<?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?> app-deleted<?php }?> mb-3">
		<a class="app-icon app-link" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['app']->value['target']) {?> target="<?php echo $_smarty_tpl->tpl_vars['app']->value['target'];?>
"<?php }
if ($_smarty_tpl->tpl_vars['installed']->value) {?> data-papp="<?php echo $_smarty_tpl->tpl_vars['app']->value['papp'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['app']->value['url'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
"<?php }?>>
			<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
			<i class="app-icon fa fa-fw fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i>
			<?php } else { ?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['photo'];?>
" width="80" height="80" />
			<?php }?>
		</a>
		<div class="app-info">
			<?php if ($_smarty_tpl->tpl_vars['app']->value['desc']) {
echo $_smarty_tpl->tpl_vars['app']->value['desc'];
}?>
		</div>
	</div>
</div>


<?php }
}
