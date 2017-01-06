		
		<?if($mn!=0){?>

		<div class="cont_roll_type01">
			<div class="slider_wrap">
				<ul>
					<li><a href=""><img src="../images/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
					<li><a href=""><img src="../images/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
					<li><a href=""><img src="../images/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
					<li><a href=""><img src="../images/cont/skin/skin02_cont0301.jpg" alt=""></a></li>
				</ul>			
			</div>
		</div>

		<script>
		$(function () {
			var cont_roll_type01 = $('.cont_roll_type01 .slider_wrap ul').bxSlider({		
				auto : false,
				mode:'vertical',
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
				$(".bx-pager-link").eq(0).append("차별화된 진료시스템<span class='ico'></span>");
				$(".bx-pager-link").eq(1).append("연구하는 이젠<span class='ico'></span>");
				$(".bx-pager-link").eq(2).append("세계속의 이젠<span class='ico'></span>");
				$(".bx-pager-link").eq(3).append("첨단 이젠<span class='ico'></span>");
				
			}


			
		});
		</script>
		<!-- sub_bottom_cont -->
		<div id="sub_bottom_cont">
			<div>
				<div class="cont_wrap">
					<a href=""><img src="../images/common/bottom_cont01.jpg" class="item" alt="온라인상담"></a>
					<a href=""><img src="../images/common/bottom_cont02.jpg" class="item" alt="이벤트"></a>
					<a href=""><img src="../images/common/bottom_cont03.jpg" class="item" alt="장비소개"></a>
					<!-- bottom_counsel -->
					<div id="bottom_counsel" class="item">
						<img src="../images/common/counsel_img.jpg" class="counsel_img item" alt="빠른상담">

						
						<form action="" method="post" enctype="multipart/form-data" name="wform" class="form" onsubmit="return counselSubmit()">
							<input type="hidden" name="" value="main">
							<table>
								<colgroup>
									<col style="width:74px;">
									<col style="width:*;">
								</colgroup>	
								<tbody>		
									<tr>
										<th scope="row">이름</th>
										<td>									
											<input type="text" class="w01">
										</td>
									</tr>
									<tr>
										<th scope="row">핸드폰</th>
										<td>									
											<p class="row">
												<select class="w02">
													<option value="">010</option>												
												</select>
												<input type="text" class="w02">
												<input type="text" class="w02">
											</p>
										</td>
									</tr>
									<tr>
										<th scope="row">치료과목</th>
										<td>
											<select class="w01">
												<option value="">치료과목을 선택하세요.</option>												
											</select>
										</td>
									</tr>
									<tr>
										<th scope="row">상담내용</th>
										<td>
											<textarea></textarea>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="cont01">
								<p class="agree_text">
									<a href="/member/privacy.php" class="agree_link">개인정보<br>취급방침 보기</a>
									<input type="checkbox" id="agree"><label for="agree"> 동의합니다.</label>
								</p>
								<p><input type="image" src="../images/common/btn_counsel.jpg" alt=""/></p>
							</div>
						</form>

					</div>
					<!-- //bottom_counsel -->
					<a href="http://plus.kakao.com/home/j7b2abq3" target="_blank"><img src="../images/common/bottom_cont04.jpg" class="item" alt="카톡상담 신청하러가기"></a>
				</div>
			</div>
		</div>
		<!-- sub_bottom_cont -->
		<?}?>


	</div>
	<!-- //container -->

	<!-- footer -->	
	<div id="footer">
		
		<div class="footer01">
			<div class="footer_cont">
				<ul id="footer_menu01">
					<li><a href="/member/privacy.php">개인정보처리방침</a></li>
					<li><a href="/member/provision.php">이용약관</a></li>
					<li><a href="/intro/intro01.php">이젠소개</a></li>
					<li><a href="/counsel/counsel01.php">온라인상담</a></li>
				</ul>

				<ul id="footer_menu02">
					<li><a href="/intro/intro06.php"><img src="../images/common/footer_menu02_01.jpg" alt="오시는길"></a></li>
					<li><a href="/intro/intro05.php"><img src="../images/common/footer_menu02_02.jpg" alt="진료시간"></a></li>
					<li><a href="/counsel/counsel01.php"><img src="../images/common/footer_menu02_03.jpg" alt="온라인상담"></a></li>
					<li><a href="http://plus.kakao.com/home/j7b2abq3" target="_blank"><img src="../images/common/footer_menu02_04.jpg" alt="카톡상담"></a></li>
					<li><a href=""><img src="../images/common/footer_menu02_05.jpg" alt="페이스북"></a></li>
				</ul>
			</div>
		</div>

		<div class="footer02">			                     
			<div class="footer_cont">			
				<p class="adress">
				상호: 이젠의원<span class="space"></span>주소: 충남 천안시 서북구 백석동 54-31<span class="space"></span>대표: 이란<span class="space"></span>전화 : 042-561-7978~9<span class="space"></span>팩스: 041-561-7970<span class="space"></span>사업자등록번호: 312-31-66442
				</p>
				<p class="copyright">
				Copyright ⓒ 2015 EZEN AllRight Reserved. 
				</p>
			</div>
		</div>
		
	</div> 
	<!-- //footer -->


	


	


</div>
<!-- //wrap -->
</body>
</html>