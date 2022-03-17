<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:27
  from '/sites/git.bronyfurry.com/view/tpl/atom_feed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba270be096_24158032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d6a4bde7a3318abc65c0571f60fc7c840866bb9' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/atom_feed.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba270be096_24158032 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>
version="1.0" encoding="utf-8" <?php echo '?>';?>

<feed xmlns="http://www.w3.org/2005/Atom"
      xmlns:thr="http://purl.org/syndication/thread/1.0"
      xmlns:at="http://purl.org/atompub/tombstones/1.0"
      xmlns:media="http://purl.org/syndication/atommedia"
      xmlns:dfrn="http://purl.org/macgirvin/dfrn/1.0"
      xmlns:zot="http://purl.org/zot"
      xmlns:as="http://activitystrea.ms/spec/1.0/"
      xmlns:georss="http://www.georss.org/georss"
      xmlns:poco="http://portablecontacts.net/spec/1.0"
      xmlns:ostatus="http://ostatus.org/schema/1.0"
      xmlns:statusnet="http://status.net/schema/api/1/" >

  <id><?php echo $_smarty_tpl->tpl_vars['feed_id']->value;?>
</id>
  <title><?php echo $_smarty_tpl->tpl_vars['feed_title']->value;?>
</title>
  <generator uri="<?php echo $_smarty_tpl->tpl_vars['generator_uri']->value;?>
" version="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['generator']->value;?>
</generator>
  <link rel="license" href="http://creativecommons.org/licenses/by/3.0/" />
  <?php if ($_smarty_tpl->tpl_vars['profile_page']->value) {?>
  <link rel="alternate" type="text/html" href="<?php echo $_smarty_tpl->tpl_vars['profile_page']->value;?>
" />
  <?php }
if ($_smarty_tpl->tpl_vars['author']->value) {
echo $_smarty_tpl->tpl_vars['author']->value;?>

<?php }?>

  <updated><?php echo $_smarty_tpl->tpl_vars['feed_updated']->value;?>
</updated>

<?php echo $_smarty_tpl->tpl_vars['owner']->value;?>

<?php }
}
