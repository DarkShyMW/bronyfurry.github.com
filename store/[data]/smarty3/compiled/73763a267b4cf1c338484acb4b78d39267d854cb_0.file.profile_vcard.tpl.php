<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:13:21
  from '/sites/git.bronyfurry.com/view/tpl/profile_vcard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b8411ab859_87856226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73763a267b4cf1c338484acb4b78d39267d854cb' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_vcard.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b8411ab859_87856226 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="rounded mb-3 vcard-card h-card">
	<div class="card mb-2">
		<div class="row">
			<div class="col-4" style="width: fit-content;">
				<div id="profile-photo-wrapper">
					<img class="rounded-start u-photo" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['photo'];?>
?rev=<?php echo $_smarty_tpl->tpl_vars['profile']->value['picdate'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'];?>
" style="width: 6rem; height:6rem;">
				</div>
			</div>
			<div class="col-7 m-1 p-0">
				<?php if ($_smarty_tpl->tpl_vars['editmenu']->value['multi']) {?>
				<div class="dropdown float-end">
					<a class="profile-edit-side-link float-end" data-bs-toggle="dropdown" href="#" ><i class="fa fa-pencil" title="<?php echo $_smarty_tpl->tpl_vars['editmenu']->value['edit'][1];?>
"></i></a>
					<div class="dropdown-menu dropdown-menu-end" role="menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editmenu']->value['menu']['entries'], 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
						<a href="profiles/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
" class="dropdown-item"><img class="menu-img-1" src='<?php echo $_smarty_tpl->tpl_vars['e']->value['photo'];?>
'> <?php echo $_smarty_tpl->tpl_vars['e']->value['profile_name'];?>
</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if ($_smarty_tpl->tpl_vars['editmenu']->value['menu']['cr_new']) {?>
						<a href="profiles/new" id="profile-listing-new-link" class="dropdown-item"><?php echo $_smarty_tpl->tpl_vars['editmenu']->value['menu']['cr_new'];?>
</a>
						<?php }?>
					</div>
				</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['editmenu']->value) {?>
				<a class="profile-edit-side-link float-end" href="<?php echo $_smarty_tpl->tpl_vars['editmenu']->value['edit'][0];?>
" ><i class="fa fa-pencil" title="<?php echo $_smarty_tpl->tpl_vars['editmenu']->value['edit'][1];?>
"></i></a>
				<?php }?>

				<div class="text-truncate">
					<strong class="fn p-name"><?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'];
if ($_smarty_tpl->tpl_vars['profile']->value['online']) {?><i class="fa fa-fw fa-asterisk text-danger ps-2" title="<?php echo $_smarty_tpl->tpl_vars['profile']->value['online'];?>
"></i><?php }?></strong>
				</div>
				<div class="text-truncate">
					<small class="text-muted p-adr"><?php echo $_smarty_tpl->tpl_vars['profile']->value['reddress'];?>
</small>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['connect']->value) {?>
				<div class="mt-1">
					<a href="<?php echo $_smarty_tpl->tpl_vars['connect_url']->value;?>
" class="btn btn-success btn-sm" rel="nofollow">
						<i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['connect']->value;?>

					</a>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['details']->value) {?>
	<div class="vcard ps-2 pe-2">
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['pdesc']) {?>
		<div class="mb-2"><?php echo $_smarty_tpl->tpl_vars['profile']->value['pdesc'];?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['location']->value) {?>
		<dl class="mb-0 pb-1">
			<dt class="location-label"><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</dt>
			<dd class="adr h-adr">
				<?php if ($_smarty_tpl->tpl_vars['profile']->value['address']) {?>
				<div class="street-address p-street-address"><?php echo $_smarty_tpl->tpl_vars['profile']->value['address'];?>
</div>
				<?php }?>
				<div class="city-state-zip">
					<span class="postal-code p-postal-code"><?php echo $_smarty_tpl->tpl_vars['profile']->value['postal_code'];?>
</span>
					<span class="locality p-locality"><?php echo $_smarty_tpl->tpl_vars['profile']->value['locality'];?>
</span>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['profile']->value['region']) {?>
				<div class="region p-region"><?php echo $_smarty_tpl->tpl_vars['profile']->value['region'];?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['profile']->value['country_name']) {?>
				<div class="country-name p-country-name"><?php echo $_smarty_tpl->tpl_vars['profile']->value['country_name'];?>
</div>
				<?php }?>
			</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['hometown']->value) {?>
		<dl class="mb-0 pb-1">
			<dt class="hometown-label"><?php echo $_smarty_tpl->tpl_vars['hometown']->value;?>
</dt>
			<dd class="p-hometown"><?php echo $_smarty_tpl->tpl_vars['profile']->value['hometown'];?>
</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['gender']->value) {?>
		<dl class="mb-0 pb-1">
			<dt class="gender-label"><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</dt>
			<dd class="p-gender"><?php if ($_smarty_tpl->tpl_vars['profile']->value['gender_icon']) {?><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['profile']->value['gender_icon'];?>
"></i>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['profile']->value['gender'];?>
</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['marital']->value) {?>
		<dl class="mb-0 pb-1">
			<dt class="marital-label"><span class="heart"><i class="fa fa-heart"></i>&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['marital']->value;?>
</dt>
			<dd class="marital-text"><?php echo $_smarty_tpl->tpl_vars['profile']->value['marital'];?>
</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['homepage']->value) {?>
		<dl class="mb-0 pb-1">
			<dt class="homepage-label"><?php echo $_smarty_tpl->tpl_vars['homepage']->value;?>
</dt>
			<dd class="homepage-url u-url"><?php echo $_smarty_tpl->tpl_vars['profile']->value['homepage'];?>
</dd>
		</dl>
		<?php }?>
		<div class="hcard-addon"></div>
	</div>
	<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['details']->value) {
echo $_smarty_tpl->tpl_vars['chanmenu']->value;?>

<?php echo $_smarty_tpl->tpl_vars['contact_block']->value;?>

<?php }?>


<?php }
}
