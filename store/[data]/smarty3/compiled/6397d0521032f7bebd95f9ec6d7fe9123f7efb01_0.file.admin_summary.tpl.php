<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:20:02
  from '/sites/git.bronyfurry.com/view/tpl/admin_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9d274db29_48263578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6397d0521032f7bebd95f9ec6d7fe9123f7efb01' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_summary.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9d274db29_48263578 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper-styled" id='adminpage'>
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['adminalertmsg']->value) {?>
	<p class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['adminalertmsg']->value;?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['upgrade']->value) {?>
	<p class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['upgrade']->value;?>
</p>
<?php }?>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['queues']->value['label'];?>
</dt>
		<dd><?php echo $_smarty_tpl->tpl_vars['queues']->value['queue'];?>
</dd>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['accounts']->value[0];?>
</dt>
		<dd><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value[1], 'acc', false, NULL, 'account', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['acc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acc']->value) {
$_smarty_tpl->tpl_vars['acc']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_account']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_account']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_account']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_account']->value['total'];
?><span title="<?php echo $_smarty_tpl->tpl_vars['acc']->value['label'];?>
"><?php echo $_smarty_tpl->tpl_vars['acc']->value['val'];?>
 <?php echo $_smarty_tpl->tpl_vars['acc']->value['label'];?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_account']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_account']->value['last'] : null)) {?> / <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></dd>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['pending']->value[0];?>
</dt>
		<dd><?php echo $_smarty_tpl->tpl_vars['pending']->value[1];?>
</dt>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['channels']->value[0];?>
</dt>
		<dd><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['channels']->value[1], 'ch', false, NULL, 'chan', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['ch']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ch']->value) {
$_smarty_tpl->tpl_vars['ch']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_chan']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_chan']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_chan']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_chan']->value['total'];
?><span title="<?php echo $_smarty_tpl->tpl_vars['ch']->value['label'];?>
"><?php echo $_smarty_tpl->tpl_vars['ch']->value['val'];?>
 <?php echo $_smarty_tpl->tpl_vars['ch']->value['label'];?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_chan']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_chan']->value['last'] : null)) {?> / <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></dd>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['plugins']->value[0];?>
</dt>
		<dd>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value[1], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</dd>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['version']->value[0];?>
</dt>
		<dd><?php echo $_smarty_tpl->tpl_vars['version']->value[1];?>
 - <?php echo $_smarty_tpl->tpl_vars['build']->value;?>
</dd>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['vmaster']->value[0];?>
</dt>
		<dd><?php echo $_smarty_tpl->tpl_vars['vmaster']->value[1];?>
</dd>
	</dl>
	<dl>
		<dt><?php echo $_smarty_tpl->tpl_vars['vdev']->value[0];?>
</dt>
		<dd><?php echo $_smarty_tpl->tpl_vars['vdev']->value[1];?>
</dd>
	</dl>
</div><?php }
}
