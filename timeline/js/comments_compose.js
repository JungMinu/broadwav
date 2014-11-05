$('.TIMELINE_COMMNETS').submit(function () {

	var destination = $(this).closest('form').find('#index').val();
	var contents = $(this).closest('form').find('#contents').val();

	$.ajax({
	type: 'POST',

	url: 'http://broadwav.com/timeline/comments_compose/',
	
	data: 
	{ 
		'destination': destination,
		'contents': contents
	},
	success: function(msg){
		setTimeout(function() {
			comments_load(destination,destination);
		}, 100);
		// Comment Compose Delay
	}
	});
	// Comment Compose

	$(".contents").val("");
	return false;
	// Comment Clear

});