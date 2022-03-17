<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/jot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b25931c4_85799235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db01f4ef9042426dbbecc8c1b409b759a8489c49' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/jot.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_checkbox.tpl' => 1,
  ),
),false)) {
function content_6231b9b25931c4_85799235 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="invisible-wall-file-upload" type="file" name="files" style="visibility:hidden;position:absolute;top:-50;left:-50;width:0;height:0;" multiple>
<input id="invisible-comment-upload" type="file" name="files" style="visibility:hidden;position:absolute;top:-50;left:-50;width:0;height:0;" multiple>
<form id="profile-jot-form" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" class="acl-form" data-form_id="profile-jot-form" data-allow_cid='<?php echo $_smarty_tpl->tpl_vars['allow_cid']->value;?>
' data-allow_gid='<?php echo $_smarty_tpl->tpl_vars['allow_gid']->value;?>
' data-deny_cid='<?php echo $_smarty_tpl->tpl_vars['deny_cid']->value;?>
' data-deny_gid='<?php echo $_smarty_tpl->tpl_vars['deny_gid']->value;?>
' data-bang='<?php echo $_smarty_tpl->tpl_vars['bang']->value;?>
'>
	<?php echo $_smarty_tpl->tpl_vars['mimeselect']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['layoutselect']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['id_select']->value) {?>
	<div class="channel-id-select-div">
		<span class="channel-id-select-desc"><?php echo $_smarty_tpl->tpl_vars['id_seltext']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['id_select']->value;?>

	</div>
	<?php }?>
	<div class="mb-4" id="profile-jot-wrapper">

		<?php if ($_smarty_tpl->tpl_vars['parent']->value) {?>
		<input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" />
		<?php }?>
		<input type="hidden" name="obj_type" value="<?php echo $_smarty_tpl->tpl_vars['ptyp']->value;?>
" />
		<input type="hidden" name="profile_uid" value="<?php echo $_smarty_tpl->tpl_vars['profile_uid']->value;?>
" />
		<input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
" />
		<input type="hidden" name="location" id="jot-location" value="<?php echo $_smarty_tpl->tpl_vars['defloc']->value;?>
" />
		<input type="hidden" name="expire" id="jot-expire" value="<?php echo $_smarty_tpl->tpl_vars['defexpire']->value;?>
" />
		<input type="hidden" name="created" id="jot-created" value="<?php echo $_smarty_tpl->tpl_vars['defpublish']->value;?>
" />
		<input type="hidden" name="media_str" id="jot-media" value="" />
		<input type="hidden" name="source" id="jot-source" value="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
" />
		<input type="hidden" name="coord" id="jot-coord" value="" />
		<input type="hidden" id="jot-postid" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
" />
		<input type="hidden" id="jot-webpage" name="webpage" value="<?php echo $_smarty_tpl->tpl_vars['webpage']->value;?>
" />
		<input type="hidden" name="preview" id="jot-preview" value="0" />
		<input type="hidden" id="jot-consensus" name="consensus" value="<?php if ($_smarty_tpl->tpl_vars['consensus']->value) {
echo $_smarty_tpl->tpl_vars['consensus']->value;
} else { ?>0<?php }?>" />
		<input type="hidden" id="jot-nocomment" name="nocomment" value="<?php if ($_smarty_tpl->tpl_vars['nocomment']->value) {
echo $_smarty_tpl->tpl_vars['nocomment']->value;
} else { ?>0<?php }?>" />

		<?php if ($_smarty_tpl->tpl_vars['webpage']->value) {?>
		<div id="jot-pagetitle-wrap" class="jothidden">
			<input class="w-100 border-0" name="pagetitle" id="jot-pagetitle" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholdpagetitle']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
">
		</div>
		<?php }?>
		<div id="jot-title-wrap" class="jothidden">
			<input class="w-100 border-0" name="title" id="jot-title" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholdertitle']->value;?>
" tabindex="1" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
		</div>
		<div id="jot-summary-wrap" class="jothidden">
			<input class="w-100 border-0" name="summary" id="jot-summary" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholdersummary']->value;?>
