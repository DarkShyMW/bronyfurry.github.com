<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:09:31
  from '/sites/git.bronyfurry.com/view/tpl/navbar_default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b75b44d5d2_97019576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4464734566f0f63a7c2727b5e170459e4f789f7' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/navbar_default.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b75b44d5d2_97019576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/sites/git.bronyfurry.com/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid flex-nowrap">
		<?php if ($_smarty_tpl->tpl_vars['nav']->value['login'] && !$_smarty_tpl->tpl_vars['userinfo']->value) {?>
		<div class="d-lg-none pt-1 pb-1">
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][4]) {?>
			<a class="btn btn-primary btn-sm text-white" href="#" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][3];?>
" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][4];?>
_collapse" data-bs-toggle="modal" data-bs-target="#nav-login">
				<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][1];?>

			</a>
			<?php } else { ?>
			<a class="btn btn-primary btn-sm text-white" href="login" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][3];?>
">
				<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][1];?>

			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['register']) {?>
			<a class="btn btn-warning btn-sm text-dark" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][3];?>
" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][4];?>
" >
				<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][1];?>

			</a>
			<?php }?>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value) {?>
		<div class="d-flex" style="max-width: 50%">
			<div class="dropdown">
				<div class="fakelink usermenu" data-bs-toggle="dropdown">
					<img id="avatar" src="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['icon'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['name'];?>
">
					<i class="fa fa-caret-down"></i>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
				<div class="dropdown-menu">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value['usermenu'], 'usermenu');
