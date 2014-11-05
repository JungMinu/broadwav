function like(idx,destination){

	$.ajax({
		type:'POST',
		url:'http://broadwav.com/timeline/like/',
		data:{
			'idx': idx,
			'destination': destination
		},
		success: function(msg){
			$("#"+idx).html(msg);
		}
	});

}
//Like Add