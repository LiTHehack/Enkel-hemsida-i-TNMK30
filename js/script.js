$(document).ready(function () {

	$('table tbody tr').hover(function() {
		$(this).addClass('highlight');
	}, function() {
		$(this).removeClass('highlight');
	});
});