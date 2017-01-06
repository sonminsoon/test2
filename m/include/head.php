<!DOCTYPE HTML>
<html lang='ko'>
<head>
<title>ezen</title>
<meta charset="utf-8">
<meta name='keywords' content='ezen' >
<meta name='description' content='ezen' >
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi" >

<link rel='stylesheet' href='../css/common.css' media='all' />
<link rel='stylesheet' href='../css/board.css' media='all' />
<link rel='stylesheet' href='../css/layout.css' media='all' />
<link rel='stylesheet' href='../css/jquery.bxslider.css' media='all' />
<?if($mn<=0){?>
<link rel='stylesheet' href='../css/main.css' media='all' />
<?}else{?>
<link rel='stylesheet' href='../css/sub.css' media='all' />
<?}?>




<script src='../js/jquery-1.11.2.min.js'></script>
<script src='../js/jquery.easing.1.3.js'></script>
<script src='../js/jquery.bxslider.min.js'></script>
<script src='../js/gnb.js'></script><!-- 메뉴관련 -->
<?if($mn<=0){?>
<script src='../js/main.js'></script><!-- 메인관련 -->
<?}else{?>
<script src='../js/lnb.js'></script><!-- 서브메뉴관련 -->
<?}?>
<script>var mn=<?=$mn?>; var sn=<?=$sn?>; var cn=<?=$cn?>;</script>

</head>
<body>

<div id="wrap">
	<header>
		<a href="#open" class="btn_menu">메뉴토글</a>
		<h1><a href="/"><img src="../images/common/t_logo.jpg" alt=""></a></h1>
		<a href="tel:0415617978" class="btn_tel">041-561-7978</a>
	</header>
	<!-- gnb -->
	<div id="gnb">
		<p class="top_menu">
			<a href=""><img src="../images/common/btn_online.jpg" alt="온라인상담"></a>
			<a href=""><img src="../images/common/btn_talk.jpg" alt="카톡상담"></a>
		</p>
		<a href="javascript:void(0);" class="btn_close"></a>
		<ul class="gnb_list">
			<li>
				<a href="../intro/intro01.php">EZEN 클리닉</a>
				<div class="sub">
					<ul>
						<li><a href="../intro/intro01.php">이젠클리닉</a></li>
						<li><a href="../intro/intro02.php">둘러보기</a></li>
						<li><a href="../intro/intro03.php">소식&amp;이벤트</a></li>
						<li><a href="../intro/intro04.php">의료장비</a></li>
						<li><a href="../intro/intro05.php">진료안내</a></li>
						<li><a href="../intro/intro06.php">찾아오시는길</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="../skin/skin01.php">피부센터</a>
				<div class="sub">
					<ul>
						<li><a href="../skin/skin01.php">기미색소</a></li>
						<li><a href="../skin/skin02.php">여드름/흉터</a></li>
						<li><a href="../skin/skin03.php">홍조</a></li>
						<li><a href="../skin/skin04.php">트리플점제거</a></li>
						<li><a href="../skin/skin05.php">질환센터</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="../body/body01.php">비만센터</a>	
				<div class="sub">
					<ul>
						<li><a href="../body/body01.php">44주사</a></li>
						<li><a href="../body/body02.php">뉴뱅퀴시</a></li>
						<li><a href="../body/body03.php">메조/카폭시/HPL</a></li>
						<li><a href="../body/body04.php">굿BODY필</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="../hair/hair01.php">제모센터</a>					
				<div class="sub">
					<ul>
						<li><a href="../hair/hair01.php">남성제모</a></li>
						<li><a href="../hair/hair02.php">여성제모</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="../lifting/lifting01.php">리프팅/안티에이징</a>					
				<div class="sub">
					<ul>
						<li><a href="../lifting/lifting01.php">에어젯</a></li>
						<li><a href="../lifting/lifting02.php">코브라V리프팅</a></li>
						<li><a href="../lifting/lifting03.php">울트라스킨</a></li>
						<li><a href="../lifting/lifting04.php">리쥬란힐러</a></li>
						<li><a href="../lifting/lifting05.php">셀라피아기주사</a></li>
						<li><a href="../lifting/lifting06.php">비타민센터</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="../peiti/peiti01.php">보톡스/필러</a>					
				<div class="sub">
					<ul>
						<li><a href="../peiti/peiti01.php">내성이적은EZEN보톡스</a></li>
						<li><a href="../peiti/peiti02.php">EZEN네추럴필러</a></li>
						<li><a href="../peiti/peiti03.php">BODY톡신</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="../counsel/counsel01.php">상담 및 후기</a>					
				<div class="sub">
					<ul>
						<li><a href="../counsel/counsel01.php">온라인상담</a></li>
						<li><a href="../counsel/counsel02.php">생생후기</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- //gnb -->
	<p class="hide_bg"></p>


		
	<!-- container -->
	<div id="container">
		
		<?if(!($mn<=0)){?>
		<!-- lnb -->
		<section id="lnb" class="after">
			<h2 class="btn"></h2>
			<h3 class="btn"></h3>
			<div></div>			
		</section>
		<!-- //lnb -->
		<?}?>