" tabindex="2" value="<?php echo $_smarty_tpl->tpl_vars['summary']->value;?>
">
		</div>
		<?php if ($_smarty_tpl->tpl_vars['catsenabled']->value) {?>
		<div id="jot-category-wrap" class="jothidden">
			<input class="w-100 border-0" name="category" id="jot-category" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholdercategory']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" data-role="cat-tagsinput">
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['customjotheaders']->value) {?>
		<div id="jot-customjotheaders-wrap" class="jothidden">
			<?php echo $_smarty_tpl->tpl_vars['customjotheaders']->value;?>

		</div>
		<?php }?>
		<div id="jot-text-wrap">
			<div id="profile-jot-tools" class="btn-group d-none">
				<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
				<a id="profile-jot-settings" class="btn btn-outline-secondary btn-sm border-0" href="/settings/editor/?f=&rpath=/<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
" tabindex="4"><i class="fa fa-cog"></i></a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['reset']->value) {?>
				<button type="button" id="profile-jot-reset" class="btn btn-outline-secondary btn-sm border-0" title="<?php echo $_smarty_tpl->tpl_vars['reset']->value;?>
" tabindex="-1" onclick="itemCancel(); return false;">
					<i class="fa fa-close"></i>
				</button>
				<?php }?>
			</div>
			<textarea class="profile-jot-text" id="profile-jot-text" name="body" tabindex="2" placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholdtext']->value;?>
" tabindex="3"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['attachment']->value) {?>
		<div id="jot-attachment-wrap">
			<input class="jot-attachment" name="attachment" id="jot-attachment" type="text" value="<?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>
" readonly="readonly" onclick="this.select();">
		</div>
		<?php }?>
		<div id="jot-poll-wrap" class="p-2 d-none">
			<div id="jot-poll-options">
				<div class="jot-poll-option mb-3">
					<input class="w-100 border-0" name="poll_answers[]" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['poll_option_label']->value;?>
">
				</div>
				<div class="jot-poll-option mb-3">
					<input class="w-100 border-0" name="poll_answers[]" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['poll_option_label']->value;?>
">
				</div>
			</div>
			<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['multiple_answers']->value), 0, false);
?>
			<div id="jot-poll-tools" class="clearfix">
				<div id="poll-tools-left" class="float-start">
					<button id="jot-add-option" class="btn btn-outline-secondary btn-sm" type="button">
						<i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['poll_add_option_label']->value;?>

					</button>
				</div>
				<div id="poll-tools-right" class="float-end">
					<div class="input-group">
						<input type="text" name="poll_expire_value" class="form-control" value="10" size="3">
						<select class="form-control" id="duration-select" name="poll_expire_unit">
							<option value="Minutes"><?php echo $_smarty_tpl->tpl_vars['poll_expire_unit_label']->value[0];?>
</option>
							<option value="Hours"><?php echo $_smarty_tpl->tpl_vars['poll_expire_unit_label']->value[1];?>
</option>
							<option value="Days" selected="selected"><?php echo $_smarty_tpl->tpl_vars['poll_expire_unit_label']->value[2];?>
