$(function () {
	$("#lnb").lnbInit();
});



(function( $ ) {

	$.fn.lnbInit = function() {
		
		var $this = this;
	

		function config(){
			var obj = $(document).find("#gnb .gnb_list").clone();
			$this.find(">div").append(obj);
			if(mn>0){
				$this.find(".gnb_list > li").eq(mn-1).addClass("active");
				var title1 = $this.find(".gnb_list > li").eq(mn-1).find(">a").text();
				$this.find("h2").text(title1);
				if(sn>0){
					$this.find(".gnb_list > li").eq(mn-1).find(".sub li").eq(sn-1).addClass("active");
					var title2 = $this.find(".gnb_list > li").eq(mn-1).find(".sub li").eq(sn-1).text();
					$this.find("h3").text(title2);
				}
			}

			$this.find("h2").click(toggleMenu1);
			$this.find("h3").click(toggleMenu2);

		}
		function toggleMenu1(){
			var b = $(this).hasClass("open");
			if(b){
				//닫기
				$(this).removeClass("open");
				$this.find(">div").height(0);
			}else{
				$this.find(".btn").removeClass("open");
				$this.find("h2").addClass("open");
				$this.find(">div").css("left","0px");
				$this.find(".gnb_list").css("left","0px");
				var th = $this.find(".gnb_list").height();
				$this.find(">div").height(th);
			}
		}
		function toggleMenu2(){
			var b = $(this).hasClass("open");
			if(b){
				//닫기
				$(this).removeClass("open");
				$this.find(">div").height(0);
			}else{
				$this.find(".btn").removeClass("open");
				$(this).addClass("open");
				$this.find(">div").css("left","320px");
				$this.find(".gnb_list").css("left","-320px");
				var th = $this.find(".gnb_list > li").eq(mn-1).find(".sub").height();
				$this.find(">div").height(th);
			}			
		}
		
		

		config();

    };






})( jQuery );
