<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/conv_frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b26bdd59_25688065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f606e22b6e9c22ef9d0407ea6308aec62bfb72' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/conv_frame.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contact_edit_modal.tpl' => 1,
  ),
),false)) {
function content_6231b9b26bdd59_25688065 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="threads-begin"></div>
<div id="threads-end"></div>
<div id="conversation-end"></div>
<div id="page-spinner" class="spinner-wrapper">
	<div  class="spinner m"></div>
	<div id="image_counter" class="text-muted text-center small"></div>
</div>
<div class="modal" id="conversation_settings" tabindex="-1" role="dialog" aria-labelledby="conversation_settings_label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="conversation_settings_label"><?php echo $_smarty_tpl->tpl_vars['conversation_tools']->value;?>
</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="modal-body" id="conversation_settings_body">
				<?php echo $_smarty_tpl->tpl_vars['wait']->value;?>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $_smarty_tpl->_subTemplateRender("file:contact_edit_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
