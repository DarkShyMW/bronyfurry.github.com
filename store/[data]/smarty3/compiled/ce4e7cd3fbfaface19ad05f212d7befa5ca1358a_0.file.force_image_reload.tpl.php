<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:16:50
  from '/sites/git.bronyfurry.com/view/tpl/force_image_reload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b912ad9fd4_38912919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce4e7cd3fbfaface19ad05f212d7befa5ca1358a' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/force_image_reload.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b912ad9fd4_38912919 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  $(document).ready(
    function() {
      forceImgReload("<?php echo $_smarty_tpl->tpl_vars['imgUrl']->value;?>
");
    }
  );

    function prepareImagesForReload(srcUrl) {

    var result = $("img[src='" + srcUrl + "']").get();

    for (i = 0; i < result.length; i++) {
            result[i].src = "data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' preserveAspectRatio='xMidYMid' class='uil-reload'%3E%3Cpath fill='none' class='bk' d='M0 0h100v100H0z'/%3E%3Cg%3E%3Cpath d='M50 15a35 35 0 1 0 24.787 10.213' fill='none' stroke='%23777' stroke-width='12'/%3E%3Cpath d='M50 0v30l16-15L50 0' fill='%23777'/%3E%3CanimateTransform attributeName='transform' type='rotate' from='0 50 50' to='360 50 50' dur='1s' repeatCount='indefinite'/%3E%3C/g%3E%3C/svg%3E";
    }

    return result;
  }

  function restoreImages(srcUrl, imgList) {

    for (i = 0; i < imgList.length; i++) {
      imgList[i].src = srcUrl;
    }
  }

  function forceImgReload(srcUrl) {
    var imgList;
    var step = 0; 
    var iframe = window.document.createElement("iframe");   // Hidden iframe, in which to perform the load+reload.
  
        var iframeLoadCallback = function(e) { 

      if (step === 0) { 
        // initial load just completed.  Note that it doesn't actually matter if this load succeeded or not.
      
        step = 1; 
        imgList = prepareImagesForReload(srcUrl); 
        iframe.contentWindow.location.reload(true); // initiate forced-reload!
      
      } else if (step === 1) {
        // forced re-load is done 

        restoreImages(srcUrl, imgList);
        if (iframe.parentNode) iframe.parentNode.removeChild(iframe);
      }
    }

    iframe.style.display = "none";
    window.parent.document.body.appendChild(iframe);     iframe.addEventListener("load",  iframeLoadCallback, false);
    iframe.addEventListener("error", iframeLoadCallback, false);
    iframe.src = srcUrl;  
  }
<?php echo '</script'; ?>
>
<?php }
}
