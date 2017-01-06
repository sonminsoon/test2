<?
$mn = 3;
$sn = 3;
$cn = 0;
?>
<? include "../include/head.php" ?>	

		


		<!-- sub_contents -->
		<div class="sub_contents">
			<div class="tab_content">
				<ul class="tab_menu grid4">
					<li class="active"><a href="#tab">메조테라피</a></li>
					<li><a href="#tab">빨간 메조</a></li>
					<li><a href="#tab">카복시</a></li>
					<li><a href="#tab">HPL</a></li>
				</ul>

				<ul class="cont">
					<li><img src="../images/cont/body/body03_cont01.jpg"></li>
					<li><img src="../images/cont/body/body03_cont02.jpg"></li>
					<li><img src="../images/cont/body/body03_cont03.jpg"></li>
					<li><img src="../images/cont/body/body03_cont04.jpg"></li>
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