</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div id="profile-jot-submit-wrapper" class="clearfix p-2 jothidden">
			<div id="profile-jot-submit-left" class="btn-toolbar float-start">
				<?php if ($_smarty_tpl->tpl_vars['bbcode']->value) {?>
				<div class="btn-group me-2">
					<button type="button" id="main-editor-bold" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['bold']->value;?>
" onclick="inserteditortag('b', 'profile-jot-text'); return false;">
						<i class="fa fa-bold jot-icons"></i>
					</button>
					<button type="button" id="main-editor-italic" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['italic']->value;?>
" onclick="inserteditortag('i', 'profile-jot-text'); return false;">
						<i class="fa fa-italic jot-icons"></i>
					</button>
					<button type="button" id="main-editor-underline" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['underline']->value;?>
" onclick="inserteditortag('u', 'profile-jot-text'); return false;">
						<i class="fa fa-underline jot-icons"></i>
					</button>
					<button type="button" id="main-editor-quote" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['quote']->value;?>
" onclick="inserteditortag('quote', 'profile-jot-text'); return false;">
						<i class="fa fa-quote-left jot-icons"></i>
					</button>
					<button type="button" id="main-editor-code" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" onclick="inserteditortag('code', 'profile-jot-text'); return false;">
						<i class="fa fa-terminal jot-icons"></i>
					</button>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['visitor']->value) {?>
				<div class="btn-group me-2 d-none d-lg-flex">
					<?php if ($_smarty_tpl->tpl_vars['writefiles']->value) {?>
					<button type="button" id="wall-file-upload" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['attach']->value;?>
" >
						<i id="wall-file-upload-icon" class="fa fa-paperclip jot-icons"></i>
					</button>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['weblink']->value) {?>
					<button type="button" id="profile-link-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['weblink']->value;?>
" ondragenter="linkdropper(event);" ondragover="linkdropper(event);" ondrop="linkdrop(event);"  onclick="jotGetLink(); return false;">
						<i id="profile-link" class="fa fa-link jot-icons"></i>
					</button>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['embedPhotos']->value) {?>
					<button type="button" id="embed-photo-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['embedPhotos']->value;?>
" onclick="initializeEmbedPhotoDialog();return false;">
						<i id="embed-photo" class="fa fa-file-image-o jot-icons"></i>
					</button>
					<?php }?>
				</div>
				<div class="btn-group me-2 d-none d-lg-flex">
					<?php if ($_smarty_tpl->tpl_vars['setloc']->value) {?>
					<button type="button" id="profile-location-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['setloc']->value;?>
" onclick="jotGetLocation();return false;">
						<i id="profile-location" class="fa fa-globe jot-icons"></i>
					</button>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['clearloc']->value) {?>
					<button type="button" id="profile-nolocation-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['clearloc']->value;?>
" onclick="jotClearLocation();return false;" disabled="disabled">
						<i id="profile-nolocation" class="fa fa-circle-o jot-icons"></i>
					</button>
					<?php }?>
				<?php } else { ?>
				<div class="btn-group d-none d-lg-flex">
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['feature_expire']->value) {?>
					<button type="button" id="profile-expire-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['expires']->value;?>
" onclick="jotGetExpiry();return false;">
						<i id="profile-expires" class="fa fa-eraser jot-icons"></i>
					</button>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['feature_future']->value) {?>
					<button type="button" id="profile-future-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['future_txt']->value;?>
" onclick="jotGetPubDate();return false;">
						<i id="profile-future" class="fa fa-clock-o jot-icons"></i>
					</button>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['feature_encrypt']->value) {?>
					<button type="button" id="profile-encrypt-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['encrypt']->value;?>
" onclick="hz_encrypt('<?php echo $_smarty_tpl->tpl_vars['cipher']->value;?>
','#profile-jot-text');return false;">
						<i id="profile-encrypt" class="fa fa-key jot-icons"></i>
					</button>
				<?php }?>
					<button type="button" id="profile-poll-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['poll']->value;?>
" onclick="initPoll();">
						<i id="profile-poll" class="fa fa-bar-chart jot-icons"></i>
					</button>
				<?php if ($_smarty_tpl->tpl_vars['feature_nocomment']->value) {?>
					<button type="button" id="profile-nocomment-wrapper" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['nocommenttitle']->value;?>
" onclick="toggleNoComment();return false;">
						<i id="profile-nocomment" class="fa fa-comments jot-icons"></i>
					</button>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['custommoretoolsbuttons']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['custommoretoolsbuttons']->value;?>

				<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['writefiles']->value || $_smarty_tpl->tpl_vars['weblink']->value || $_smarty_tpl->tpl_vars['setloc']->value || $_smarty_tpl->tpl_vars['clearloc']->value || $_smarty_tpl->tpl_vars['feature_expire']->value || $_smarty_tpl->tpl_vars['feature_encrypt']->value || $_smarty_tpl->tpl_vars['custommoretoolsdropdown']->value) {?>
				<div class="btn-group d-lg-none">
					<button type="button" id="more-tools" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<i id="more-tools-icon" class="fa fa-cog jot-icons"></i>
					</button>
					<div class="dropdown-menu">
						<?php if ($_smarty_tpl->tpl_vars['visitor']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['writefiles']->value) {?>
						<a class="dropdown-item" id="wall-file-upload-sub" href="#" ><i class="fa fa-paperclip"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['attach']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['weblink']->value) {?>
						<a class="dropdown-item" href="#" onclick="jotGetLink(); return false;"><i class="fa fa-link"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['weblink']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['embedPhotos']->value) {?>
						<a class="dropdown-item" href="#" onclick="initializeEmbedPhotoDialog(); return false;"><i class="fa fa-file-image-o jot-icons"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['embedPhotos']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['setloc']->value) {?>
						<a class="dropdown-item" href="#" onclick="jotGetLocation(); return false;"><i class="fa fa-globe"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['setloc']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['clearloc']->value) {?>
						<a class="dropdown-item" href="#" onclick="jotClearLocation(); return false;"><i class="fa fa-circle-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['clearloc']->value;?>
</a>
						<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['feature_expire']->value) {?>
						<a class="dropdown-item" href="#" onclick="jotGetExpiry(); return false;"><i class="fa fa-eraser"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['expires']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['feature_future']->value) {?>
						<a class="dropdown-item" href="#" onclick="jotGetPubDate();return false;"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['future_txt']->value;?>
</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['feature_encrypt']->value) {?>
						<a class="dropdown-item" href="#" onclick="hz_encrypt('<?php echo $_smarty_tpl->tpl_vars['cipher']->value;?>
','#profile-jot-text');return false;"><i class="fa fa-key"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['encrypt']->value;?>
</a>
						<?php }?>
						<a class="dropdown-item" href="#" onclick="initPoll(); return false"><i id="profile-poll" class="fa fa-bar-chart jot-icons"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['poll']->value;?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['feature_nocomment']->value) {?>
						<a class="dropdown-item" href="#" onclick="toggleNoComment(); return false;"><i id="profile-nocomment-sub" class="fa fa-comments"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['nocommenttitlesub']->value;?>
</a>
						<?php }?>
						<hr />
						<?php echo $_smarty_tpl->tpl_vars['custommoretoolsdropdown']->value;?>

					</div>
				</div>
				<?php }?>
				<div class="btn-group">
					<div id="profile-rotator" class="mt-2 spinner-wrapper">
						<div class="spinner s"></div>
					</div>
				</div>
			</div>
			<div id="profile-jot-submit-right" class="btn-group float-end">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customsubmitright']->value, 'csr');
