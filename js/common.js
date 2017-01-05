var scrollOffsetY = 170;

$(function () {

	
	$("#r_banner").rBannerInit();


	// 상단 이벤트
	
	var s = get_cookie("event");	
	if(s=="done" || mn>0){
		popClose();				
	}else{
		$("#top_event").css("display","block"); 
	}


});

(function( $ ) {

	
	// 오른쪽배너
	$.fn.rBannerInit = function() {
		
		var $this = this;	
		var interval;
	
		function config(){

			var scrollTop = $(document).scrollTop();
			// On loading, check to see if more than 15px, then add the class
			if (scrollTop > scrollOffsetY) {
				
				$this.addClass('fixed');
			}

			// On scrolling, check to see if more than 15px, then add the class
			$(window).on('scroll', function() {			
				scrollTop = $(document).scrollTop();
				if (scrollTop > scrollOffsetY) {
					$this.addClass('fixed');
				} else {
					$this.removeClass('fixed');
				}
			});
		}
		

		config();

    };



})( jQuery );




function popClose(){
	set_cookie("event","done",1);
	$("#top_event").css("display","none");
	$("#r_banner").addClass("event_close");
	scrollOffsetY = 0;
}
function set_cookie( name, value, expiredays ){
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}
function get_cookie( name ) {
	var nameOfCookie = name + "=";
	var x = 0;
	while ( x <= document.cookie.length )
	{
	var y = (x+nameOfCookie.length);
	if ( document.cookie.substring( x, y ) == nameOfCookie ) {
	  if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
	   endOfCookie = document.cookie.length;
	  return unescape( document.cookie.substring( y, endOfCookie ) );
	}
	x = document.cookie.indexOf( " ", x ) + 1;
	if ( x == 0 )
	  break;
	}
	return "";
}