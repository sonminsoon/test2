<?
$mn = 7;
$sn = 2;
$cn = 0;
?>
<? include "../include/head.php" ?>	

		


		<!-- sub_contents -->
		<div class="sub_contents">
			<div class="img_wrap01">			
				<div>
					<img src="../images/cont/counsel/counsel02_visual.jpg" class="img">
				</div>
			</div>


			<div class="board_container">			
				<?
					$tb = "replyboard";  // $tb = 게시판생성 테이블명
					include $_SERVER['DOCUMENT_ROOT']."/board/index.php";
				?>
			</div>


		</div>
		<!-- //sub_contents -->
		


		

<? include "../include/footer.php" ?>	
