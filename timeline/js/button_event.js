$(".TOPBAR_ACCOUNT").click(function(){
	$(".USER_MENU").fadeIn();
	$("#USER_CLOSE").fadeIn();
	return false
});
$("#USER_CLOSE").click(function(){
	$(".USER_MENU").fadeOut();
	$("#USER_CLOSE").hide(0);
	return false
});
$("#COMPOSE_BUTTON").click(function(){
 	$("#COMPOSE_WINDOW_CONTAINER").fadeIn();
	$("#COMPOSE_CLOSE").show(0);
	return false
});
$("#COMPOSE_CLOSE").click(function(){
	$("#COMPOSE_WINDOW_CONTAINER").fadeOut();
	$("#COMPOSE_CLOSE").hide(0);
	return false
});
$("#MENU_WINDOW_CLOSE").click(function(){
	$(".MENU_WINDOW_USER").fadeOut();
	$(".MENU_WINDOW_OTHERS").fadeOut();
	$("#MENU_WINDOW_CLOSE").hide(0);
	return false
});
$(".MENU_BUTTON").click(function(){
	var user = $(this).closest('div').find('.MENU_WINDOW_USER').attr('id');
	var other = $(this).closest('div').find('.MENU_WINDOW_OTHERS').attr('id');
	
	$('#' + user).fadeToggle();
	$('#' + other).fadeToggle();
	$("#MENU_WINDOW_CLOSE").toggle(0);
	return false
});
$(".MENU_LIKE_BUTTON").click(function(){
	var like_off  = $(this).closest('div').find('.MENU_LIKE_BUTTON_OFF').attr('id');
	var like_on  = $(this).closest('div').find('.MENU_LIKE_BUTTON_ON').attr('id');
	
	var destination = $(this).closest('div').find('.MENU_LIKE_BUTTON_OFF').attr('id');
	var contents = $(this).closest('div').find('.MENU_LIKE_BUTTON_ON').attr('id');

	//alert("좋아요");

	$.ajax({
	type: 'POST',

	url: 'http://broadwav.com/timeline/like/',
	
	data: 
	{ 
		'destination': destination,
		'contents': contents
	},
	success: function(msg){
		// Comment Compose Delay
	}
	});

	$('#' + like_off).fadeToggle();
	$('#' + like_on).fadeToggle();
	return false
});
