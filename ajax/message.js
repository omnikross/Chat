$(document).ready(function(){
	$('#submit').click(function(){
		var text = $('#text').val();
		$.ajax({
			type : 'POST',
			url  : 'php/chat_script.php',
			data : {
				message:text
			},
			success: function(arr) {
				arr = $.parseJSON(arr);
				$('#time').html(arr.time);
				$('#name').html(arr.user);
				$('#message').html(arr.message);
			}
		});
	});
});