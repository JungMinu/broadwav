
//	Theme Name: GDE Broadway Layout ver 1.0
//	Theme URI: http://Desirenvy.COM
//	Author: Greed Desire Envy
//	Author URI: http://Desirenvy.COM
//	Description: Innovative Toilet Shower
//	Version: 1.0
//	License: GNU General Public License v2 or later
//	License URI: http://www.gnu.org/licenses/gpl-2.0.html
//	Tags: Broadway, Broadway.com
//	Text Domain: Broadway

//	------------- Greed Desire Envy -------------
//	Last Update : 2014 / 07 / 09
//	Phone : +82 10 9999 7990
//	Desirenvy @ gmail . com
//	Desirenvy . COM
//	Copyright At GDE All Right Reserved. By GDE.
//	Licenses are CC - BY - NC - ND
//	Package XE
//	Sub-Package GDE
//	since 2014 GDE - Broadway Layout ver 1.0
//	------------- Greed Desire Envy -------------

jQuery(function($){

$(document).ready(function(){
	//$("#swave_ico").click(function(){
		
	
		setTimeout(function(){
			$("#swave_bg").fadeIn();
		}, 0);
		
		
//	});
	
	$("#swave_close").click(function(){
		
		$("#swave_close").addClass("animated tada");
		
		setTimeout(function(){
			$("#swave_bg").fadeOut();
		}, 1000);
		
		setTimeout(function(){
			$("#swave_close").removeClass("animated tada");
			$("#swave_stop").trigger("click");
		}, 1100);
		
		return false
	});
	
	$("#swave_max").click(function(){
		
		$("#swave_max").addClass("animated tada");
				
		setTimeout(function(){
			$("#swave_max").removeClass("animated tada");
		}, 1100);
		
		return false
	});
	
	$("#swave_min").click(function(){
		
		$("#swave_min").addClass("animated tada");
				
		setTimeout(function(){
			$("#swave_min").removeClass("animated tada");
		}, 1100);
		
		return false
	});
	$("#swave_play").click(function(){
	
		$("#swave_play").addClass("animated tada");
		setTimeout(function(){
			$("#girl_head").removeClass("animated infinite updown1");
			$("#girl_body").removeClass("animated infinite updown2");
			
			$("#boy_head").removeClass("animated infinite updown1");
			$("#boy_body").removeClass("animated infinite updown2");
		}, 900);		
		setTimeout(function(){
			$("#swave_play").hide();
			$("#swave_stop").show();
			$("#swave_eq").fadeIn();
			$("#swave_wing").addClass("animated infinite rotate");
			$("#swave_left_speaker").addClass("animated infinite bounce");
			$("#swave_right_speaker").addClass("animated infinite bounce");
			
			$("#girl_head").addClass("animated infinite bounce");
			$("#girl_body").addClass("animated infinite bounce");
			$("#girl_leg").addClass("animated infinite bounce");
			
			$("#boy_head").addClass("animated infinite bounce");
			$("#boy_body").addClass("animated infinite bounce");
			$("#boy_leg").addClass("animated infinite bounce");
			
		}, 1000);
		
		setTimeout(function(){
			$("#swave_play").removeClass("animated tada");
		}, 1100);
		
		return false
	});
	
	$("#swave_stop").click(function(){
	
		$("#swave_stop").addClass("animated tada");
		setTimeout(function(){
			$("#girl_head").removeClass("animated infinite bounce");
			$("#girl_body").removeClass("animated infinite bounce");
			$("#girl_leg").removeClass("animated infinite bounce");
			
			$("#boy_head").removeClass("animated infinite bounce");
			$("#boy_body").removeClass("animated infinite bounce");
			$("#boy_leg").removeClass("animated infinite bounce");
		}, 900);	
		setTimeout(function(){
			$("#swave_stop").hide();
			$("#swave_play").show();
			$("#swave_eq").fadeOut();
			$("#swave_wing").removeClass("animated infinite rotate");
			$("#swave_left_speaker").removeClass("animated infinite bounce");
			$("#swave_right_speaker").removeClass("animated infinite bounce");
			
			$("#girl_head").addClass("animated infinite updown1");
			$("#girl_body").addClass("animated infinite updown2");
			
			$("#boy_head").addClass("animated infinite updown1");
			$("#boy_body").addClass("animated infinite updown2");
		}, 1000);
		
		setTimeout(function(){
			$("#swave_stop").removeClass("animated tada");
		}, 1100);
		
		return false
	});
	
	$("#swave_sound_on").click(function(){
		
		$("#swave_sound_on").addClass("animated tada");
		
		setTimeout(function(){
			$("#swave_sound_on").hide();
			$("#swave_sound_off").show();
			
			$("#swave_sound_bar_on").hide();
			$("#swave_sound_bar_off").show();
		}, 1000);
		
		setTimeout(function(){
			$("#swave_sound_on").removeClass("animated tada");
		}, 1100);
		
		return false
	});
	
	$("#swave_sound_off").click(function(){
		
		$("#swave_sound_off").addClass("animated tada");
		
		setTimeout(function(){
			$("#swave_sound_off").hide();
			$("#swave_sound_on").show();
			
			$("#swave_sound_bar_off").hide();
			$("#swave_sound_bar_on").show();
		}, 1000);
		
		setTimeout(function(){
			$("#swave_sound_off").removeClass("animated tada");
		}, 1100);
		
		return false
	});
	
});

});