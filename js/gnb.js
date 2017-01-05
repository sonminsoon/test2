$(function () {
	$(this).menuInit();
});



(function( $ ) {

	$.fn.menuInit = function() {
		
		var $this = this;

		function config(){


			$this.find("#gnb .gnb_list > ul > li").removeClass("active");		
			$this.find("#gnb .gnb_list > ul > li").eq(mn-1).addClass("active");		

			$this.find(".btn_menu").click(menuToggle);
			$this.find("#total_menu .btn_close").click(menuClose);
			
			var obj = $this.find("#gnb .gnb_list > ul").clone();
			$this.find("#total_menu").append(obj);
	
		}		
		function menuToggle(){
			$this.find("#total_menu").toggle();
		}
		function menuClose(){
			$this.find("#total_menu").css("display","none");
		}
		
		

		config();

    };






})( jQuery );