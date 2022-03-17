<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:21:24
  from '/sites/git.bronyfurry.com/view/tpl/cal_calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba249472b5_90137782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406ed5088cac4e3f5464bf93235cfbe4ea1f71c1' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/cal_calendar.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba249472b5_90137782 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
var calendar;

$(document).ready(function() {
	var calendarEl = document.getElementById('calendar');
	calendar = new FullCalendar.Calendar(calendarEl, {
		plugins: [ 'dayGrid' ],
		eventSources: [ <?php echo $_smarty_tpl->tpl_vars['sources']->value;?>
 ],

		timeZone: '<?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
',

		locale: '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
',

		eventTextColor: 'white',
		header: false,

		height: 'auto',

		firstDay: <?php echo $_smarty_tpl->tpl_vars['first_day']->value;?>
,

		monthNames: aStr['monthNames'],
		monthNamesShort: aStr['monthNamesShort'],
		dayNames: aStr['dayNames'],
		dayNamesShort: aStr['dayNamesShort'],
		allDayText: aStr['allday'],

		eventClick: function(info) {
			var event_id = info.event._def.extendedProps.item.id;
			showEvent(event_id);
		},

		loading: function(isLoading, view) {
			$('#events-spinner').show();
			$('#today-btn > i').hide();
			if(!isLoading) {
				$('#events-spinner').hide();
				$('#today-btn > i').show();
			}
		}

	});

	calendar.render();

	$('#title').text(calendar.view.title);

	$('#today-btn').on('click', function() {
		calendar.today();
		$('#title').text(calendar.view.title);
	});

	$('#prev-btn').on('click', function() {
		calendar.prev();
		$('#title').text(calendar.view.title);
	});

	$('#next-btn').on('click', function() {
		 calendar.next();
		 $('#title').text(calendar.view.title);
	});

	$(document).on('click','#fullscreen-btn', updateSize);
	$(document).on('click','#inline-btn', updateSize);

});

function showEvent(event_id) {
	$.get(
		'cal/<?php echo $_smarty_tpl->tpl_vars['nick']->value;?>
?id='+event_id,
		function(data){
			$.colorbox({ scrolling: false, html: data, onComplete: function() { $.colorbox.resize(); }});
		}
	);
}

function changeView(action, viewName) {
	calendar.changeView(viewName);
	$('#title').text(calendar.view.title);
	$('#view_selector').html(views[calendar.view.type]);
	return;
}

function updateSize() {
	calendar.updateSize();
}
<?php echo '</script'; ?>
>

<div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<div class="float-end">
			<div class="btn-group">
				<button id="prev-btn" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>
"><i class="fa fa-backward"></i></button>
				<button id="today-btn" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
"><div id="events-spinner" class="spinner s"></div><i class="fa fa-bullseye" style="display: none; width: 1rem;"></i></button>
				<button id="next-btn" class="btn btn-outline-secondary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
"><i class="fa fa-forward"></i></button>
			</div>
			<button id="fullscreen-btn" type="button" class="btn btn-outline-secondary btn-sm" onclick="makeFullScreen();"><i class="fa fa-expand"></i></button>
			<button id="inline-btn" type="button" class="btn btn-outline-secondary btn-sm" onclick="makeFullScreen(false);"><i class="fa fa-compress"></i></button>
		</div>
		<h2 id="title"></h2>
		<div class="clear"></div>
	</div>
	<div class="section-content-wrapper-np">
		<div id="calendar"></div>
	</div>
</div>
<?php }
}
