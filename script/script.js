$('#gamburger').click(function(){
	$(this).parent().toggleClass('active')
})




$('.send_mail').on('submit', function(event) {
	event.preventDefault();
	$.ajax({
		url: 'first.php',
		type: 'POST',
		dataType: 'json',
		data: $(".send_mail").serializeArray(),
	})
	.done(function(data) {
		if(data.error){
			alert(data.message);
		}
		console.log(data.error);
	})
	.fail(function() {
		console.log("error");
	})
	
	
});