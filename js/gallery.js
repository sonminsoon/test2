var galleryActive;
$(document).ready(function(){
    set_gallery();
});

function set_gallery(){
  
  var $btnItem_m= $('#gallery_wrap>.tep_m>li');
  var $sum_box= $('#gall_box #gall_sum');
  var $imgItem = null;
  var $nextBtn=null;
  var $prevBtn=null;
  var $firstBtn=null;
  var $endBtn=null;
  var $titles=null;
  var max_m = $btnItem_m.length-1;
  var max_s = null;
  var over_m =0;
  var res_m = over_m;
  var over_s =0;
  var res_s = over_s;
  var geb = $('#gallery_wrap').width();
  var spd = 1000;
  var time = 3000;
  var chkOn = {'background':'#a78153','border':'1px solid #221f1f'};
  var chkOff = {'background':'#463e3e','border':'1px solid #221f1f'};
  var dph = 140;
  var mrn = 12;
  
  if(!galleryActive){
	  return;
  }

  $("#gallery_wrap .titlebox").html(title_conts[galleryActive]); 
  $("#gallery_wrap .imgbox").html(img_conts[galleryActive]);


  function init(){$btnItem_m.eq(over_m).css(chkOn);} init();
  function init_s(){$imgItem=$('#gallery_wrap .imgbox>li'); $nextBtn=$('#gallery_wrap .next'); $prevBtn=$('#gallery_wrap .prev'); $firstBtn=$('#gallery_wrap .first'); $endBtn=$('#gallery_wrap .end'); $titles=$('#gallery_wrap .titlebox>li'); $titles.css("display","none"); max_s = $imgItem.length-1; over_s =0; res_s = over_s; $imgItem.css({left:geb}); $imgItem.eq(over_s).css({left:0}); $titles.eq(over_s).css("display","block");}
  function removeEvent_m(){$btnItem_m.css(chkOff);} 
  function activeEvent_m(){removeEvent_m(); $btnItem_m.eq(over_m).css(chkOn);}
  $btnItem_m.on("mouseenter",function(e){removeEvent_m(); $(this).css(chkOn);});
  $btnItem_m.on("mouseleave",function(e){activeEvent_m();});
  $btnItem_m.on("click",function(e){res_m = over_m; if ($imgItem.is(':animated')){return false;} $("#gallery_wrap .titlebox").html(title_conts[($(this).index()+1)]); $("#gallery_wrap.imgbox").html(img_conts[($(this).index()+1)]); set_content(); if(over_m!=$(this).index()){over_m = Number($(this).index()); activeEvent_m();}});
  
  /**********************************************************************************************************************/

  function set_content(){
	init_s();
	var sums = '';
	var bh = dph;
	for(var i=0; i<=max_s; i++){
	   sums += "<li><span class='ovr'></span><img src="+$imgItem.eq(i).find('img').attr('src')+" alt=''/></li>";	   
	}
	$sum_box.html(sums);
	$sum_box.find("li").eq(0).addClass("active");

	/*
	$sum_box.find('li').css({width:$sum_box.width()/4-mrn,height:dph,'float':'left','border':'1px solid #e6e6e6','margin-right':mrn,'margin-bottom':mrn,'cursor':'pointer'});
	$sum_box.find('li.chk').css({'margin-right':0});
	$sum_box.find('li>img').css({width:$sum_box.width()/4-mrn,height:dph,opacity:.5});
	$sum_box.css({height:bh+(mrn*2)});
	
	$sum_box.find('li').eq(over_s).find('img').css({opacity:1});
	*/
	$sum_box.find('li').on("click",function(e){if($imgItem.is(':animated')){return false;} if(over_s !=$(this).index()){res_s = over_s; over_s =$(this).index(); activeEvent_n();}});

	$nextBtn.on("click",function(e){if($imgItem.is(':animated')){return false;} nextBox();});
    $prevBtn.on("click",function(e){if($imgItem.is(':animated')){return false;} prevBox();});
	$firstBtn.on("click",function(e){if($imgItem.is(':animated')){return false;} if(over_s !=0){ res_s = over_s; over_s =0; activeEvent_n();} });
	$endBtn.on("click",function(e){if($imgItem.is(':animated')){return false;} if(over_s != max_s){ res_s = over_s; over_s =max_s; activeEvent_n();} });
    function removeEvent_s(){$titles.css("display","none");} 
    function activeEvent_n(){removeEvent_s(); $titles.eq(over_s).css("display","block"); $imgItem.eq(over_s).css({left:geb}); $imgItem.eq(over_s).stop().animate({left:0},spd,"easeInOutExpo"); $imgItem.eq(res_s).stop().animate({left:-geb},spd,"easeInOutExpo"); $sum_box.find('li').removeClass("active"); $sum_box.find('li').eq(over_s).addClass("active");}
    function activeEvent_p(){removeEvent_s(); $titles.eq(over_s).css("display","block"); $imgItem.eq(over_s).css({left:-geb}); $imgItem.eq(over_s).stop().animate({left:0},spd,"easeInOutExpo"); $imgItem.eq(res_s).stop().animate({left:geb},spd,"easeInOutExpo"); $sum_box.find('li').removeClass("active"); $sum_box.find('li').eq(over_s).addClass("active");}
    function nextBox(){if(over_s == max_s){res_s = over_s; over_s = 0; activeEvent_n();}else{res_s = over_s; over_s++; activeEvent_n();}}
    function prevBox(){if(over_s == 0){res_s = over_s; over_s = max_s; activeEvent_p();}else{res_s = over_s; over_s--; activeEvent_p();}}
  }
  set_content();
}
    var title_conts = new Array();
	var img_conts = new Array();


	/* 01_강남점*/
	title_conts[1] = "<li>1이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>2이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>3이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>4이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>5이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>6이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>7이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>8이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>9이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>10이젠클리닉 대기실 전경</li>";
	title_conts[1] += "<li>11이젠클리닉 대기실 전경</li>";

	img_conts[1] = "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
	img_conts[1] += "<li><img src='../images/cont/intro/gimg01.jpg' alt=''/></li>";
