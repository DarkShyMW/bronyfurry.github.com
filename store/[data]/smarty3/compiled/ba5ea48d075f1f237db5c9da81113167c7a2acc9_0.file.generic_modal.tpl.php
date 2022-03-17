<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:23:03
  from '/sites/git.bronyfurry.com/view/tpl/generic_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba87b73228_57012282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5ea48d075f1f237db5c9da81113167c7a2acc9' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/generic_modal.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba87b73228_57012282 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="generic-modal-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" tabindex="-1" role="dialog" aria-labelledby="generic-modal-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="generic-modal-title-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
      </div>
      <div class="modal-body" id="generic-modal-body-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>
      <div class="modal-footer">
        <button id="generic-modal-cancel-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</button>
	<?php if ($_smarty_tpl->tpl_vars['ok']->value) {?>
        <button id="generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="button" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</button>
	<?php }?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
}
