$(function () {
	// 메인비주얼 
	var slider1 = $('#main_visual .slider_wrap ul').bxSlider({		
		auto : true,
		mode:'vertical',
		pager : true,
	});

	$(document).on('click','#main_visual',function() {
		slider1.stopAuto();
		slider1.startAuto();
	});




	// 브랜드 스토리
	var slider2 = $('#main_banner .slider_wrap ul').bxSlider({		
		auto : true,
		pager : false,
		slideWidth: 426,
		maxSlides: 3,
		moveSlides:1,
	});

	$(document).on('click','#main_banner',function() {
		slider2.stopAuto();
		slider2.startAuto();
	});


		
	
	$(".board").eq(0).mainBoardInit();
	$(".board").eq(1).mainBoardInit();
	$(".board").eq(2).mainBoardInit();	



});



(function( $ ) {


	//게시판 앞뒤로 넘기기
	$.fn.mainBoardInit = function() {
		
		var $this = this;	
		var max = 0;
		var offset = 3;
		var curPage = 0;
		var maxPage;


		function config(){
			max = $this.find("li").length;
			
			maxPage = Math.ceil(max/offset);

			$this.find(".btn_prev").click(pagePrev);
			$this.find(".btn_next").click(pageNext);

			
			btnActive();
			viewPage(0);
		}		
		function pagePrev(){
			if(curPage>0){
				curPage--;
			}
			viewPage(curPage);
		}
		function pageNext(){
			if(curPage<maxPage-1){
				curPage++;
			}
			viewPage(curPage);
		}
		function viewPage(n){
			var start = n*offset;
			var end = (n+1)*offset;
			$this.find("li").each(function (i) {				
				if(i>=start && i<end){
					$(this).css("display","block");
				}else{
					$(this).css("display","none");
				}
			});

			btnActive();

		}
		function btnActive(){
			if(curPage<=0){
				$this.find(".btn_prev").css({"opacity":"0.5","cursor":"default"});
			}else{
				$this.find(".btn_prev").css({"opacity":"1","cursor":"pointer"});
			}
			if(curPage>=maxPage-1){
				$this.find(".btn_next").css({"opacity":"0.5","cursor":"default"});
			}else{
				$this.find(".btn_next").css({"opacity":"1","cursor":"pointer"});
			}
		}

		
		config();

    };


})( jQuery );
