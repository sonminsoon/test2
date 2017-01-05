<?
$mn = 2;
$sn = 2;
$cn = 0;
?>
<? include "../include/head.php" ?>	
		
		<!-- lnb -->
		<section id="lnb" class="after">
			<h2 class="btn"></h2>
			<h3 class="btn"></h3>
			<div></div>			
		</section>
		<!-- //lnb -->
		

		<!-- sub_contents -->
		<section id="sub_contents">
			<img src="../images/cont/skin/skin02_cont01.jpg" class="block" alt="">
			<img src="../images/cont/skin/skin02_cont02.jpg" class="block" alt="">
			<img src="../images/cont/skin/skin02_cont03.jpg" class="block" alt="">
			
			
			<div class="cont_roll_type01">
				<div class="slider_wrap">
					<ul>
						<li><a href=""><img src="../images/cont/skin/skin02_cont0401.jpg" alt=""></a></li>
						<li><a href=""><img src="../images/cont/skin/skin02_cont0401.jpg" alt=""></a></li>
						<li><a href=""><img src="../images/cont/skin/skin02_cont0401.jpg" alt=""></a></li>
						<li><a href=""><img src="../images/cont/skin/skin02_cont0401.jpg" alt=""></a></li>
					</ul>			
				</div>
			</div>

			<script>
			$(function () {
				var cont_roll_type01 = $('.cont_roll_type01 .slider_wrap ul').bxSlider({		
					auto : false,
				});

				$(document).on('click','.cont_roll_type01',function() {
					cont_roll_type01.stopAuto();
					cont_roll_type01.startAuto();
				});


				var intervalCount = 0;
				var interval = setInterval(bannerInputText,100);
				bannerInputText();
				function bannerInputText(){
					
					var t = $(".bx-pager-item").eq(0).text();

					intervalCount++
					if(intervalCount>30){
						clearInterval(intervalCount);
					}
					
					if(t==""){
						return;
					}
					if(!(t==1 || t=="1")){
						return;
					}
					
					clearInterval(intervalCount);
					$(".bx-pager-link").text("");
					$(".bx-pager-link").eq(0).append("차별화된<br>진료시스템<span class='ico'></span>");
					$(".bx-pager-link").eq(1).append("연구하는<br>이젠<span class='ico'></span>");
					$(".bx-pager-link").eq(2).append("세계속의<br>이젠<span class='ico'></span>");
					$(".bx-pager-link").eq(3).append("첨단<br>이젠<span class='ico'></span>");

					
				}



			});
			</script>

		</section>
		<!-- //sub_contents -->

<? include "../include/footer.php" ?>	