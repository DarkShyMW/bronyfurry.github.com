<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:48:38
  from '/sites/git.bronyfurry.com/view/tpl/website_portation_tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231c086d81d90_01293225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46494925974c423c6ae1feeb4b5133e24578a041' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/website_portation_tools.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231c086d81d90_01293225 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="website-portation-tools" class="widget">
	<div class="nav nav-pills flex-column">
		<a class="nav-link"  href="#" onclick="openClose('import-form'); return false;"><i class="fa fa-cloud-upload generic-icons"></i> <?php echo $_smarty_tpl->tpl_vars['import_label']->value;?>
</a>
		<div id="import-form" class="sub-menu-wrapper">
			<div class="sub-menu">
				<form enctype="multipart/form-data" method="post" action="">
					<input type="hidden" name="action" value="scan">
					<p class="descriptive-text"><?php echo $_smarty_tpl->tpl_vars['file_import_text']->value;?>
</p>
					<div class="mb-3">
						<input class="form-control" type="text" name="path" title="<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" />
					</div>
					<div class="mb-3">
						<button class="btn btn-primary btn-sm" type="submit" name="cloudsubmit" value="<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
">Submit</button>
					</div>
					<!-- Or upload a zipped file containing the website -->
					<p class="descriptive-text"><?php echo $_smarty_tpl->tpl_vars['file_upload_text']->value;?>
</p>
					<div class="mb-3">
						<input class="form-control-file w-100" type="file" name="zip_file" />
					</div>
					<div class="mb-3">
						<button class="btn btn-primary btn-sm" type="submit" name="w_upload" value="w_upload">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="nav nav-pills flex-column">
		<a class="nav-link" href="#" onclick="openClose('export-form'); openClose('export-cloud-form'); return false;"><i class="fa fa-share-square-o generic-icons"></i> <?php echo $_smarty_tpl->tpl_vars['export_label']->value;?>
</a>
		<div id="export-form" class="sub-menu-wrapper">
			<div class="sub-menu">
				<form enctype="multipart/form-data" method="post" action="">
					<input type="hidden" name="action" value="exportzipfile">
					<!-- Or download a zipped file containing the website -->
					<p class="descriptive-text"><?php echo $_smarty_tpl->tpl_vars['file_download_text']->value;?>
</p>
					<div class="mb-3">
						<input class="form-control" type="text" name="zipfilename" title="<?php echo $_smarty_tpl->tpl_vars['filename_hint']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['filename_desc']->value;?>
" value="" />
					</div>
					<div class="mb-3">
						<button class="btn btn-primary btn-sm" type="submit" name="w_download" value="w_download">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<div id="export-cloud-form" class="sub-menu-wrapper">
			<div class="sub-menu">
				<form enctype="multipart/form-data" method="post" action="">
					<input type="hidden" name="action" value="exportcloud">
					<!-- Or export the website elements to a cloud files folder -->
					<p style="margin-top: 10px;" class="descriptive-text"><?php echo $_smarty_tpl->tpl_vars['cloud_export_text']->value;?>
</p>
					<div class="mb-3">
						<input class="form-control" type="text" name="exportcloudpath" title="<?php echo $_smarty_tpl->tpl_vars['cloud_export_hint']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['cloud_export_desc']->value;?>
" />
					</div>
					<div class="mb-3">
						<button class="btn btn-primary btn-sm" type="submit" name="exportcloudsubmit" value="<?php echo $_smarty_tpl->tpl_vars['cloud_export_select']->value;?>
">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php }
}
