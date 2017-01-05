
		<?if($mn!=0){?>
		<!-- bottom_counsel -->
		<div id="bottom_counsel">
			<img src="../images/common/counsel_img.jpg" class="counsel_img item" alt="빠른상담">

			
			<form action="" method="post" enctype="multipart/form-data" name="wform" class="form" onsubmit="return counselSubmit()">
				<input type="hidden" name="" value="main">
				<table>
					<colgroup>
						<col style="width:90px;">
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
								<div class="f_row">
									<select class="w02">
										<option value="">010</option>												
									</select>
									<input type="text" class="w02">
									<input type="text" class="w02">
								</div>
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
								<textarea class="w01"></textarea>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="cont01">
					<p class="agree_text">
						<a href="" class="agree_link">개인정보 취급방침 보기</a>
						<input type="checkbox" id="agree"><label for="agree"> 동의합니다.</label>
					</p>
					<p><input type="image" src="../images/common/btn_counsel.jpg" alt=""/></p>
				</div>
			</form>

		</div>
		<!-- //bottom_counsel -->


		<div id="bottom_qlink">
			<ul>
				<li><a href="#link"><img src="../images/common/qlink01.jpg" alt="카톡상담"></a></li>
				<li><a href="#link"><img src="../images/common/qlink02.jpg" alt="온라인상담"></a></li>
				<li><a href="#link"><img src="../images/common/qlink03.jpg" alt="온라인예약"></a></li>
				<li><a href="#link"><img src="../images/common/qlink04.jpg" alt="수술후기"></a></li>
				<li><a href="#link"><img src="../images/common/qlink05.jpg" alt="오시는길"></a></li>
				<li><img src="../images/common/qlink06.jpg" alt="상담센터"></li>
			</ul>
		</div>

		<?}?>
	</div>
	<!-- //container -->



	<footer>
		<div id="bottom_menu">
			<ul>
				<li><a href="#link"><img src="../images/common/bmenu01.jpg" alt="로그인"></a></li>
				<li><a href="#link"><img src="../images/common/bmenu02.jpg" alt="회원가입"></a></li>
				<li><a href="#link"><img src="../images/common/bmenu03.jpg" alt="이용약관"></a></li>
				<li><a href="#link"><img src="../images/common/bmenu04.jpg" alt="개인정보취급방침"></a></li>
				<li><a href="#link"><img src="../images/common/bmenu05.jpg" alt="PC버전"></a></li>
			</ul>
		</div>	

		<div class="footer_cont">
			<p><img src="../images/common/b_logo.jpg" alt="ezen"></p>
			<address>
				상호: 이젠의원   주소: 충남 천안시 동남구 만남로 50 ( 신부동 터미널프라자 7층)<br>
				대표: 이란   전화 : 042-561-7978~9   팩스: 041-561-7970<br>
				사업자등록번호: 312-31-66442<br>
				Copyright ⓒ 2015 EZEN AllRight Reserved. 
			</address>
		</div>
	</footer>
</div>

</body>
</html>