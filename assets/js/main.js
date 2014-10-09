$(document).ready(function() {


$(function() {
$('#submit').click(function() {
$('#formContainer').append('<img src="assets/img/loading.gif" alt="Currently Loading" id="loading" />');

	var name = $('#name').val();
	var email = $('#email').val();
	var comments = $('#comments').val();
	
	$.ajax({
		url: 'mail.php',
		type: 'POST',
		data: 'name=' + name + '&email=' + email + '&comments=' + comments,
		
		success: function(result) {
			$('#response').remove();
			$('#loading').fadeOut(1000, function() {
				$(this).remove();
			$('#formContainer').replaceWith('<div id="response">' + result + '</div>');
			
			});
			
		}
	});
	
	return false;
});

});