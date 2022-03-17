<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:23
  from '/sites/git.bronyfurry.com/view/tpl/cropcover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9ab0a2285_85042941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b485d7b85ffee1a8b7844dc40fb94b7cb0e4dc' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cropcover.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9ab0a2285_85042941 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<p id="cropimage-desc">
<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

</p>
<div id="cropimage-wrapper">
<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" id="croppa" class="imgCrop" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
</div>
<div id="cropimage-preview-wrapper" >
<div id="previewWrap" class="crop-preview" style="width: 320px; height: 116px; max-width: 320px; max-height: 116px; overflow: hidden"></div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript">

var image = document.getElementById('croppa');
var cropper = new Cropper(image, {
	aspectRatio: 2.75 / 1,
	viewMode: 1,
	preview: '.crop-preview',
	  crop: function(e) {
		$( '#x1' ).val(e.detail.x);
		$( '#y1' ).val(e.detail.y);
		$( '#x2' ).val(e.detail.x + e.detail.width);
		$( '#y2' ).val(e.detail.y + e.detail.height);
		$( '#width' ).val(e.detail.scaleX);
		$( '#height' ).val(e.detail.scaleY);
	}
});

<?php echo '</script'; ?>
>

<form action="cover_photo/<?php echo $_smarty_tpl->tpl_vars['resource']->value;?>
" id="crop-image-form" method="post" />
<input type='hidden' name='form_security_token' value='<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
'>

<input type='hidden' name='profile' value='<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
'>
<input type="hidden" name="cropfinal" value="1" />
<input type="hidden" name="xstart" id="x1" />
<input type="hidden" name="ystart" id="y1" />
<input type="hidden" name="xfinal" id="x2" />
<input type="hidden" name="yfinal" id="y2" />
<input type="hidden" name="height" id="height" />
<input type="hidden" name="width"  id="width" />

<div id="crop-image-submit-wrapper" >
<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['done']->value;?>
" />
</div>

</form>
<?php }
}
