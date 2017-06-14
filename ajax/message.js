$(document).ready(function(){
	$('#submit').click(function(){
		var text = $('#text').val();
		$.ajax({
			type : 'POST',
			url  : 'php/chat_script.php',
			data : {
				message:text
			},
			success: function(b) {
				alert('message');
			}
		});
	});
});