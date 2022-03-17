<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:21
  from '/sites/git.bronyfurry.com/view/tpl/profile_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b8411778b1_73668667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e5bc452d7d1fe3a50000ed37cc61e64e5fa50a9' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_edit.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 16,
    'file:field_checkbox.tpl' => 2,
    'file:field_textarea.tpl' => 13,
  ),
),false)) {
function content_6231b8411778b1_73668667 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<div class="dropdown float-end" id="profile-edit-links">
			<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-cog"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['tools_label']->value;?>

			</button>
			<div class="dropdown-menu dropdown-menu-end">
				<a class="dropdown-item" href="profile_photo/<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" id="profile-photo_upload-link" title="<?php echo $_smarty_tpl->tpl_vars['profpic']->value;?>
"><i class="fa fa-fw fa-user"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['profpic']->value;?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>
				<a class="dropdown-item" href="cover_photo" id="cover-photo_upload-link" title="<?php echo $_smarty_tpl->tpl_vars['coverpic']->value;?>
"><i class="fa fa-fw fa-picture-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['coverpic']->value;?>
</a>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['is_default']->value) {?>
				<a class="dropdown-item" href="profperm/<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" id="profile-edit-visibility-link" title="<?php echo $_smarty_tpl->tpl_vars['editvis']->value;?>
"><i class="fa fa-fw fa-pencil"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['editvis']->value;?>
</a>
				<?php }?>
				<a class="dropdown-item" href="thing" id="profile-edit-thing-link" title="<?php echo $_smarty_tpl->tpl_vars['addthing']->value;?>
"><i class="fa fa-fw fa-plus-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['addthing']->value;?>
</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="profile/<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
/view" id="profile-edit-view-link" title="<?php echo $_smarty_tpl->tpl_vars['viewprof']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['viewprof']->value;?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['multi_profiles']->value) {?>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['profile_clone_link']->value;?>
" id="profile-edit-clone-link" title="<?php echo $_smarty_tpl->tpl_vars['cr_prof']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cl_prof']->value;?>
</a>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['exportable']->value) {?>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="profiles/export/<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lbl_export']->value;?>
</a>
				<a class="dropdown-item" href="#" onClick="openClose('profile-upload-form'); return false;"><?php echo $_smarty_tpl->tpl_vars['lbl_import']->value;?>
</a>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['is_default']->value) {?>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['profile_drop_link']->value;?>
" id="profile-edit-drop-link" title="<?php echo $_smarty_tpl->tpl_vars['del_prof']->value;?>
" onclick="return confirmDelete();"><i class="fa fa-trash-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['del_prof']->value;?>
</a>
				<?php }?>
			</div>
		</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['banner']->value;
if ($_smarty_tpl->tpl_vars['multi_profiles']->value) {?>: <?php echo $_smarty_tpl->tpl_vars['profile_name']->value[2];
}?></h2>
		<div class="clear"></div>
	</div>
	<div class="section-content-tools-wrapper" id="profile-upload-form">
		<label id="profile-upload-choose-label" for="profile-upload-choose" ><?php echo $_smarty_tpl->tpl_vars['lbl_import']->value;?>
</label>
		<input id="profile-upload-choose" type="file" name="userfile">
	</div>

		<form id="profile-edit-form" name="form1" action="profiles/<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
" enctype="multipart/form-data" method="post" >
			<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>

			<?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>
			<div class="section-content-info-wrapper"><?php echo $_smarty_tpl->tpl_vars['default']->value;?>
</div>
			<?php }?>

			<div class="panel-group" id="profile-edit-wrapper" role="tablist" aria-multiselectable="true">
				<div class="panel">
					<div class="section-subtitle-wrapper" role="tab" id="personal">
						<h3>
							<a data-bs-toggle="collapse" data-bs-target="#personal-collapse" href="#" aria-expanded="true" aria-controls="personal-collapse">
								<?php echo $_smarty_tpl->tpl_vars['basic']->value;?>

							</a>
						</h3>
					</div>
					<div id="personal-collapse" class="panel-collapse collapse show" data-bs-parent="#profile-edit-wrapper" role="tabpanel" aria-labelledby="personal">
						<div class="section-content-tools-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['multi_profiles']->value) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['profile_name']->value), 0, false);
