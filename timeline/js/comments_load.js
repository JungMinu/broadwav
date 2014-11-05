function comments_load(idx,destination){

	$.ajax({
		type:'POST',
		url:'http://broadwav.com/timeline/comments_load/',
		data:{
			'idx': idx,
			'destination': destination
		},
		success: function(msg){
			$("#"+idx).html(msg);
		}
	});

}
//All Comments Load