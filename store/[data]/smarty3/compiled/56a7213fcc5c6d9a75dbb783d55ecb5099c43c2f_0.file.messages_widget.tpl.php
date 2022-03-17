<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:24:31
  from '/sites/git.bronyfurry.com/view/tpl/messages_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231badf4b7ee8_23129919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56a7213fcc5c6d9a75dbb783d55ecb5099c43c2f' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/messages_widget.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231badf4b7ee8_23129919 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-tabs nav-fill clearfix">
	<li class="nav-item">
		<a class="nav-link active messages-type" href="#" title="<?php echo $_smarty_tpl->tpl_vars['strings']->value['messages_title'];?>
" data-messages_type="">
			<i class="fa fa-fw fa-comment-o"></i>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link messages-type" href="#" title="<?php echo $_smarty_tpl->tpl_vars['strings']->value['direct_messages_title'];?>
" data-messages_type="direct">
			<i class="fa fa-fw fa-envelope-o"></i>
		</a>
	</li>
	<?php if ($_smarty_tpl->tpl_vars['feature_star']->value) {?>
	<li class="nav-item">
		<a class="nav-link messages-type" href="#" title="<?php echo $_smarty_tpl->tpl_vars['strings']->value['starred_messages_title'];?>
" data-messages_type="starred">
			<i class="fa fa-fw fa-star"></i>
		</a>
	</li>
	<?php }?>
	<li class="nav-item">
		<a class="nav-link messages-type" href="#" title="<?php echo $_smarty_tpl->tpl_vars['strings']->value['notice_messages_title'];?>
" data-messages_type="notification">
			<i class="fa fa-fw fa-exclamation"></i>
		</a>
	</li>
</ul>
<div id="messages-widget" class="border border-top-0 overflow-auto mb-3 clearfix" style="height: 70vh;">
	<div id="messages-template" rel="template" class="d-none">
		<a href="{6}" class="list-group-item list-group-item-action message" data-b64mid="{0}">
			<div class="d-flex w-100 justify-content-between">
				<div class="mb-1 text-truncate" title="{5}">
					{7}
					<strong>{4}</strong>
				</div>
				<small class="messages-timeago text-nowrap" title="{1}"></small>
			</div>
			<div class="mb-1">
				<div class="text-break">{2}</div>
			</div>
			<small>{3}</small>
		</a>
	</div>
	<div id="dm-container" class="list-group list-group-flush" data-offset="10">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['e']->value['href'];?>
" class="list-group-item list-group-item-action message" data-b64mid="<?php echo $_smarty_tpl->tpl_vars['e']->value['b64mid'];?>
">
			<div class="d-flex w-100 justify-content-between">
				<div class="mb-1 text-truncate" title="<?php echo $_smarty_tpl->tpl_vars['e']->value['author_addr'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['e']->value['icon'];?>

					<strong><?php echo $_smarty_tpl->tpl_vars['e']->value['author_name'];?>
</strong>
				</div>
				<small class="messages-timeago text-nowrap" title="<?php echo $_smarty_tpl->tpl_vars['e']->value['created'];?>
"></small>
			</div>
			<div class="mb-1">
				<div class="text-break"><?php echo $_smarty_tpl->tpl_vars['e']->value['summary'];?>
</div>
			</div>
			<small><?php echo $_smarty_tpl->tpl_vars['e']->value['info'];?>
</small>
		</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div id="messages-empty" class="list-group-item border-0"<?php if ($_smarty_tpl->tpl_vars['entries']->value) {?> style="display: none;"<?php }?>>
			<?php echo $_smarty_tpl->tpl_vars['strings']->value['empty'];?>
...
		</div>
		<div id="messages-loading" class="list-group-item" style="display: none;">
			<?php echo $_smarty_tpl->tpl_vars['strings']->value['loading'];?>
<span class="jumping-dots"><span class="dot-1">.</span><span class="dot-2">.</span><span class="dot-3">.</span></span>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>
	var messages_offset = <?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
;
	var get_messages_page_active = false;
	var messages_type;

	$(document).ready(function () {
		$('.messages-timeago').timeago();
		$('.message[data-b64mid=\'' + bParam_mid + '\']').addClass('active');
	});

	$('#messages-widget').on('scroll', function() {
		if(this.scrollTop > this.scrollHeight - this.clientHeight - (this.scrollHeight/7)) {
			get_messages_page();
		}
	});

	$(document).on('click', '.messages-type', function(e) {
		e.preventDefault();
		$('.messages-type').removeClass('active');
		$(this).addClass('active');
		messages_offset = 0;
		messages_type = $(this).data('messages_type');
		$('#dm-container .message').remove();
		get_messages_page();
	});

	function get_messages_page() {

		if (get_messages_page_active)
			return;

		if (messages_offset === -1)
			return;

		get_messages_page_active = true;
		$('#messages-loading').show();
		$('#messages-empty').hide();

		$.ajax({
			type: 'post',
			url: 'hq',
			data: {
				offset: messages_offset,
				type: messages_type
			}
		}).done(function(obj) {
			get_messages_page_active = false;
			messages_offset = obj.offset;
			let html;
			let tpl = $('#messages-template[rel=template]').html();
			if (obj.entries.length) {
				obj.entries.forEach(function(e) {
					html = tpl.format(
						e.b64mid,
						e.created,
						e.summary,
						e.info,
						e.author_name,
						e.author_addr,
						e.href,
						e.icon
					);
					$('#messages-loading').before(html);
				});
			}
			else {
				$('#messages-empty').show();
			}
			$('.message[data-b64mid=\'' + bParam_mid + '\']').addClass('active');
			$('#messages-loading').hide();
			$('.messages-timeago').timeago();

		});
	}
<?php echo '</script'; ?>
>
<?php }
}
