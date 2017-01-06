<?
$mn = 2;
$sn = 5;
$cn = 0;
?>
<? include "../include/head.php" ?>	

		


		<!-- sub_contents -->
		<div class="sub_contents">
			

			<div class="tab_content">
				<ul class="tab_menu grid4">
					<li class="active"><a href="#tab">무좀</a></li>
					<li><a href="#tab">사마귀/티눈</a></li>
					<li><a href="#tab">알러지/습진</a></li>
					<li><a href="#tab">대상포진</a></li>
				</ul>

				<ul class="cont">
					<li><img src="../images/cont/skin/skin05_cont01.jpg"></li>
					<li><img src="../images/cont/skin/skin05_cont02.jpg"></li>
					<li><img src="../images/cont/skin/skin05_cont03.jpg"></li>
					<li><img src="../images/cont/skin/skin05_cont04.jpg"></li>
				</ul>
			</div>

		</div>
		<!-- //sub_contents -->
		
		<script>
			$(function () {	
				$(".tab_content").tabContInit();
			});
		</script>

		

<? include "../include/footer.php" ?>	
