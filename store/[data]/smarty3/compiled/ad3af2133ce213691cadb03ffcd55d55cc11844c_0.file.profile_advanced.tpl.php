<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:29
  from '/sites/git.bronyfurry.com/view/tpl/profile_advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba297e36a7_60665687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad3af2133ce213691cadb03ffcd55d55cc11844c' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/profile_advanced.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba297e36a7_60665687 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="profile-content-wrapper" class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<div class="float-end">
			<?php if ($_smarty_tpl->tpl_vars['profile']->value['like_count']) {?>
			<div class="btn-group">
				<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" id="profile-like"><?php echo $_smarty_tpl->tpl_vars['profile']->value['like_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['like_button_label'];?>
</button>
				<?php if ($_smarty_tpl->tpl_vars['profile']->value['likers']) {?>
				<ul class="dropdown-menu dropdown-menu-end" role="menu" aria-labelledby="profile-like"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['likers'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
?><li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['liker']->value['url'];?>
"><img class="menu-img-1" src="<?php echo $_smarty_tpl->tpl_vars['liker']->value['photo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['liker']->value['name'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['liker']->value['name'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
				<?php }?>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['profile']->value['canlike']) {?>
			<div class="btn-group">
				<button type="button" class="btn btn-success btn-sm" onclick="doprofilelike('profile/' + '<?php echo $_smarty_tpl->tpl_vars['profile']->value['profile_guid'];?>
','like'); return false;" title="<?php echo $_smarty_tpl->tpl_vars['profile']->value['likethis'];?>
" >
					<i class="fa fa-thumbs-o-up" title="<?php echo $_smarty_tpl->tpl_vars['profile']->value['likethis'];?>
"></i>
				</button>
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['editmenu']->value['multi']) {?>
			<div class="btn-group">
				<a class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" href="#" ><i class="fa fa-pencil"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['editmenu']->value['edit'][3];?>
</a>
				<div class="dropdown-menu dropdown-menu-end">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editmenu']->value['menu']['entries'], 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
					<a class="dropdown-item" href="profiles/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><img class="menu-img-1" src='<?php echo $_smarty_tpl->tpl_vars['e']->value['photo'];?>
'> <?php echo $_smarty_tpl->tpl_vars['e']->value['profile_name'];?>
</a>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['editmenu']->value['menu']['cr_new']) {?>
					<a class="dropdown-item" href="profiles/new" id="profile-listing-new-link"><?php echo $_smarty_tpl->tpl_vars['editmenu']->value['menu']['cr_new'];?>
</a>
					<?php }?>
				</div>
			</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['editmenu']->value) {?>
			<div class="btn-group">
				<a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['editmenu']->value['edit'][0];?>
" ><i class="fa fa-pencil"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['editmenu']->value['edit'][3];?>
</a>
			</div>
			<?php }?>
					</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<div class="section-content-wrapper">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>























		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'name') {?>
			<dl id="aprofile-fullname" class="aprofile">
			 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'][0];?>
</dt>
			 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'][1];?>
</dd>
			</dl>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'fullname') {?>
			<dl id="aprofile-fullname" class="aprofile">
			 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'][0];?>
</dt>
			 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'][1];?>
</dd>
			</dl>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'gender') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['gender']) {?>
		<dl id="aprofile-gender" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['gender'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['gender'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'birthday') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['birthday']) {?>
		<dl id="aprofile-birthday" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['birthday'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['birthday'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'age') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['age']) {?>
		<dl id="aprofile-age" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['age'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['age'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'marital') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['marital']) {?>
		<dl id="aprofile-marital" class="aprofile">
		 <dt><span class="heart"><i class="fa fa-heart"></i>&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['profile']->value['marital'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['marital'][1];
if (in_array('partner',$_smarty_tpl->tpl_vars['fields']->value)) {
if ($_smarty_tpl->tpl_vars['profile']->value['marital']['partner']) {?> (<?php echo $_smarty_tpl->tpl_vars['profile']->value['marital']['partner'];?>
)<?php }
}
if (in_array('howlong',$_smarty_tpl->tpl_vars['fields']->value)) {
if ($_smarty_tpl->tpl_vars['profile']->value['howlong']) {?> <?php echo $_smarty_tpl->tpl_vars['profile']->value['howlong'];
}
}?></dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'sexual') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['sexual']) {?>
		<dl id="aprofile-sexual" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['sexual'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['sexual'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'keywords') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['keywords']) {?>
		<dl id="aprofile-tags" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['keywords'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['keywords'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'homepage') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['homepage']) {?>
		<dl id="aprofile-homepage" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['homepage'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['homepage'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'hometown') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['hometown']) {?>
		<dl id="aprofile-hometown" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['hometown'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['hometown'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'politic') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['politic']) {?>
		<dl id="aprofile-politic" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['politic'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['politic'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'religion') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['religion']) {?>
		<dl id="aprofile-religion" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['religion'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['religion'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'about') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['about']) {?>
		<dl id="aprofile-about" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['about'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['about'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'interest') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['interest']) {?>
		<dl id="aprofile-interest" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['interest'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['interest'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'likes') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['likes']) {?>
		<dl id="aprofile-likes" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['likes'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['likes'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'dislikes') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['dislikes']) {?>
		<dl id="aprofile-dislikes" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['dislikes'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['dislikes'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'contact') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['contact']) {?>
		<dl id="aprofile-contact" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['contact'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['contact'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'channels') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['channels']) {?>
		<dl id="aprofile-channels" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['channels'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['channels'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'music') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['music']) {?>
		<dl id="aprofile-music" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['music'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['music'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'book') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['book']) {?>
		<dl id="aprofile-book" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['book'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['book'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'tv') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['tv']) {?>
		<dl id="aprofile-tv" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['tv'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['tv'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'film') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['film']) {?>
		<dl id="aprofile-film" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['film'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['film'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'romance') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['romance']) {?>
		<dl id="aprofile-romance" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['romance'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['romance'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'employment') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['employment']) {?>
		<dl id="aprofile-work" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['employment'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['employment'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['f']->value == 'education') {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['education']) {?>
		<dl id="aprofile-education" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value['education'][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value['education'][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['extra_fields'], 'fld');
$_smarty_tpl->tpl_vars['fld']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fld']->value) {
$_smarty_tpl->tpl_vars['fld']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['f']->value == $_smarty_tpl->tpl_vars['fld']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value[$_smarty_tpl->tpl_vars['fld']->value]) {?>
		<dl id="aprofile-<?php echo $_smarty_tpl->tpl_vars['fld']->value;?>
" class="aprofile">
		 <dt><?php echo $_smarty_tpl->tpl_vars['profile']->value[$_smarty_tpl->tpl_vars['fld']->value][0];?>
</dt>
		 <dd><?php echo $_smarty_tpl->tpl_vars['profile']->value[$_smarty_tpl->tpl_vars['fld']->value][1];?>
</dd>
		</dl>
		<?php }?>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


		<?php if ($_smarty_tpl->tpl_vars['things']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['things']->value, 'items', false, 'key');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
		<b><?php echo $_smarty_tpl->tpl_vars['profile']->value['fullname'][1];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</b>
		<ul class="profile-thing-list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li><?php if ($_smarty_tpl->tpl_vars['item']->value['img']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" class="profile-thing-img" width="100" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['term'];?>
" /></a><?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['editurl'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['term'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['profile']->value['canlike']) {?><br />
		<button type="button" class="btn btn-outline-secondary btn-sm" onclick="doprofilelike('thing/' + '<?php echo $_smarty_tpl->tpl_vars['item']->value['term_hash'];?>
','like'); return false;" title="<?php echo $_smarty_tpl->tpl_vars['likethis']->value;?>
" >
		<i class="fa fa-thumbs-o-up" title="<?php echo $_smarty_tpl->tpl_vars['likethis']->value;?>
"></i>
		</button>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['like_count']) {?>
		<div class="btn-group">
		<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" id="thing-like-<?php echo $_smarty_tpl->tpl_vars['item']->value['term_hash'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['like_count'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['like_label'];?>
</button>
		<?php if ($_smarty_tpl->tpl_vars['item']->value['likes']) {?>
		<ul class="dropdown-menu" role="menu" aria-labelledby="thing-like-<?php echo $_smarty_tpl->tpl_vars['item']->value['term_hash'];?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['likes'], 'liker');
$_smarty_tpl->tpl_vars['liker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['liker']->value) {
$_smarty_tpl->tpl_vars['liker']->do_else = false;
?><li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['liker']->value['xchan_url'];?>
"><img class="dropdown-menu-img-xs" src="<?php echo $_smarty_tpl->tpl_vars['liker']->value['xchan_photo_s'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['liker']->value['name'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['liker']->value['xchan_name'];?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
		<?php }?>
		</div>
		<?php }?>
		</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<div class="clear"></div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	</div>
</div>
<?php }
}
