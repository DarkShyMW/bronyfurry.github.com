<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:30
  from '/sites/git.bronyfurry.com/view/tpl/photo_albums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba2ab5ffe8_64859453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc63969cda95cd30655459ee5f60195bc99bcd18' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/photo_albums.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba2ab5ffe8_64859453 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="side-bar-photos-albums" class="widget">
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<ul class="nav nav-pills flex-column">
		<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/photos/<?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['recent']->value;?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['albums']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'al');
$_smarty_tpl->tpl_vars['al']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['al']->value) {
$_smarty_tpl->tpl_vars['al']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['al']->value['shorttext']) {?>
		<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/photos/<?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
/album/<?php echo $_smarty_tpl->tpl_vars['al']->value['bin2hex'];?>
"><span class="badge bg-secondary float-end"><?php echo $_smarty_tpl->tpl_vars['al']->value['total'];?>
</span><?php echo $_smarty_tpl->tpl_vars['al']->value['shorttext'];?>
</a></li>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</ul>
</div>
<?php }
}
