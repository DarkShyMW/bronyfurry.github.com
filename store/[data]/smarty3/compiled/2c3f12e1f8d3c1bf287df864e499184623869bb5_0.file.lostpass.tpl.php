<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:22:54
  from '/sites/git.bronyfurry.com/view/tpl/lostpass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba7e559152_07586673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3f12e1f8d3c1bf287df864e499184623869bb5' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/lostpass.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba7e559152_07586673 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

<p id="lostpass-desc">
<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

</p>

<form action="lostpass" method="post" >
<div id="login-name-wrapper">
        <label for="login-name" id="label-login-name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
        <input type="text" maxlength="60" name="login-name" id="login-name" value="" />
		<input type="submit" name="submit" id="lostpass-submit-button" value="<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
" />
</div>
<div id="login-extra-end"></div>
<div id="login-submit-end"></div>
</form>
</div>
<?php }
}
