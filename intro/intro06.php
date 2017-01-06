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
			

			<!-- * Daum 지도 - 지도퍼가기 -->
			<!-- 1. 지도 노드 -->
			<div class="mgt100">
			<div id="daumRoughmapContainer1483614018502" class="root_daum_roughmap root_daum_roughmap_landing"></div>
			</div>

			<!--
				2. 설치 스크립트
				* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
			-->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1483614018502",
					"key" : "f7tu",
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
