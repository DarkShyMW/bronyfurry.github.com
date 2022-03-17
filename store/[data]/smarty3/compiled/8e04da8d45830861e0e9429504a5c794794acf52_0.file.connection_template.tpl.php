<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:47:26
  from '/sites/git.bronyfurry.com/view/tpl/connection_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c03edce389_28896995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e04da8d45830861e0e9429504a5c794794acf52' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/connection_template.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:connstatus.tpl' => 1,
  ),
),false)) {
function content_6231c03edce389_28896995 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="contact-entry-wrapper-<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">
	<div class="section-subtitle-wrapper clearfix">
		<div class="float-end">
			<?php if ($_smarty_tpl->tpl_vars['contact']->value['status']) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['states'], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
			<span class="badge rounded-pill bg-danger text-white me-1" title=""><?php echo $_smarty_tpl->tpl_vars['state']->value;?>
</span>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			<span id="contact-role-<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="badge rounded-pill bg-warning text-dark me-1" title="<?php echo $_smarty_tpl->tpl_vars['role_label']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['role'];?>
</span>
			<button type="button" class="btn btn-outline-secondary btn-sm contact-edit" title="<?php echo $_smarty_tpl->tpl_vars['contact']->value['edit_hover'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">
				<i class="fa fa-fw fa-pencil contact-edit-icon-<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
"></i>
				<div class="spinner-wrapper contact-edit-rotator-<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" style="vertical-align: text-bottom; margin-right: 2px"><div class="spinner s"></div></div>
				<?php echo $_smarty_tpl->tpl_vars['contact']->value['edit'];?>

			</button>

		</div>
		<h3><?php if ($_smarty_tpl->tpl_vars['contact']->value['public_forum']) {?><i class="fa fa-comments-o" title="<?php echo $_smarty_tpl->tpl_vars['group_label']->value;?>
"></i>&nbsp;<?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['contact']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['contact']->value['img_hover'];?>
" ><?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
</a><?php if ($_smarty_tpl->tpl_vars['contact']->value['phone']) {?>&nbsp;<a class="btn btn-outline-secondary btn-sm" href="tel:<?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['contact']->value['call'];?>
"><i class="fa fa-phone connphone"></i></a><?php }?></h3>
	</div>
	<div class="section-content-tools-wrapper">
		<div class="contact-photo-wrapper" >
			<a href="<?php echo $_smarty_tpl->tpl_vars['contact']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['contact']->value['img_hover'];?>
" >
				<img class="directory-photo-img <?php if ($_smarty_tpl->tpl_vars['contact']->value['classes']) {
echo $_smarty_tpl->tpl_vars['contact']->value['classes'];
}?>" src="<?php echo $_smarty_tpl->tpl_vars['contact']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
" loading="lazy" />
			</a>
			<?php $_smarty_tpl->_subTemplateRender("file:connstatus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('perminfo'=>$_smarty_tpl->tpl_vars['contact']->value['perminfo']), 0, false);
?>
		</div>
		<div class="contact-info">
						<?php if ($_smarty_tpl->tpl_vars['contact']->value['connected']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['contact']->value['connected_label'];?>
:</span> <span class="autotime" title="<?php echo $_smarty_tpl->tpl_vars['contact']->value['connected'];?>
"></span>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['contact']->value['webbie']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['contact']->value['webbie_label'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['contact']->value['webbie'];?>

			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['contact']->value['network']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['contact']->value['network_label'];?>
:</span> <?php echo $_smarty_tpl->tpl_vars['contact']->value['network'];?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['contact']->value['recentlink'];?>
" rel="nofollow noopener"><?php echo $_smarty_tpl->tpl_vars['contact']->value['recent_label'];?>
</a>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['contact']->value['connect']) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['contact']->value['follow'];?>
" class="btn btn-success btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['contact']->value['connect_hover'];?>
"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['contact']->value['connect'];?>
</a>
			<?php }?>
		</div>

	</div>
</div>

<?php }
}