$_smarty_tpl->tpl_vars['csr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['csr']->value) {
$_smarty_tpl->tpl_vars['csr']->do_else = false;
?>
				<button type="button" class="btn btn-outline-secondary btn-sm" <?php echo $_smarty_tpl->tpl_vars['csr']->value['buttonparams'];?>
 title="<?php echo $_smarty_tpl->tpl_vars['csr']->value['preview'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['csr']->value['buttoncontent'];?>

				</button>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
				<button type="button" class="btn btn-outline-secondary btn-sm" onclick="preview_post();return false;" title="<?php echo $_smarty_tpl->tpl_vars['preview']->value;?>
">
					<i class="fa fa-eye jot-icons" ></i>
				</button>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['jotnets']->value) {?>
				<button type="button" id="dbtn-jotnets" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#jotnetsModal" type="button" title="<?php echo $_smarty_tpl->tpl_vars['jotnets_label']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['lockstate']->value == 'lock') {?>display: none;<?php }?>">
					<i class="fa fa-share-alt jot-icons"></i>
				</button>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['showacl']->value) {?>
				<button type="button" id="dbtn-acl" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#aclModal" title="<?php echo $_smarty_tpl->tpl_vars['permset']->value;?>
" type="button" data-form_id="profile-jot-form">
					<i id="jot-perms-icon" class="fa fa-<?php echo $_smarty_tpl->tpl_vars['lockstate']->value;?>
 jot-icons<?php if ($_smarty_tpl->tpl_vars['bang']->value) {?> jot-lock-warn<?php }?>"></i>
				</button>
				<?php }?>
				<button id="dbtn-submit" class="btn btn-primary btn-sm" type="submit" tabindex="3" name="button-submit"><?php echo $_smarty_tpl->tpl_vars['share']->value;?>
