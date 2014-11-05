function comments_more_load(idx){

	$.ajax({
		type:'POST',
		url:'http://broadwav.com/timeline/comments_more_load/',
		data:{
			'idx': idx
		},
		success: function(msg){
			$("#"+idx).html(msg);
		}
	});

}
//more Comments Load

$(".MORE_COMMENTS").click(function(){
	var idx = $(this).attr('dat');
	comments_more_load(idx);
});
//more Comments Button Event