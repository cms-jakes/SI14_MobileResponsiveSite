$(function() {

	//highlight current nav
	$("#home a:contains('SI14')").parent().addClass('active');
	$("#KeynoteSpeakers a:contains('Keynote Speakers')").parent().addClass('active');
	$("#maps a:contains('Maps')").parent().addClass('active');
	$("#ASEP a:contains('ASEP Camp')").parent().addClass('active');
	$("#ScheduleByDepartment a:contains('by Department')").parent().addClass('active');
	$("#ScheduleByDate a:contains('by Date')").parent().addClass('active');
	$("#June16th a:contains('June 16th')").parent().addClass('active');
	
	
	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});

	// carousel demo
	 $('.carousel').carousel({
      interval: 3000
    })
	
}); //jQuery is loaded