</button>
			</div>
			<div class="clear"></div>
			<?php if ($_smarty_tpl->tpl_vars['jotplugins']->value) {?>
			<div id="profile-jot-plugin-wrapper" class="mt-2">
				<?php echo $_smarty_tpl->tpl_vars['jotplugins']->value;?>

			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['jotnets']->value) {?>
			<div class="modal" id="jotnetsModal" tabindex="-1" role="dialog" aria-labelledby="jotnetsModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="expiryModalLabel"><?php echo $_smarty_tpl->tpl_vars['jotnets_label']->value;?>
</h3>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<?php echo $_smarty_tpl->tpl_vars['jotnets']->value;?>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<?php }?>
		</div>
	</div>
</form>

<div id="jot-preview-content" style="display:none;"></div>

<?php echo $_smarty_tpl->tpl_vars['acl']->value;?>


<?php if ($_smarty_tpl->tpl_vars['feature_expire']->value) {?>
<!-- Modal for item expiry-->
<div class="modal" id="expiryModal" tabindex="-1" role="dialog" aria-labelledby="expiryModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="expiryModalLabel"><?php echo $_smarty_tpl->tpl_vars['expires']->value;?>
</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body mb-3" style="width:90%">
				<div class="date">
					<input type="text" placeholder="yyyy-mm-dd HH:MM" name="start_text" id="expiration-date" class="form-control" />
				</div>
				<?php echo '<script'; ?>
>
					$(function () {
						var picker = $('#expiration-date').datetimepicker({format:'Y-m-d H:i', minDate: 0 });
					});
				<?php echo '</script'; ?>
>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['expiryModalCANCEL']->value;?>
</button>
				<button id="expiry-modal-OKButton" type="button" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['expiryModalOK']->value;?>
</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['feature_future']->value) {?>
<div class="modal" id="createdModal" tabindex="-1" role="dialog" aria-labelledby="createdModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="createdModalLabel"><?php echo $_smarty_tpl->tpl_vars['future_txt']->value;?>
</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body mb-3" style="width:90%">
				<div class="date">
					<input type="text" placeholder="yyyy-mm-dd HH:MM" name="created_text" id="created-date" class="form-control" />
				</div>
				<?php echo '<script'; ?>
>
					$(function () {
						var picker = $('#created-date').datetimepicker({format:'Y-m-d H:i', minDate: 0 });
					});
				<?php echo '</script'; ?>
>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['expiryModalCANCEL']->value;?>
</button>
				<button id="created-modal-OKButton" type="button" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['expiryModalOK']->value;?>
</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['embedPhotos']->value) {?>
<div class="modal" id="embedPhotoModal" tabindex="-1" role="dialog" aria-labelledby="embedPhotoLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="embedPhotoModalLabel"><?php echo $_smarty_tpl->tpl_vars['embedPhotosModalTitle']->value;?>
</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body" id="embedPhotoModalBody" >
				<div id="embedPhotoModalBodyAlbumListDialog" class="d-none">
					<div id="embedPhotoModalBodyAlbumList"></div>
				</div>
				<div id="embedPhotoModalBodyAlbumDialog" class="d-none"></div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value || $_smarty_tpl->tpl_vars['attachment']->value || $_smarty_tpl->tpl_vars['expanded']->value) {
echo '<script'; ?>
>initEditor();<?php echo '</script'; ?>
>
<?php }
}
}
