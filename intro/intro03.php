<?
$mn = 1;
$sn = 3;
$cn = 0;
?>
<? include "../include/head.php" ?>	

		


		<!-- sub_contents -->
		<div class="sub_contents">
			<div class="img_wrap01">			
				<div>
					<img src="../images/cont/intro/intro03_visual.jpg" class="img">
				</div>
			</div>


			<div class="board_container">			
				<?
					$tb = "notice";  // $tb = 게시판생성 테이블명
					include $_SERVER['DOCUMENT_ROOT']."/board/index.php";
				?>				
			</div>


		</div>
		<!-- //sub_contents -->
		


		

<? include "../include/footer.php" ?>	