$_smarty_tpl->tpl_vars['usermenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usermenu']->value) {
$_smarty_tpl->tpl_vars['usermenu']->do_else = false;
?>
					<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['usermenu']->value[2]) {?> active<?php }?>"  href="<?php echo $_smarty_tpl->tpl_vars['usermenu']->value[0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['usermenu']->value[3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['usermenu']->value[4];?>
"><?php echo $_smarty_tpl->tpl_vars['usermenu']->value[1];?>
</a>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['group']) {?>
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['group'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['group'][3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['group'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['group'][1];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['manage']) {?>
					<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['sel']->value['name'] == 'Manage') {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['manage'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['manage'][3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['manage'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['manage'][1];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['channels']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value['channels'], 'chan');
$_smarty_tpl->tpl_vars['chan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chan']->value) {
$_smarty_tpl->tpl_vars['chan']->do_else = false;
?>
					<a class="dropdown-item" href="manage/<?php echo $_smarty_tpl->tpl_vars['chan']->value['channel_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['chan']->value['channel_name'];?>
" role="menuitem"><i class="fa fa-circle<?php if ($_smarty_tpl->tpl_vars['localuser']->value == $_smarty_tpl->tpl_vars['chan']->value['channel_id']) {?> text-success<?php } else { ?> invisible<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['chan']->value['channel_name'];?>
</a>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['profiles']) {?>
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['profiles'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['profiles'][3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['profiles'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['profiles'][1];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['settings']) {?>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['sel']->value['name'] == 'Settings') {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['settings'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['settings'][3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['settings'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['settings'][1];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['admin']) {?>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['sel']->value['name'] == 'Admin') {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['admin'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['admin'][3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['admin'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['admin'][1];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['logout']) {?>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['logout'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['logout'][3];?>
" role="menuitem" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['logout'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['logout'][1];?>
</a>
					<?php }?>
				</div>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['is_owner']->value) {?>
				<div class="dropdown-menu" role="menu" aria-labelledby="avatar">
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['rusermenu'][0];?>
" role="menuitem"><?php echo $_smarty_tpl->tpl_vars['nav']->value['rusermenu'][1];?>
</a>
					<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['rusermenu'][2];?>
" role="menuitem"><?php echo $_smarty_tpl->tpl_vars['nav']->value['rusermenu'][3];?>
</a>
				</div>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['sel']->value['name']) {?>
			<div id="nav-app-link-wrapper" class="navbar-nav<?php if ($_smarty_tpl->tpl_vars['sitelocation']->value) {?> has_location<?php }?>">
				<a id="nav-app-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="nav-link text-truncate" style="width: 100%">
					<?php echo $_smarty_tpl->tpl_vars['sel']->value['name'];?>

					<?php if ($_smarty_tpl->tpl_vars['sitelocation']->value) {?>
					<br><small><?php echo $_smarty_tpl->tpl_vars['sitelocation']->value;?>
</small>
					<?php }?>
				</a>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['settings_url']->value) {?>
			<div id="nav-app-settings-link-wrapper" class="navbar-nav">
				<a id="nav-app-settings-link" href="<?php echo $_smarty_tpl->tpl_vars['settings_url']->value;?>
/?f=&rpath=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="nav-link">
					<i class="fa fa-fw fa-cog"></i>
				</a>
			</div>
			<?php }?>
			<?php }?>
		</div>
		<?php }?>

		<div class="navbar-toggler-right">
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['help'][6]) {?>
			<button id="context-help-btn" class="navbar-toggler border-0" type="button" onclick="contextualHelp(); return false;">
				<i class="fa fa-question-circle"></i>
			</button>
			<?php }?>
			<button id="expand-aside" type="button" class="d-lg-none navbar-toggler border-0">
				<i class="fa fa-arrow-circle-right" id="expand-aside-icon"></i>
			</button>
			<?php if ($_smarty_tpl->tpl_vars['localuser']->value || $_smarty_tpl->tpl_vars['nav']->value['pubs']) {?>
			<button id="notifications-btn-1" type="button" class="navbar-toggler border-0 notifications-btn">
				<i id="notifications-btn-icon-1" class="fa fa-exclamation-circle notifications-btn-icon"></i>
			</button>
			<?php }?>
			<button id="menu-btn" class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#app-bin">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse justify-content-between" id="navbar-collapse-1">
			<ul class="navbar-nav">
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['login'] && !$_smarty_tpl->tpl_vars['userinfo']->value) {?>
				<li class="nav-item d-lg-flex">
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][4]) {?>
					<a class="nav-link" href="#" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][3];?>
" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][4];?>
" data-bs-toggle="modal" data-bs-target="#nav-login">
					<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][1];?>

					</a>
					<?php } else { ?>
					<a class="nav-link" href="login" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][3];?>
">
						<?php echo $_smarty_tpl->tpl_vars['nav']->value['loginmenu'][1][1];?>

					</a>
					<?php }?>
				</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['register']) {?>
				<li class="nav-item <?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][2];?>
 d-lg-flex">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][3];?>
" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['register'][1];?>
</a>
				</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['alogout']) {?>
				<li class="nav-item <?php echo $_smarty_tpl->tpl_vars['nav']->value['alogout'][2];?>
 d-lg-flex">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['alogout'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['alogout'][3];?>
" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['alogout'][4];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['alogout'][1];?>
</a>
				</li>
				<?php }?>
			</ul>

			<div id="banner" class="navbar-text"><?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
</div>

			<ul id="nav-right" class="navbar-nav">
				<li class="nav-item collapse clearfix" id="nav-search">
					<form class="form-inline" method="get" action="<?php echo $_smarty_tpl->tpl_vars['nav']->value['search'][4];?>
" role="search">
						<input class="form-control form-control-sm mt-1 me-2" id="nav-search-text" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['help']->value;?>
" name="search" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['search'][3];?>
" onclick="this.submit();" onblur="closeMenu('nav-search'); openMenu('nav-search-btn');"/>
					</form>
					<div id="nav-search-spinner" class="spinner-wrapper">
						<div class="spinner s"></div>
					</div>
				</li>
				<li class="nav-item" id="nav-search-btn">
					<a class="nav-link" href="#nav-search" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['search'][3];?>
" onclick="openMenu('nav-search'); closeMenu('nav-search-btn'); $('#nav-search-text').focus(); return false;"><i class="fa fa-fw fa-search"></i></a>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['help'][6]) {?>
				<li class="nav-item dropdown <?php echo $_smarty_tpl->tpl_vars['sel']->value['help'];?>
">
					<a class="nav-link <?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][2];?>
" target="hubzilla-help" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][3];?>
" id="<?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][4];?>
" onclick="contextualHelp(); return false;"><i class="fa fa-fw fa-question-circle"></i></a>
				</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['localuser']->value || $_smarty_tpl->tpl_vars['nav']->value['pubs']) {?>
				<li id="notifications-btn" class="nav-item d-xl-none">
					<a class="nav-link text-white notifications-btn" href="#"><i id="notifications-btn-icon" class="fa fa-exclamation-circle  notifications-btn-icon"></i></a>
				</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['navbar_apps']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar_apps']->value, 'navbar_app');
$_smarty_tpl->tpl_vars['navbar_app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navbar_app']->value) {
$_smarty_tpl->tpl_vars['navbar_app']->do_else = false;
?>
				<li class="nav-app-sortable">
					<?php echo $_smarty_tpl->tpl_vars['navbar_app']->value;?>

				</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<li class="nav-item dropdown" id="app-menu">
					<a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#app-bin" aria-controls="app-bin"><i class="fa fa-fw fa-bars"></i></a>
				</li>
			</ul>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['nav']->value['help'][6]) {?>
		<div id="contextual-help-content" class="contextual-help-content">
			<?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][5];?>

			<div class="float-end">
				<a class="btn btn-primary btn-sm" target="hubzilla-help" href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][0];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['help'][3];?>
"><i class="fa fa-question"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['fulldocs']->value;?>
</a>
				<a class="contextual-help-tool" href="#" onclick="contextualHelp(); return false;"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<?php }?>
	</div>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="app-bin" aria-labelledby="app-bin-label">
	<div class="offcanvas-header">
		<div class="lh-1" id="app-bin-label">
			<?php if ($_smarty_tpl->tpl_vars['name']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
" class="menu-img-2">
			<div class="float-start pe-2">
				<div class="fw-bold"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
				<div class="text-muted"><?php echo $_smarty_tpl->tpl_vars['sitelocation']->value;?>
</div>
			</div>
			<?php }?>
		</div>
		<i id="app-bin-trash" class="fa fa-2x fa-fw fa-trash-o d-none"></i>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body pt-0">
		<?php if ($_smarty_tpl->tpl_vars['channel_apps']->value[0]) {?>
		<div class="dropdown-header text-uppercase text-muted">
			<?php echo $_smarty_tpl->tpl_vars['channelapps']->value;?>

		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['channel_apps']->value, 'channel_app');
$_smarty_tpl->tpl_vars['channel_app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['channel_app']->value) {
$_smarty_tpl->tpl_vars['channel_app']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['channel_app']->value;?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['navbar_apps']->value[0]) {?>
		<div class="d-lg-none dropdown-header text-uppercase text-muted">
			<?php echo $_smarty_tpl->tpl_vars['pinned_apps']->value;?>

		</div>
		<div id="nav-app-bin-container" class="d-lg-none">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar_apps']->value, 'navbar_app');
$_smarty_tpl->tpl_vars['navbar_app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navbar_app']->value) {
$_smarty_tpl->tpl_vars['navbar_app']->do_else = false;
?>
				<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['navbar_app']->value,'navbar-app nav-link','dropdown-item nav-app-sortable'),'fa','generic-icons-nav fa');?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {?>
		<div class="dropdown-header text-uppercase text-muted">
			<?php echo $_smarty_tpl->tpl_vars['featured_apps']->value;?>

		</div>
		<div id="app-bin-container" data-token="<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_apps']->value, 'nav_app');
$_smarty_tpl->tpl_vars['nav_app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav_app']->value) {
$_smarty_tpl->tpl_vars['nav_app']->do_else = false;
?>
				<?php echo $_smarty_tpl->tpl_vars['nav_app']->value;?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="/apps"><i class="generic-icons-nav fa fa-fw fa-plus"></i><?php echo $_smarty_tpl->tpl_vars['addapps']->value;?>
</a>
		<?php } else { ?>
		<div class="dropdown-header text-uppercase text-muted">
			<?php echo $_smarty_tpl->tpl_vars['sysapps']->value;?>

		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav_apps']->value, 'nav_app');
$_smarty_tpl->tpl_vars['nav_app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav_app']->value) {
$_smarty_tpl->tpl_vars['nav_app']->do_else = false;
?>
			<?php echo $_smarty_tpl->tpl_vars['nav_app']->value;?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['is_owner']->value) {
echo '<script'; ?>
>
	var app_bin = document.getElementById('app-bin-container');
	new Sortable(app_bin, {
		animation: 150,
		delay: 200,
		delayOnTouchOnly: true,
		onStart: function (e) {
			$('#app-bin-trash').removeClass('d-none');
		},
		onEnd: function (e) {
			$('#app-bin-trash').addClass('d-none');

			let app_str = '';
			$('#app-bin-container a:visible').each(function () {
				if(app_str.length) {
					app_str = app_str.concat(',', this.text);
				}
				else {
					app_str = app_str.concat(this.text);
				}
			});
			$.post(
				'pconfig',
				{
					'aj' : 1,
					'cat' : 'system',
					'k' : 'app_order',
					'v' : app_str,
					'form_security_token' : $('#app-bin-container').data('token')
				}
			);

		}
	});

	var nav_app_bin = document.getElementById('nav-right');
	new Sortable(nav_app_bin, {
		animation: 150,
		delay: 200,
		delayOnTouchOnly: true,
		draggable: '.nav-app-sortable',
		onEnd: function (e) {
			let nav_app_str = '';
			$('#nav-right .nav-app-sortable').each(function () {
				if(nav_app_str.length) {
					nav_app_str = nav_app_str.concat(',', $(this).text());
				}
				else {
					nav_app_str = nav_app_str.concat($(this).text());
				}
			});
			$.post(
				'pconfig',
				{
					'aj' : 1,
					'cat' : 'system',
					'k' : 'app_pin_order',
					'v' : nav_app_str,
					'form_security_token' : $('#app-bin-container').data('token')
				}
			);

		}
	});

	var nav_app_bin_container = document.getElementById('nav-app-bin-container');
	new Sortable(nav_app_bin_container, {
		animation: 150,
		delay: 200,
		delayOnTouchOnly: true,
		onEnd: function (e) {
			let nav_app_str = '';
			$('#nav-app-bin-container a').each(function () {
				if(nav_app_str.length) {
					nav_app_str = nav_app_str.concat(',', $(this).text());
				}
				else {
					nav_app_str = nav_app_str.concat($(this).text());
				}
			});
			$.post(
				'pconfig',
				{
					'aj' : 1,
					'cat' : 'system',
					'k' : 'app_pin_order',
					'v' : nav_app_str,
					'form_security_token' : $('#app-bin-container').data('token')
				}
			);

		}
	});

	$('#nav-right').on('dragover', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).css('box-shadow', '0px 0px 3px red inset');
	});
	$('#nav-right').on('dragleave', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).css('box-shadow', '');

	});
	$('#nav-right').on('drop', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).css('box-shadow', '');

		if (papp === null)
			return;

		$.ajax({
			type: 'post',
			url: 'appman',
			data: {
				'aj' : 1,
				'feature' : 'nav_pinned_app',
				'papp' : papp
			}
		})
		.done( function() {
			$('<li><a class="navbar-app nav-link" href="' + app_url + '"><i class="fa fa-fw fa-' + app_icon + '"></i></li>').insertBefore('#app-menu');
		});

	});

	$('#app-menu').on('dragover', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).css('box-shadow', '0px 0px 1px red inset');
	});
	$('#app-menu').on('dragleave', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).css('box-shadow', '');

	});
	$('#app-menu').on('drop', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).css('box-shadow', '');

		if (papp === null)
			return;

		$.ajax({
			type: 'post',
			url: 'appman',
			data: {
				'aj' : 1,
				'feature' : 'nav_featured_app',
				'papp' : papp
			}
		})
		.done( function() {
			$('<a class="dropdown-item" href="' + app_url + '"><i class="generic-icons-nav fa fa-fw fa-' + app_icon + '"></i>' + app_name + '</a>').appendTo('#app-bin-container');
		});

	});


	$('#app-bin-trash').on('dragover', function (e) {
		e.preventDefault();
		e.stopPropagation();

		$('#app-bin-container a[href=\'' + app_url + '\']').fadeOut();
	});
	$('#app-bin-trash').on('dragleave', function (e) {
		e.preventDefault();
		e.stopPropagation();

		$('#app-bin-container a[href=\'' + app_url + '\']').fadeIn();

	});
	$('#app-bin-trash').on('drop', function (e) {
		e.preventDefault();
		e.stopPropagation();

		if (papp === null)
			return;

		$.ajax({
			type: 'post',
			url: 'appman',
			data: {
				'aj' : 1,
				'feature' : 'nav_featured_app',
				'papp' : papp
			}
		});

	});

	var papp, app_icon, app_url;
	$(document).on('dragstart', function (e) {
		papp = e.target.dataset.papp || null;
		app_icon = e.target.dataset.icon || null;
		app_url = e.target.dataset.url || null;
		app_name = e.target.dataset.name || null;
	});
<?php echo '</script'; ?>
>
<?php }
}
}
