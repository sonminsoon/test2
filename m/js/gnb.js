$(function () {
	$(this).menuInit();
});



(function( $ ) {

	$.fn.menuInit = function() {
		
		var $this = this;		

		function config(){
			$this.find(".btn_menu").click(menuOpen);
			$this.find("#gnb .btn_close").click(menuClose);
			$this.find(".hide_bg").click(menuClose);
			$this.find("#gnb > ul > li > a").click(menuClick);
			
		}
		function menuOpen(){
			$this.find("#gnb").addClass("open");
			$this.find("#wrap").stop().stop().animate({left:300+"px"}, {duration: 350});
			$this.find(".hide_bg").css("display","block");
		}
		function menuClose(){
			$this.find("#gnb").removeClass("open");
			$this.find("#wrap").stop().stop().animate({left:0+"px"}, {duration: 350});
			$this.find(".hide_bg").css("display","none");
		}		
		function menuClick(){
			var $target = $(this).parent();
			$this.find("#gnb > ul > li").removeClass("active");
			$target.addClass("active");
			$this.find("#gnb .sub").css("display","none");
			$target.find(".sub").css("display","block");
		}		
		
		

		config();

    };






})( jQuery );