?>
							<?php } else { ?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['profile_name']->value[0];?>
" value="<?php echo $_smarty_tpl->tpl_vars['profile_name']->value[2];?>
">
							<?php }?>

							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['name']->value), 0, true);
?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['pdesc']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['pdesc']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['gender']) {?>
							<div id="profile-edit-gender-wrapper" class="mb-3 field select" >
							<label id="profile-edit-gender-label" for="gender-select" ><?php echo $_smarty_tpl->tpl_vars['lbl_gender']->value;?>
</label>
							<?php if ($_smarty_tpl->tpl_vars['advanced']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>

							<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['gender_min']->value;?>

							<?php }?>
							</div>
							<div class="clear"></div>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['dob']) {?>
							<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>

							<?php }?>

							<?php echo $_smarty_tpl->tpl_vars['profile_in_dir']->value;?>


							<?php echo $_smarty_tpl->tpl_vars['suggestme']->value;?>


							<?php if ($_smarty_tpl->tpl_vars['show_presence']->value) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['show_presence']->value), 0, false);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['hide_friends']->value) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['hide_friends']->value), 0, true);
?>
							<?php }?>

							<div class="mb-3" >
							<button type="submit" name="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['fields']->value['comms'] && $_smarty_tpl->tpl_vars['vcard']->value) {?>

				<div id="template-form-vcard-tel" class="mb-3 form-vcard-tel">
					<select name="tel_type[]">
						<option value="CELL"><?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
</option>
						<option value="HOME"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</option>
						<option value="WORK"><?php echo $_smarty_tpl->tpl_vars['work']->value;?>
</option>
						<option value="OTHER"><?php echo $_smarty_tpl->tpl_vars['other']->value;?>
</option>
					</select>
					<input type="text" name="tel[]" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['tel_label']->value;?>
">
					<i data-remove="vcard-tel" data-id="" class="fa fa-trash-o remove-field drop-icons fakelink"></i>
				</div>

				<div id="template-form-vcard-email" class="mb-3 form-vcard-email">
					<select name="email_type[]">
						<option value="HOME"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</option>
						<option value="WORK"><?php echo $_smarty_tpl->tpl_vars['work']->value;?>
</option>
						<option value="OTHER"><?php echo $_smarty_tpl->tpl_vars['other']->value;?>
</option>
					</select>
					<input type="text" name="email[]" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['email_label']->value;?>
">
					<i data-remove="vcard-email" data-id="" class="fa fa-trash-o remove-field drop-icons fakelink"></i>
				</div>

				<div id="template-form-vcard-impp" class="mb-3 form-vcard-impp">
					<select name="impp_type[]">
						<option value="HOME"><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</option>
						<option value="WORK"><?php echo $_smarty_tpl->tpl_vars['work']->value;?>
</option>
						<option value="OTHER"><?php echo $_smarty_tpl->tpl_vars['other']->value;?>
</option>
					</select>
					<input type="text" name="impp[]" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['impp_label']->value;?>
">
					<i data-remove="vcard-impp" data-id="" class="fa fa-trash-o remove-field drop-icons fakelink"></i>
				</div>

				<div class="section-content-wrapper-np">
					<div id="vcard-cancel-<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="vcard-cancel vcard-cancel-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" data-action="cancel"><i class="fa fa-close"></i></div>
					<div id="vcard-add-field-<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="dropdown float-end vcard-add-field">
						<button data-bs-toggle="dropdown" type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_field']->value;?>
</button>
						<ul class="dropdown-menu">
							<li class="add-vcard-tel"><a href="#" data-add="vcard-tel" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="add-field" onclick="return false;"><?php echo $_smarty_tpl->tpl_vars['tel_label']->value;?>
</a></li>
							<li class="add-vcard-email"><a href="#" data-add="vcard-email" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="add-field" onclick="return false;"><?php echo $_smarty_tpl->tpl_vars['email_label']->value;?>
</a></li>
							<li class="add-vcard-impp"><a href="#" data-add="vcard-impp" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="add-field" onclick="return false;"><?php echo $_smarty_tpl->tpl_vars['impp_label']->value;?>
