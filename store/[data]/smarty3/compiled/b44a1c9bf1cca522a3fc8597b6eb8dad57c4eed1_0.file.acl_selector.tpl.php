<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:19:30
  from '/sites/git.bronyfurry.com/view/tpl/acl_selector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9b2545615_98816555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b44a1c9bf1cca522a3fc8597b6eb8dad57c4eed1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/acl_selector.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b9b2545615_98816555 (Smarty_Internal_Template $_smarty_tpl) {
?><form>
<div class="modal" id="aclModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					<i id="dialog-perms-icon" class="fa fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['aclModalTitle']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['helpUrl']->value) {?>
					<a target="hubzilla-help" href="<?php echo $_smarty_tpl->tpl_vars['helpUrl']->value;?>
" class="contextual-help-tool" title="Help and documentation"><i class="fa fa-fw fa-question"></i></a>
					<?php }?>
				</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
			</div>
			<div class="section-content-wrapper">
				<?php if ($_smarty_tpl->tpl_vars['aclModalDesc']->value) {?>
				<div id="acl-dialog-description" class="section-content-info-wrapper"><?php echo $_smarty_tpl->tpl_vars['aclModalDesc']->value;?>
</div>
				<?php }?>
				<label for="acl-select"><?php if ($_smarty_tpl->tpl_vars['aclModalDesc']->value) {?><i class="fa fa-send-o"></i> <?php }
echo $_smarty_tpl->tpl_vars['select_label']->value;?>
</label>
				<select id="acl-select" name="optionsRadios" class="form-control mb-3">
					<option id="acl-showall" value="public" <?php echo $_smarty_tpl->tpl_vars['public_selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['showall']->value;?>
</option>
					<option id="acl-onlyme" value="onlyme" <?php echo $_smarty_tpl->tpl_vars['justme_selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['onlyme']->value;?>
</option>
					<?php echo $_smarty_tpl->tpl_vars['groups']->value;?>

					<optgroup label = "<?php echo $_smarty_tpl->tpl_vars['custom_label']->value;?>
">;
						<option id="acl-custom" value="custom" <?php echo $_smarty_tpl->tpl_vars['custom_selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['custom']->value;?>
</option>
					</optgroup>;
				</select>

				<?php if ($_smarty_tpl->tpl_vars['showallOrigin']->value) {?>
				<div id="acl-info" class="mb-3">
					<i class="fa fa-info-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['showallOrigin']->value;?>

				</div>
				<?php }?>

				<div id="acl-wrapper">
					<div id="acl-list">
						<input class="form-control" type="text" id="acl-search" placeholder="&#xf002;" title="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
						<small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['showlimitedDesc']->value;?>
</small>
						<div id="acl-list-content"></div>
					</div>
				</div>

				<div class="list-group-item acl-list-item" rel="acl-template" style="display:none">
					<div class="acl-item-header clearfix">
						<img class="menu-img-3" data-src="{0}" loading="lazy" />
						<span class="font-weight-bold contactname">{1}</span>
						<span class="dropdown-sub-text">{6}</span>
					</div>
					<button class="acl-button-hide btn btn-sm btn-outline-danger"><i class="fa fa-times"></i> <?php echo $_smarty_tpl->tpl_vars['hide']->value;?>
</button>
					<button class="acl-button-show btn btn-sm btn-outline-success"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</button>
				</div>
			</div>
			<div class="modal-footer clear">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['aclModalDismiss']->value;?>
</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
<?php echo '<script'; ?>
>
	// compatibility issue with bootstrap v4
	//$('[data-bs-toggle="popover"]').popover(); // Init the popover, if present

	if(typeof acl=="undefined"){
		acl = new ACL(
			baseurl+"/acl"
		);
	}
<?php echo '</script'; ?>
>
<?php }
}
