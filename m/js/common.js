$(function () {
	var s = get_cookie("popup");	
	if(s=="done"){
		popClose();
	}else{
		$(".top_popup").css("display","block");
	}
});
function popToggle(){
	var b = $(".top_popup").hasClass("close");
	var th;
	var ty;
	if(b){
		// 열기
		th = 130;
		ty = 259;
		$(".top_popup").css("display","block");
		$(".top_popup").removeClass("close");	
		$("#top_util .btn_pop").removeClass("close");	
		$("#top_util .btn_pop b").text("팝업닫기");

		set_cookie("popup","",1);

	}else{
		// 닫기
		th = 0;
		ty = 129;
		$(".top_popup").addClass("close");		
		$("#top_util .btn_pop").addClass("close");	
		$("#top_util .btn_pop b").text("팝업열기");

		set_cookie("popup","done",1);
	}

	


	$(".top_popup").stop().stop().animate({height:th+"px"}, 700,"easeInOutQuint");
	$("#right_quick").stop().stop().animate({top:ty+"px"}, 700,"easeInOutQuint");
	
}
function popClose(){
	th = 0;
	ty = 129;
	$(".top_popup").addClass("close");		
	$("#top_util .btn_pop").addClass("close");	
	$("#top_util .btn_pop b").text("팝업열기");
	$(".top_popup").stop().stop().animate({height:th+"px"}, 0,"easeInOutQuint");
	$("#right_quick").stop().stop().animate({top:ty+"px"}, 0,"easeInOutQuint");
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
