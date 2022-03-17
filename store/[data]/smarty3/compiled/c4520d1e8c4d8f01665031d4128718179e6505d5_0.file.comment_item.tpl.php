<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/comment_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b25f7281_96177113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4520d1e8c4d8f01665031d4128718179e6505d5' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/comment_item.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 3,
  ),
),false)) {
function content_6231b9b25f7281_96177113 (Smarty_Internal_Template $_smarty_tpl) {
?>		<?php if ($_smarty_tpl->tpl_vars['threaded']->value) {?>
		<div class="comment-wwedit-wrapper threaded" id="comment-edit-wrapper-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display: block;">
		<?php } else { ?>
		<div class="comment-wwedit-wrapper" id="comment-edit-wrapper-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display: block;">
		<?php }?>
			<form class="comment-edit-form" style="display: block;" id="comment-edit-form-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" action="item" method="post" onsubmit="post_comment(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				<input type="hidden" name="profile_uid" value="<?php echo $_smarty_tpl->tpl_vars['profile_uid']->value;?>
" />
				<input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
" />
				<input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['return_path']->value;?>
" />
				<input type="hidden" name="jsreload" value="<?php echo $_smarty_tpl->tpl_vars['jsreload']->value;?>
" />
				<input type="hidden" name="preview" id="comment-preview-inp-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="0" />
				<?php if ($_smarty_tpl->tpl_vars['anoncomments']->value && !$_smarty_tpl->tpl_vars['observer']->value) {?>
				<div id="comment-edit-anon-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="display: none;" >
					<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['anonname']->value), 0, false);
?>
					<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['anonmail']->value), 0, true);
?>
					<?php $_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['anonurl']->value), 0, true);
?>
					<?php echo $_smarty_tpl->tpl_vars['anon_extras']->value;?>

				</div>
				<?php }?>
				<textarea id="comment-edit-text-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="comment-edit-text" placeholder="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" name="body" ondragenter="linkdropper(event);" ondragleave="linkdropexit(event);" ondragover="linkdropper(event);" ondrop="linkdrop(event);" ></textarea>
				<div id="comment-tools-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pt-2 comment-tools">
					<div id="comment-edit-bb-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn-toolbar float-start">
						<div class="btn-group me-2">
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edbold']->value;?>
" onclick="insertbbcomment('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
','b', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-bold comment-icon"></i>
							</button>
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['editalic']->value;?>
" onclick="insertbbcomment('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
','i', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-italic comment-icon"></i>
							</button>
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['eduline']->value;?>
" onclick="insertbbcomment('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
','u', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-underline comment-icon"></i>
							</button>
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edquote']->value;?>
" onclick="insertbbcomment('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
','quote', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-quote-left comment-icon"></i>
							</button>
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edcode']->value;?>
" onclick="insertbbcomment('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
','code', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-terminal comment-icon"></i>
							</button>
						</div>
						<div class="btn-group me-2">
							<?php if ($_smarty_tpl->tpl_vars['can_upload']->value) {?>
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edatt']->value;?>
" onclick="insertCommentAttach('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-paperclip comment-icon"></i>
							</button>
							<?php }?>
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['edurl']->value;?>
" onclick="insertCommentURL('<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;">
								<i class="fa fa-link comment-icon"></i>
							</button>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['feature_encrypt']->value) {?>
						<div class="btn-group me-2">
							<button class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['encrypt']->value;?>
" onclick="hz_encrypt('<?php echo $_smarty_tpl->tpl_vars['cipher']->value;?>
','#comment-edit-text-' + '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'); return false;">
								<i class="fa fa-key comment-icon"></i>
							</button>
						</div>
						<?php }?>
						<?php echo $_smarty_tpl->tpl_vars['comment_buttons']->value;?>

					</div>
					<div class="btn-group float-end" id="comment-edit-submit-wrapper-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
						<button id="comment-edit-presubmit-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-outline-secondary btn-sm" onclick="preview_comment(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;" title="<?php echo $_smarty_tpl->tpl_vars['preview']->value;?>
">
							<i class="fa fa-eye comment-icon" ></i>
						</button>
						<?php }?>
						<button id="comment-edit-submit-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary btn-sm" type="submit" name="button-submit" onclick="post_comment(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); return false;"><?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
</button>
					</div>
				</div>
				<div class="clear"></div>
			</form>
		</div>
		<div id="comment-edit-preview-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="comment-edit-preview mt-4"></div>
<?php }
}
