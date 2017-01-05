<?
$mn = 2;
$sn = 2;
$cn = 0;
?>
<? include "../include/head.php" ?>	

		


		<!-- sub_contents -->
		<div class="sub_contents">
			<div class="img_wrap01">			
				<div>
					<img src="../images/sub/visual/visual0201.jpg" class="img">
				</div>
			</div>


			<div class="img_wrap01">			
				<div>
					<img src="../images/sub/cont/skin/skin02_cont01.jpg" class="img">
					<img src="../images/sub/cont/skin/skin02_cont02.jpg" class="img">
				</div>
			</div>


			<div class="cont_roll_type01">
				<div class="slider_wrap">
					<ul>
						<li><a href=""><img src="../images/sub/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
						<li><a href=""><img src="../images/sub/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
						<li><a href=""><img src="../images/sub/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
						<li><a href=""><img src="../images/sub/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
					</ul>			
				</div>
			</div>

			<script>
			$(function () {
				// 제휴사
				var cont_roll_type01 = $('.cont_roll_type01 .slider_wrap ul').bxSlider({		
					auto : false,
					mode:'vertical',
				});

				$(document).on('click','.cont_roll_type01',function() {
					cont_roll_type01.stopAuto();
					cont_roll_type01.startAuto();
				});
				$(".bx-pager-link").text("");
				$(".bx-pager-link").eq(0).append("차별화된 진료시스템<span class='ico'></span>");
				$(".bx-pager-link").eq(1).append("연구하는 이젠<span class='ico'></span>");
				$(".bx-pager-link").eq(2).append("세계속의 이젠<span class='ico'></span>");
				$(".bx-pager-link").eq(3).append("첨단 이젠<span class='ico'></span>");
			});
			</script>
		</div>
		<!-- //sub_contents -->
		


		

<? include "../include/footer.php" ?>	
