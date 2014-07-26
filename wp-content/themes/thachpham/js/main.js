$(document).ready(function() {
	$('.header-menu > ul') .hide();
	$('a.show-menu').click(function() {
		$('.header-menu > ul').toggle("blind", 800);
		return false;
	});
});
