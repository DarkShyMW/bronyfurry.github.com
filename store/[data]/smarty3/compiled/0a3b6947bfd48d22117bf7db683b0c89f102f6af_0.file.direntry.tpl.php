<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:35
  from '/sites/git.bronyfurry.com/view/tpl/direntry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b7c58ee9_21893450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a3b6947bfd48d22117bf7db683b0c89f102f6af' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/direntry.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9b7c58ee9_21893450 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="directory-item<?php if ($_smarty_tpl->tpl_vars['entry']->value['safe']) {?> safe<?php }?>" id="directory-item-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" >
	<div class="section-subtitle-wrapper clearfix">
		<div class="float-end">
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['viewrate']) {?>
				<?php if ($_smarty_tpl->tpl_vars['entry']->value['total_ratings']) {?><a href="ratings/<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" id="dir-rating-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" class="btn btn-outline-secondary btn-sm"><?php echo $_smarty_tpl->tpl_vars['entry']->value['total_ratings'];?>
</a><?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['ignlink']) {?>
			<a class="directory-ignore btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['ignlink'];?>
"> <?php echo $_smarty_tpl->tpl_vars['entry']->value['ignore_label'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['censor']) {?>
			<a class="directory-censor btn btn-danger btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['censor'];?>
"> <?php echo $_smarty_tpl->tpl_vars['entry']->value['censor_label'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['connect']) {?>
			<a class="btn btn-success btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['connect'];?>
"><i class="fa fa-plus connect-icon"></i> <?php echo $_smarty_tpl->tpl_vars['entry']->value['conn_label'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['viewrate']) {?>
				<?php if ($_smarty_tpl->tpl_vars['entry']->value['canrate']) {?><button class="btn btn-outline-secondary btn-sm" onclick="doRatings('<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
'); return false;" ><i class="fa fa-pencil"></i><span id="edited-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" class="required" id="edited-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" style="display: none;" >&nbsp;*</span></button><?php }?>
			<?php }?>
		</div>
		<h3><?php if ($_smarty_tpl->tpl_vars['entry']->value['public_forum']) {?><i class="fa fa-comments-o" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['forum_label'];?>
 @<?php echo $_smarty_tpl->tpl_vars['entry']->value['nickname'];?>
+"></i>&nbsp;<?php }?><a href='<?php echo $_smarty_tpl->tpl_vars['entry']->value['profile_link'];?>
' ><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</a><?php if ($_smarty_tpl->tpl_vars['entry']->value['online']) {?>&nbsp;<i class="fa fa-asterisk online-now" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['online'];?>
"></i><?php }?></h3>
	</div>
	<div class="section-content-tools-wrapper directory-collapse">
		<div class="contact-photo-wrapper" id="directory-photo-wrapper-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" >
			<div class="contact-photo" id="directory-photo-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" >
				<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['profile_link'];?>
" class="directory-profile-link" id="directory-profile-link-<?php echo $_smarty_tpl->tpl_vars['entry']->value['hash'];?>
" >
					<img class="directory-photo-img" src="<?php echo $_smarty_tpl->tpl_vars['entry']->value['photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['alttext'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['alttext'];?>
" loading="lazy"/>
				</a>
			</div>
		</div>
		<div class="contact-info">
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['common_friends']) {?>
			<div id="dir-common" class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['common_label'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['common_count'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['pdesc']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['pdesc_label'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['pdesc'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['age']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['age_label'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['age'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['location']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['location_label'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['location'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['hometown']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['hometown_label'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['hometown'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['homepage']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['homepage'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['homepageurl'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['kw']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kw'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['keywords'];?>

			</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['entry']->value['about']) {?>
			<div class="contact-info-element">
				<span class="contact-info-label"><?php echo $_smarty_tpl->tpl_vars['entry']->value['about_label'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['entry']->value['about'];?>

			</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
