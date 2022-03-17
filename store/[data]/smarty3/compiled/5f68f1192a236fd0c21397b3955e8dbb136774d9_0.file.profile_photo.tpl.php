<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:16:33
  from '/sites/git.bronyfurry.com/view/tpl/profile_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b90148e2a7_32901945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f68f1192a236fd0c21397b3955e8dbb136774d9' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_photo.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b90148e2a7_32901945 (Smarty_Internal_Template $_smarty_tpl) {
?><input id="invisible-photos-file-upload" type="file" name="files" style="visibility:hidden;position:absolute;top:-50px;left:-50px;width:0;height:0;">

<div id="profile-photo-content" class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</h2>
	</div>
	<div class="section-content-wrapper">

		<form enctype="multipart/form-data" id="profile-photo-form" action="profile_photo" method="post">
			<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>

			<div id="profile-photo-upload-wrapper">
				<?php if ($_smarty_tpl->tpl_vars['info']->value) {?>
					<div class="section-content-warning-wrapper"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['importfile']->value) {?>
					<input type="hidden" name="importfile" value="<?php echo $_smarty_tpl->tpl_vars['importfile']->value;?>
">
				<?php }?>
				<div class="clear mb-3"></div>

				<input type="hidden" name="profile" value="<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
"/>

				<div id="profile-photo-upload-spinner" class="spinner-wrapper">
					<div class="spinner m"></div>
				</div>
				<div id="profile-photo-submit-wrapper">
					<button type="submit" class="btn btn-primary float-end" name="submit" id="profile-photo-submit">
						<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>

					</button>
					<button id="embed-photo-wrapper" type="button"
							class="btn btn-default btn-outline-success float-end me-1" title="<?php echo $_smarty_tpl->tpl_vars['embedPhotos']->value;?>
"
							onclick="initializeEmbedPhotoDialog();">
						<i id="embed-photo" class="fa fa-file-image-o"></i> <?php echo $_smarty_tpl->tpl_vars['select']->value;?>

					</button>
					<button type="submit" class="btn btn-outline-danger" name="remove" id="profile-photo-remove">
						<?php echo $_smarty_tpl->tpl_vars['remove']->value;?>

					</button>
				</div>
			</div>

		</form>
	</div>
</div>

<div class="modal" id="embedPhotoModal" tabindex="-1" role="dialog" aria-labelledby="embedPhotoLabel"
	 aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="embedPhotoModalLabel"><?php echo $_smarty_tpl->tpl_vars['embedPhotosModalTitle']->value;?>
</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body" id="embedPhotoModalBody">
				<div id="embedPhotoModalBodyAlbumListDialog" class="d-none">
					<div id="embedPhotoModalBodyAlbumList"></div>
				</div>
				<div id="embedPhotoModalBodyAlbumDialog" class="d-none"></div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php echo '<script'; ?>
 src="vendor/blueimp/jquery-file-upload/js/vendor/jquery.ui.widget.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/blueimp/jquery-file-upload/js/jquery.iframe-transport.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/blueimp/jquery-file-upload/js/jquery.fileupload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var initializeEmbedPhotoDialog = function () {
		$('.embed-photo-selected-photo').each(function (index) {
			$(this).removeClass('embed-photo-selected-photo');
		});
		getPhotoAlbumList();
		$('#embedPhotoModalBodyAlbumDialog').off('click');
		$('#embedPhotoModal').modal('show');
	};

	var choosePhotoFromAlbum = function (album) {
		$.post("embedphotos/album", {name: album},
			function (data) {
				if (data['status']) {
					$('#embedPhotoModalLabel').html("<?php echo $_smarty_tpl->tpl_vars['modalchooseimages']->value;?>
");
					$('#embedPhotoModalBodyAlbumDialog').html('\
							<div><div class="nav nav-pills flex-column">\n\
								<li class="nav-item"><a class="nav-link" href="#" onclick="initializeEmbedPhotoDialog();return false;">\n\
									<i class="fa fa-chevron-left"></i>&nbsp\n\
									<?php echo $_smarty_tpl->tpl_vars['modaldiffalbum']->value;?>
\n\
									</a>\n\
								</li>\n\
							</div><br></div>')
					$('#embedPhotoModalBodyAlbumDialog').append(data['content']);
					$('#embedPhotoModalBodyAlbumDialog').click(function (evt) {
						evt.preventDefault();
						var image = document.getElementById(evt.target.id);
						if (typeof ($(image).parent()[0]) !== 'undefined') {
							var imageparent = document.getElementById($(image).parent()[0].id);
							$(imageparent).toggleClass('embed-photo-selected-photo');
							var href = $(imageparent).attr('href');
							$.post("embedphotos/photolink", {href: href},
								function (ddata) {
									if (ddata['status']) {
										window.location.href = 'profile_photo/use/' + ddata['resource_id'] + '?f=&profile=<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
';
									} else {
										window.console.log("<?php echo $_smarty_tpl->tpl_vars['modalerrorlink']->value;?>
" + ':' + ddata['errormsg']);
									}
									return false;
								},
								'json');
							$('#embedPhotoModalBodyAlbumDialog').html('');
							$('#embedPhotoModalBodyAlbumDialog').off('click');
							$('#embedPhotoModal').modal('hide');
						}
					});

					$('#embedPhotoModalBodyAlbumListDialog').addClass('d-none');
					$('#embedPhotoModalBodyAlbumDialog').removeClass('d-none');
				} else {
					window.console.log("<?php echo $_smarty_tpl->tpl_vars['modalerroralbum']->value;?>
 " + JSON.stringify(album) + ':' + data['errormsg']);
				}
				return false;
			},
			'json');
	};

	var getPhotoAlbumList = function () {
		$.post("embedphotos/albumlist", {},
			function (data) {
				if (data['status']) {
					var albums = data['albumlist']; //JSON.parse(data['albumlist']);
					$('#embedPhotoModalLabel').html("<?php echo $_smarty_tpl->tpl_vars['modalchoosealbum']->value;?>
");
					$('#embedPhotoModalBodyAlbumList').html('<ul class="nav nav-pills flex-column"></ul>');
					for (var i = 0; i < albums.length; i++) {
						var albumName = albums[i].text;
						var jsAlbumName = albums[i].jstext;
						var albumLink = '<li class="nav-item">';
						albumLink += '<a class="nav-link" href="#" onclick="choosePhotoFromAlbum(\'' + jsAlbumName + '\'); return false;">' + albumName + '</a>';
						albumLink += '</li>';
						$('#embedPhotoModalBodyAlbumList').find('ul').append(albumLink);
					}
					$('#embedPhotoModalBodyAlbumDialog').addClass('d-none');
					$('#embedPhotoModalBodyAlbumListDialog').removeClass('d-none');
				} else {
					window.console.log("<?php echo $_smarty_tpl->tpl_vars['modalerrorlist']->value;?>
" + ':' + data['errormsg']);
				}
				return false;
			},
			'json');
	};


	$('#invisible-photos-file-upload').fileupload({
		url: 'profile_photo',
		dataType: 'json',
		// dropZone: filedrag,
		maxChunkSize: 2 * 1024 * 1024,

		add: function (e, data) {
			data.formData = $('#profile-photo-form').serializeArray();
			data.submit();
			$('#profile-photo-upload-spinner').show();
		},

		done: function (e, data) {
			$('#profile-photo-upload-spinner').hide();
			window.location.href = 'profile_photo/use/' + data.result.message + '?profile=<?php echo $_smarty_tpl->tpl_vars['profile_id']->value;?>
';
		}

	});

	$('#profile-photo-submit').click(function (event) {
		event.preventDefault();
		$('#invisible-photos-file-upload').trigger('click');
		return false;
	});
<?php echo '</script'; ?>
>
<?php }
}
