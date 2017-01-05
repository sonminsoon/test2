<?
$mn = 1;
$sn = 6;
$cn = 0;
?>
<? include "../include/head.php" ?>	

		


		<!-- sub_contents -->
		<div class="sub_contents">
			<div class="img_wrap01">			
				<div>
					<img src="../images/cont/intro/intro06_visual.jpg" class="img">
				</div>
			</div>
			
			<!--
				* Daum 지도 - 약도서비스
				* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
				* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
			-->
			<div class="mgt100">
			<!-- 1. 약도 노드 -->			
			<div id="daumRoughmapContainer1483252729668" class="root_daum_roughmap root_daum_roughmap_landing"></div>
			</div>

			<!-- 2. 설치 스크립트 -->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1483252729668",
					"key" : "f4ic",
					"mapWidth" : "1280",
					"mapHeight" : "660"
				}).render();
			</script>

			<div class="img_wrap01">			
				<div>
					<img src="../images/cont/intro/intro06_cont01.jpg" class="img">
				</div>
			</div>


		</div>
		<!-- //sub_contents -->
		


		

<? include "../include/footer.php" ?>	
