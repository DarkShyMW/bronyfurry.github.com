<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/cover_photo_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b26cc8a7_74360527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a94707fa9ce4e75a73da75b5ad221e86f8b819' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cover_photo_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9b26cc8a7_74360527 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var aside_padding_top;
	var section_padding_top;
	var coverSlid = false;
	var hide_cover = Boolean(<?php echo $_smarty_tpl->tpl_vars['hide_cover']->value;?>
);
	var cover_height;

	$(document).ready(function() {
		if(! $('#cover-photo').length)
			return;

		if($(window).width() < 755) {
			$('#cover-photo').remove();
			coverSlid = true;
			return;
		}

		$('#cover-photo').removeClass('d-none');
		cover_height = Math.ceil($(window).width()/2.75862069);
		$('#cover-photo').css('height', cover_height + 'px');
		datasrc2src('#cover-photo > img');

		$(document).on('click mouseup keyup', slideUpCover);

		if(hide_cover) {
			hideCover();
		}
		else if(!hide_cover && !coverSlid)  {
			coverVisibleActions();
		}
	});

	$(window).scroll(function () {
		if(! $('#cover-photo').length) {
			return;
		}

		if($(window).scrollTop() >= cover_height) {
			coverHiddenActions();
			coverSlid = true;
		}
		else if ($(window).scrollTop() < cover_height){
			if(coverSlid) {
				$(window).scrollTop(cover_height);
				setTimeout(function(){ coverSlid = false; }, 1000);
			}
			else {
				if($(window).scrollTop() < cover_height) {
					coverVisibleActions();
				}
			}
		}
		if($('main').css('opacity') < 1) {
			$('main').css('opacity', ($(window).scrollTop()/cover_height).toFixed(1));
		}
	});

	$(window).resize(function () {
		if(! $('#cover-photo').length) {
			return;
		}

		cover_height = Math.ceil($(window).width()/2.75862069);
		$('#cover-photo').css('height', cover_height + 'px');
		if($(window).width() < 755) {
			$('#cover-photo').remove();
			coverHiddenActions();
			coverSlid = true;
		}

	});

	function slideUpCover() {
		if(coverSlid) {
			return;
		}
		$('html, body').animate({scrollTop: cover_height + 'px'}, 'fast');
		return;
	}

	function hideCover() {
		if(coverSlid) {
			return;
		}
		window.scrollTo(0, cover_height);
		return;
	}

	function coverVisibleActions() {
		$('body').css('cursor', 'n-resize');
		$('.navbar').removeClass('fixed-top');
		$('main').css('margin-top', - $('nav').outerHeight(true) + 'px');
		$('main').css('opacity', 0);
	}

	function coverHiddenActions() {
		$('body').css('cursor', '');
		$('.navbar').addClass('fixed-top');
		$('main').css('margin-top', '');
		$('main').css('opacity', 1);
	}
<?php echo '</script'; ?>
>

<div class="d-none" id="cover-photo" title="<?php echo $_smarty_tpl->tpl_vars['hovertitle']->value;?>
">
	<?php echo $_smarty_tpl->tpl_vars['photo_html']->value;?>

	<div id="cover-photo-caption">
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
		<h3><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</h3>
	</div>
</div>
<?php }
}
