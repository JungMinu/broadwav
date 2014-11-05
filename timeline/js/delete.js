function post_delete(idx){
	$.ajax({
		type: 'POST',
		url: 'http://broadwav.com/timeline/post_delete/',
		data: { 
			'idx': idx,
		},
	});
}
// Delete Post

function post_delete_confirm(idx){

	var post_delete_check = confirm("Are you sure?");

	if (post_delete_check == true) {
		post_delete(idx);	
		$('#POST_INDEX'+idx).hide(); 
	}

	else { }

}
// Delete Post Confirm

function comments_delete(idx){
	$.ajax({
		type: 'POST',
		url: 'http://broadwav.com/timeline/comments_delete/',
		data: { 
			'idx': idx,
		},
	});
}
// Delete Comment
function comments_delete_confirm(idx,destination){

	var comments_delete_check = confirm("Are you sure?");

	if (comments_delete_check == true) {
		comments_delete(idx);
		$('#COMMENTS_INDEX'+idx).hide();
		
		setTimeout(function() {
			comments_load(destination,destination);
		}, 100);
		// Delete Comments Delay
	}
	else { }

}
// Delete Comment Confirm