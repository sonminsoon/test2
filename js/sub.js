$(function () {
	


	// 제휴사
	var slider4 = $('#sub_cooperation .slider_wrap ul').bxSlider({		
		auto : false,
		pager : false,
	});

	$(document).on('click','#sub_cooperation .bx-pager',function() {
		slider4.stopAuto();
		slider4.startAuto();
	});	

	

	
	if(mn<=0 || mn>7){
		return;
	}
	
	
	var title = $(".gnb_list>ul>li").eq(mn-1).find(">a").text();
	var lnb_str = $(".gnb_list>ul>li").eq(mn-1).find("ul").html();

	$("#sub_top ul").append(lnb_str);
	$("#lnb h2").text(title);
	$("#lnb ul").append(lnb_str);

	$("#lnb li").eq(sn-1).addClass("active");
	$("#sub_top li").eq(sn-1).addClass("active");

	$("#lnb").lnbInit();
	

});



(function( $ ) {

	// 왼쪽메뉴
	$.fn.lnbInit = function() {
		
		var $this = this;	
		var offset = 495;
		var lnbHeight = 800;
		var totalHeight;
	
		function config(){
			
			// On scrolling, check to see if more than 15px, then add the class
			$(window).on('scroll', function() {		
				scrollFn();				
			});
		
			
			scrollFn();

		}
		function scrollFn(){
			var scrollTop = $(document).scrollTop();
			var scrollTy = 0;
			lnbHeight = $this.height();			
			totalHeight = $("#wrap").height();

			

			if (scrollTop > offset+50) {
				scrollTy = scrollTop+50;
			}else {
				scrollTy = offset;
			}

			$this.stop().animate({top:scrollTy+"px"},{ duration: 450});
		}
		
		
		config();

    };

		
})( jQuery );
