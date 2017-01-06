<?
$mn = 0;
$sn = 0;
$cn = 0;
?>
<? include "../include/head.php" ?>	
<? include "../include/head_proc.php" ?>	
<? for ( $i = 0 ; $i < $nPopCnt; $i++ ) {    // 팝업창 추가?>
	<div id="popup<?=$arrPopup[$i]['idx']?>" style="cursor:pointer; position:absolute; z-index:<?=(1000 + $i )?>; width:<?=$arrPopup[$i]['width']?>px; height:<?=$arrPopup[$i]['height']?>; left:<?=$arrPopup[$i]['left']?>px; top: <?=$arrPopup[$i]['top']?>px; display:block;">
		<table width="100%" height="<?=$arrPopup[$i]['height']?>" border="0" bordercolor="#212121" cellpadding="0" cellspacing="0">
			<tr valign="top">
				<td class="popStyle"><?=$arrPopup[$i]['comment']?></td>
			</tr>
			<tr height="25">
				<td align="center" bgcolor="#212121"  >
					<table width="90%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td class="notice_black" style="font-weight:bold; text-align:left;">
								<input type="checkbox" style="width:14px;height:14px;" name="pop_cookie" onClick="set_cookie('popup<?=$arrPopup[$i]['idx']?>','doned',1);hide_popup('popup<?=$arrPopup[$i]['idx']?>');">
								<font color="white">오늘 하루 창을 열지 않습니다.</font></b></td>
							<td class="notice_black" align="right"><span style="cursor:pointer;font-weight:bold;" onClick="hide_popup('popup<?=$arrPopup[$i]['idx']?>');"><font color="white">[닫기]</font></span></td>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<script>
	if ( get_cookie( 'popup<?=$arrPopup[$i]['idx']?>' )  == 'doned' ){
		hide_popup('popup<?=$arrPopup[$i]['idx']?>');
	}
	</script>
	<script>
	    Q_drg_drp.add('popup<?=$arrPopup[$i]['idx']?>');
	</script>
<? } ?>

		<!-- main_visual -->
		<div id="main_visual">
			<div class="slider_wrap">
				<ul>
					<li><a href=""><img src="../images/main/main_visual02.jpg" alt=""></a></li>
					<li><a href=""><img src="../images/main/main_visual01.jpg" alt=""></a></li>					
				</ul>			
			</div>
		</div>
		<!-- //main_visual -->
		

		
		<!-- main_banner -->
		<div id="main_banner">
			<div class="slider_wrap">
				<ul>
					<li><a href=""><img src="../images/main/main_banner01.jpg" alt=""></a></li>
					<li><a href=""><img src="../images/main/main_banner02.jpg" alt=""></a></li>
					<li><a href=""><img src="../images/main/main_banner03.jpg" alt=""></a></li>
				</ul>			
			</div>
		</div>
		<!-- //main_banner -->


		<!-- main_cont01 -->
		<div id="main_cont01">
			<div>
				<p>
					<a href=""><img src="../images/main/main_cont01.jpg" alt=""></a>
					<a href=""><img src="../images/main/main_cont02.jpg" alt=""></a>
				</p>
				<p class="w01">
					<a href=""><img src="../images/main/main_cont03.jpg" alt=""></a>
				</p>
			</div>
		</div>
		<!-- //main_cont01 -->


		<!-- main_tech -->
		<div id="main_tech">
			<img src="../images/main/main_tech.jpg" alt="">
		</div>
		<!-- //main_tech -->
		

		<div id="main_board">
			<div class="board">
				<h2>공지사항</h2>
				<a href="javascript:void(0);" class="btn btn_prev">이전</a>
				<a href="javascript:void(0);" class="btn btn_next">다음</a>

				<img src="../images/main/board_img01.jpg" alt="">

				<ul>
					<?  for( $i = 0; $i < sizeof($Data_0); $i++ ){ ?>
					<li><a href="<?=$Data_0[$i]["viewlink"]?>"><?=$Data_0[$i]["subject"]?></a><span class="date"><?=$Data_0[$i]["regdate"]?></span></li>
					<? }
					if (!sizeof($Data_0)) {
					?>
					<li>현재 등록된 글이 없습니다.</li>
					<? } ?>
				</ul>
			</div>
			<div class="board">
				<h2>온라인상담</h2>
				<a href="javascript:void(0);" class="btn btn_prev">이전</a>
				<a href="javascript:void(0);" class="btn btn_next">다음</a>

				<img src="../images/main/board_img02.jpg" alt="">

				<ul>
					<?  for( $i = 0; $i < sizeof($Data_1); $i++ ){ ?>
					<li><a href="<?=$Data_1[$i]["viewlink"]?>"><?=$Data_1[$i]["subject"]?></a><span class="date"><?=$Data_1[$i]["regdate"]?></span></li>
					<? }
					if (!sizeof($Data_1)) {
					?>
					<li>현재 등록된 글이 없습니다.</li>
					<? } ?>
				</ul>
			</div>
			<div class="board">
				<h2>수술후기</h2>
				<a href="javascript:void(0);" class="btn btn_prev">이전</a>
				<a href="javascript:void(0);" class="btn btn_next">다음</a>

				<img src="../images/main/board_img03.jpg" alt="">

				<ul>
					<?  for( $i = 0; $i < sizeof($Data_2); $i++ ){ ?>
					<li><a href="<?=$Data_2[$i]["viewlink"]?>"><?=$Data_2[$i]["subject"]?></a><span class="date"><?=$Data_2[$i]["regdate"]?></span></li>
					<? }
					if (!sizeof($Data_2)) {
					?>
					<li>현재 등록된 글이 없습니다.</li>
					<? } ?>
				</ul>
			</div>
		</div>



		<!-- main_cont02 -->
		<div id="main_cont02">
			<img src="../images/main/customer.jpg" usemap="#customer_map" alt="">
			<a href="http://plus.kakao.com/home/j7b2abq3" target="_blank"><img src="../images/main/kakao.jpg" alt=""></a>

			<map name="customer_map">
				<area shape="rect" coords="61,135,307,181" href="#">
				<area shape="rect" coords="61,184,307,230" href="#">
			</map>
		</div>
		<!-- //main_cont02 -->

<? include "../include/footer.php" ?>	