</a></li>
						</ul>
					</div>
					<div id="vcard-header-<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="vcard-header" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" data-action="open">
						<i class="vcard-fn-preview fa fa-address-card-o"></i>
						<span id="vcard-preview-<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="vcard-preview">
							<?php if ($_smarty_tpl->tpl_vars['vcard']->value['fn']) {?><span class="vcard-fn-preview"><?php echo $_smarty_tpl->tpl_vars['vcard']->value['fn'];?>
</span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['vcard']->value['emails'][0]['address']) {?><span class="vcard-email-preview hidden-xs"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['vcard']->value['emails'][0]['address'];?>
"><?php echo $_smarty_tpl->tpl_vars['vcard']->value['emails'][0]['address'];?>
</a></span><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['vcard']->value['tels'][0]) {?><span class="vcard-tel-preview hidden-xs"><?php echo $_smarty_tpl->tpl_vars['vcard']->value['tels'][0]['nr'];
if ($_smarty_tpl->tpl_vars['is_mobile']->value) {?> <a class="btn btn-outline-secondary btn-sm" href="tel:<?php echo $_smarty_tpl->tpl_vars['vcard']->value['tels'][0]['nr'];?>
"><i class="fa fa-phone connphone"></i></a><?php }?></span><?php }?>
						</span>
						<input id="vcard-fn-<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="vcard-fn" type="text" name="fn" value="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['fn'];?>
" size="<?php echo mb_strlen($_smarty_tpl->tpl_vars['vcard']->value['fn'], 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['name_label']->value;?>
">
					</div>
				</div>
				<div id="vcard-info-<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="vcard-info section-content-wrapper">

					<div class="vcard-tel mb-3">
						<div class="form-vcard-tel-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['vcard']->value['tels']) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vcard']->value['tels'], 'tel');
$_smarty_tpl->tpl_vars['tel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tel']->value) {
$_smarty_tpl->tpl_vars['tel']->do_else = false;
?>
							<div class="mb-3 form-vcard-tel">
								<select name="tel_type[]">
									<option value=""<?php if ($_smarty_tpl->tpl_vars['tel']->value['type'][0] != 'CELL' && $_smarty_tpl->tpl_vars['tel']->value['type'][0] != 'HOME' && $_smarty_tpl->tpl_vars['tel']->value['type'][0] != 'WORK' && $_smarty_tpl->tpl_vars['tel']->value['type'][0] != 'OTHER') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tel']->value['type'][1];?>
</option>
									<option value="CELL"<?php if ($_smarty_tpl->tpl_vars['tel']->value['type'][0] == 'CELL') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
</option>
									<option value="HOME"<?php if ($_smarty_tpl->tpl_vars['tel']->value['type'][0] == 'HOME') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</option>
									<option value="WORK"<?php if ($_smarty_tpl->tpl_vars['tel']->value['type'][0] == 'WORK') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['work']->value;?>
</option>
									<option value="OTHER"<?php if ($_smarty_tpl->tpl_vars['tel']->value['type'][0] == 'OTHER') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['other']->value;?>
</option>
								</select>
								<input type="text" name="tel[]" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value['nr'];?>
" size="<?php echo mb_strlen($_smarty_tpl->tpl_vars['tel']->value['nr'], 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['tel_label']->value;?>
">
								<i data-remove="vcard-tel" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="fa fa-trash-o remove-field drop-icons fakelink"></i>
							</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</div>
					</div>


					<div class="vcard-email mb-3">
						<div class="form-vcard-email-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['vcard']->value['emails']) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vcard']->value['emails'], 'email');
$_smarty_tpl->tpl_vars['email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->tpl_vars['email']->do_else = false;
?>
							<div class="mb-3 form-vcard-email">
								<select name="email_type[]">
									<option value=""<?php if ($_smarty_tpl->tpl_vars['email']->value['type'][0] != 'HOME' && $_smarty_tpl->tpl_vars['email']->value['type'][0] != 'WORK' && $_smarty_tpl->tpl_vars['email']->value['type'][0] != 'OTHER') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['email']->value['type'][1];?>
</option>
									<option value="HOME"<?php if ($_smarty_tpl->tpl_vars['email']->value['type'][0] == 'HOME') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</option>
									<option value="WORK"<?php if ($_smarty_tpl->tpl_vars['email']->value['type'][0] == 'WORK') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['work']->value;?>
</option>
									<option value="OTHER"<?php if ($_smarty_tpl->tpl_vars['email']->value['type'][0] == 'OTHER') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['other']->value;?>
</option>
								</select>
								<input type="text" name="email[]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value['address'];?>
" size="<?php echo mb_strlen($_smarty_tpl->tpl_vars['email']->value['address'], 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['email_label']->value;?>
">
								<i data-remove="vcard-email" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="fa fa-trash-o remove-field drop-icons fakelink"></i>
							</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</div>
					</div>

					<div class="vcard-impp mb-3">
						<div class="form-vcard-impp-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['vcard']->value['impps']) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vcard']->value['impps'], 'impp');
$_smarty_tpl->tpl_vars['impp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['impp']->value) {
$_smarty_tpl->tpl_vars['impp']->do_else = false;
?>
							<div class="mb-3 form-vcard-impp">
								<select name="impp_type[]">
									<option value=""<?php if ($_smarty_tpl->tpl_vars['impp']->value['type'][0] != 'HOME' && $_smarty_tpl->tpl_vars['impp']->value['type'][0] != 'WORK' && $_smarty_tpl->tpl_vars['impp']->value['type'][0] != 'OTHER') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['impp']->value['type'][1];?>
</option>
									<option value="HOME"<?php if ($_smarty_tpl->tpl_vars['impp']->value['type'][0] == 'HOME') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['home']->value;?>
</option>
									<option value="WORK"<?php if ($_smarty_tpl->tpl_vars['impp']->value['type'][0] == 'WORK') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['work']->value;?>
</option>
									<option value="OTHER"<?php if ($_smarty_tpl->tpl_vars['impp']->value['type'][0] == 'OTHER') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['other']->value;?>
</option>
								</select>
								<input type="text" name="impp[]" value="<?php echo $_smarty_tpl->tpl_vars['impp']->value['address'];?>
" size="<?php echo mb_strlen($_smarty_tpl->tpl_vars['impp']->value['address'], 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['impp_label']->value;?>
">
								<i data-remove="vcard-impp" data-id="<?php echo $_smarty_tpl->tpl_vars['vcard']->value['id'];?>
" class="fa fa-trash-o remove-field drop-icons fakelink"></i>
							</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</div>
					</div>

					<div class="settings-submit-wrapper" >
						<button type="submit" name="done" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
					</div>
				</div>
				<?php }?>


				<?php if ($_smarty_tpl->tpl_vars['fields']->value['address'] || $_smarty_tpl->tpl_vars['fields']->value['locality'] || $_smarty_tpl->tpl_vars['fields']->value['postal_code'] || $_smarty_tpl->tpl_vars['fields']->value['region'] || $_smarty_tpl->tpl_vars['fields']->value['country_name'] || $_smarty_tpl->tpl_vars['fields']->value['hometown']) {?>
				<div class="panel">
					<div class="section-subtitle-wrapper" role="tab" id="location">
						<h3>
							<a data-bs-toggle="collapse" data-bs-target="#location-collapse" href="#" aria-expanded="true" aria-controls="location-collapse">
								<?php echo $_smarty_tpl->tpl_vars['location']->value;?>

							</a>
						</h3>
					</div>
					<div id="location-collapse" class="panel-collapse collapse" data-bs-parent="#profile-edit-wrapper" role="tabpanel" aria-labelledby="location">
						<div class="section-content-tools-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['fields']->value['address']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['address']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['locality']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['locality']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['postal_code']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['postal_code']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['region']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['region']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['country_name']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['country_name']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['hometown']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['hometown']->value), 0, true);
?>
							<?php }?>

							<div class="mb-3" >
							<button type="submit" name="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>

				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['fields']->value['marital'] || $_smarty_tpl->tpl_vars['fields']->value['sexual']) {?>
				<div class="panel">
					<div class="section-subtitle-wrapper" role="tab" id="relation">
						<h3>
							<a data-bs-toggle="collapse" data-bs-target="#relation-collapse" href="#" aria-expanded="true" aria-controls="relation-collapse">
								<?php echo $_smarty_tpl->tpl_vars['relation']->value;?>

							</a>
						</h3>
					</div>
					<div id="relation-collapse" class="panel-collapse collapse" data-bs-parent="#profile-edit-wrapper" role="tabpanel" aria-labelledby="relation">
						<div class="section-content-tools-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['fields']->value['marital']) {?>
							<div id="profile-edit-marital-wrapper" class="mb-3 field" >
							<label id="profile-edit-marital-label" for="profile-edit-marital" ><span class="heart"><i class="fa fa-heart"></i>&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['lbl_marital']->value;?>
</label>
							<?php if ($_smarty_tpl->tpl_vars['advanced']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['marital']->value;?>

							<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['marital_min']->value;?>

							<?php }?>
							</div>
							<div class="clear"></div>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['partner']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['with']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['howlong']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['howlong']->value), 0, true);
?>
							<?php }?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['sexual']) {?>
							<div id="profile-edit-sexual-wrapper" class="mb-3 field" >
							<label id="profile-edit-sexual-label" for="sexual-select" ><?php echo $_smarty_tpl->tpl_vars['lbl_sexual']->value;?>
</label>
							<?php if ($_smarty_tpl->tpl_vars['advanced']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['sexual']->value;?>

							<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['sexual_min']->value;?>

							<?php }?>
							</div>
							<div class="clear"></div>
							<?php }?>

							<div class="mb-3" >
							<button type="submit" name="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['fields']->value['keywords'] || $_smarty_tpl->tpl_vars['fields']->value['politic'] || $_smarty_tpl->tpl_vars['fields']->value['religion'] || $_smarty_tpl->tpl_vars['fields']->value['about'] || $_smarty_tpl->tpl_vars['fields']->value['contact'] || $_smarty_tpl->tpl_vars['fields']->value['homepage'] || $_smarty_tpl->tpl_vars['fields']->value['interest'] || $_smarty_tpl->tpl_vars['fields']->value['likes'] || $_smarty_tpl->tpl_vars['fields']->value['dislikes'] || $_smarty_tpl->tpl_vars['fields']->value['channels'] || $_smarty_tpl->tpl_vars['fields']->value['music'] || $_smarty_tpl->tpl_vars['fields']->value['book'] || $_smarty_tpl->tpl_vars['fields']->value['tv'] || $_smarty_tpl->tpl_vars['fields']->value['film'] || $_smarty_tpl->tpl_vars['fields']->value['romance'] || $_smarty_tpl->tpl_vars['fields']->value['employment'] || $_smarty_tpl->tpl_vars['fields']->value['education'] || $_smarty_tpl->tpl_vars['extra_fields']->value) {?>
				<div class="panel">
					<div class="section-subtitle-wrapper" role="tab" id="miscellaneous">
						<h3>
							<a data-bs-toggle="collapse" data-bs-target="#miscellaneous-collapse" href="#" aria-expanded="true" aria-controls="miscellaneous-collapse">
								<?php echo $_smarty_tpl->tpl_vars['miscellaneous']->value;?>

							</a>
						</h3>
					</div>
					<div id="miscellaneous-collapse" class="panel-collapse collapse" data-bs-parent="#profile-edit-wrapper" role="tabpanel" aria-labelledby="miscellaneous">
						<div class="section-content-tools-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['fields']->value['homepage']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['homepage']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['keywords']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['keywords']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['politic']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['politic']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['religion']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['religion']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['about']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['about']->value), 0, false);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['contact']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['contact']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['interest']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['interest']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['likes']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['likes']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['dislikes']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['dislikes']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['channels']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['channels']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['music']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['music']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['book']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['book']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['tv']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['tv']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['film']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['film']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['romance']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['romance']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['employment']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['employ']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['fields']->value['education']) {?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_textarea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['education']->value), 0, true);
?>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['extra_fields']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
							<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, true);
?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
							<div class="mb-3" >
							<button type="submit" name="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</form>
</div>

<?php }
}
