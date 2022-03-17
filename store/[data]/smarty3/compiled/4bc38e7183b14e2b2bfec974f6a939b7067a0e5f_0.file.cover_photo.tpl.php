<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:15
  from '/sites/git.bronyfurry.com/view/tpl/cover_photo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9a39eb7e1_28736217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bc38e7183b14e2b2bfec974f6a939b7067a0e5f' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cover_photo.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9a39eb7e1_28736217 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
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
            function(data) {
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
                        if (typeof($(image).parent()[0]) !== 'undefined') {
                            var imageparent = document.getElementById($(image).parent()[0].id);
                            $(imageparent).toggleClass('embed-photo-selected-photo');
							var href = $(imageparent).attr('href');
                            $.post("embedphotos/photolink", {href: href},
                                function(ddata) {
                                    if (ddata['status']) {
                                        window.location.href = 'cover_photo/use/' + ddata['resource_id'];
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
            function(data) {
                if (data['status']) {
                    var albums = data['albumlist']; //JSON.parse(data['albumlist']);
                    $('#embedPhotoModalLabel').html("<?php echo $_smarty_tpl->tpl_vars['modalchoosealbum']->value;?>
");
                    $('#embedPhotoModalBodyAlbumList').html('<ul class="nav nav-pills flex-column"></ul>');
                    for(var i=0; i<albums.length; i++) {
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
<?php echo '</script'; ?>
>

<div id="profile-photo-content" class="generic-content-wrapper">
    <div class="section-title-wrapper">
    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    </div>
    <div class="section-content-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['info']->value) {?>
		<div class="section-content-warning-wrapper"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['existing']->value) {?>
		<img class="cover-photo-review" style="max-width: 100%;" src="<?php echo $_smarty_tpl->tpl_vars['existing']->value['url'];?>
" alt="<?php echo t('Cover Photo');?>
" />
		<?php }?>
		<form enctype="multipart/form-data" action="cover_photo" method="post">
		<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>
		<div id="profile-photo-upload-wrapper">

			<label id="profile-photo-upload-label" class="form-label" for="profile-photo-upload"><?php echo $_smarty_tpl->tpl_vars['lbl_upfile']->value;?>
</label>
			<input name="userfile" class="form-input" type="file" id="profile-photo-upload" size="48" />
			<div class="clear"></div>
			<br />
			<br />
			<div id="profile-photo-submit-wrapper">
			    <button type="submit" class="btn btn-outline-primary" name="submit" id="profile-photo-submit"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
			    <button type="submit" class="btn btn-outline-danger" name="remove" id="profile-photo-remove"><?php echo $_smarty_tpl->tpl_vars['remove']->value;?>
</button>
			</div>
		</div>

		</form>
		<br />
		<div id="profile-photo-link-select-wrapper">
		<button id="embed-photo-wrapper" class="btn btn-default btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['embedPhotos']->value;?>
" onclick="initializeEmbedPhotoDialog();return false;">
		<i id="embed-photo" class="fa fa-file-image-o"></i> <?php echo $_smarty_tpl->tpl_vars['select']->value;?>

		</button>
		</div>
	</div>
</div>
<div class="modal" id="embedPhotoModal" tabindex="-1" role="dialog" aria-labelledby="embedPhotoLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="embedPhotoModalLabel"><?php echo $_smarty_tpl->tpl_vars['embedPhotosModalTitle']->value;?>
</h4>
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
<?php }
}
