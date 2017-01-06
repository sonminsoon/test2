<?
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);
include $_SERVER['DOCUMENT_ROOT']."/include/session_start.php";
include $_SERVER['DOCUMENT_ROOT']."/include/dbconfig.php";
include $_SERVER['DOCUMENT_ROOT']."/include/function.php";
include $_SERVER['DOCUMENT_ROOT']."/include/conn_save.php";
?>
<!DOCTYPE html>
<html lang='ko'>
<head>
<meta charset="utf-8"/>
<meta name='keywords' content="" />
<meta name='description' content="" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<meta name='viewport' content='width=1400,user-scalable=yes, target-densitydpi=device-dpi' />
<title>ezen</title>

<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css">
<link rel='stylesheet' href='../css/jquery.bxslider.css' media='all' />
<link rel='stylesheet' href='../css/style.css' media='all' />
<link rel='stylesheet' href='../css/layout.css' media='all' />
<?if($mn<=0){?>
<link rel='stylesheet' href='../css/main.css' media='all' />
<?}else{?>
<link rel='stylesheet' href='../css/sub.css' media='all' />
<?}?>


<script src='../js/jquery-1.12.4.min.js'></script>
<script src='../js/jquery.easing.1.3.js'></script>
<script src='../js/jquery.bxslider.min.js'></script>
<script src='../js/common.js'></script><!-- 공통 -->
<script src='../js/gnb.js'></script><!-- 메뉴 -->
<?if($mn<=0){?>
<script src='../js/main.js'></script><!-- 메인관련 -->
<?}else{?>
<script src='../js/sub.js'></script><!-- 서브관련 -->
<?}?>
<script>var mn=<?=$mn?>; var sn=<?=$sn?>; var cn=<?=$cn?>;</script>
</head>

<body>
<!-- wrap -->
<form name="formout" action="/member/memgaip.php" method="post" target="toplog_act">
	<input type="hidden" name="url" value="<?=$_SERVER["REQUEST_URI"]?>">
	<input type="hidden" name="mode" value="out">
</form>
<iframe name="toplog_act" frameborder="0" width="0" height="0" style="display:none;"></iframe>
<div id="wrap">
	<?if($mn<=0){?>
	<div id="top_event">
		<img src="../images/common/event_img01.jpg" class="img"/>
		<a href="#toggle" onclick="popClose()"><img src="../images/common/btn_close.png" class="btn_close"/></a>
	</div>
	<?}?>
	<!-- header -->
	<div id="header">

		<!-- header_top -->
		<div id="header_top">
			<!-- util_menu -->
			<ul id="util_menu">
				<? if ($_SESSION['ss_name']) { ?>
				<li><a href="javascript:;" onclick="javascript:document.formout.submit();">로그아웃</a></li>
				<li><a href="/member/modify.php" target="_self">정보수정</a></li>
				<? } else { ?>
				<li><a href="/member/login.php" target="_self">로그인</a></li>
				<li><a href="/member/join01.php" target="_self">회원가입</a></li>
				<? } ?>
				<li><a href="/intro/intro06.php">오시는길</a></li>
			</ul>				
			<!-- //util_menu -->

			<h1 class="logo"><a href="/"><img src="../images/common/t_logo.jpg" alt="ezen"></a></h1>	

			<img src="../images/common/top_tel.jpg" alt="대표전화 : 041.561.7978" class="top_tel">
		</div>
		<!-- //header_top -->


		<!-- gnb -->
		<div id="gnb">		
			<div class="gnb_list">
				<a href="/" class="btn_home">홈</a>
				<ul class="after">
					<li>
						<a href="/intro/intro01.php">EZEN 클리닉</a>
						<ul>
							<li><a href="/intro/intro01.php">이젠클리닉</a></li>
							<li><a href="/intro/intro02.php">둘러보기</a></li>
							<li><a href="/intro/intro03.php">소식&amp;이벤트</a></li>
							<li><a href="/intro/intro04.php">의료장비</a></li>
							<li><a href="/intro/intro05.php">진료안내</a></li>
							<li><a href="/intro/intro06.php">찾아오시는길</a></li>
						</ul>
					</li>
					<li>
						<a href="/skin/skin01.php">피부센터</a>
						<ul>
							<li><a href="/skin/skin01.php">기미색소</a></li>
							<li><a href="/skin/skin02.php">여드름/흉터</a></li>
							<li><a href="/skin/skin03.php">홍조</a></li>
							<li><a href="/skin/skin04.php">트리플점제거</a></li>
							<li><a href="/skin/skin05.php">질환센터</a></li>
						</ul>
					</li>
					<li>
						<a href="/body/body01.php">비만센터</a>	
						<ul>
							<li><a href="/body/body01.php">44주사</a></li>
							<li><a href="/body/body02.php">뉴뱅퀴시</a></li>
							<li><a href="/body/body03.php">메조/카폭시/HPL</a></li>
							<li><a href="/body/body04.php">굿BODY필</a></li>
						</ul>
					</li>
					<li>
						<a href="/hair/hair01.php">제모센터</a>					
						<ul>
							<li><a href="/hair/hair01.php">남성제모</a></li>
							<li><a href="/hair/hair02.php">여성제모</a></li>
						</ul>
					</li>
					<li>
						<a href="/lifting/lifting01.php">리프팅/안티에이징</a>					
						<ul>
							<li><a href="/lifting/lifting01.php">에어젯</a></li>
							<li><a href="/lifting/lifting02.php">코브라V리프팅</a></li>
							<li><a href="/lifting/lifting03.php">울트라스킨</a></li>
							<li><a href="/lifting/lifting04.php">리쥬란힐러</a></li>
							<li><a href="/lifting/lifting05.php">셀라피아기주사</a></li>
							<li><a href="/lifting/lifting06.php">비타민센터</a></li>
						</ul>
					</li>
					<li>
						<a href="/peiti/peiti01.php">보톡스/필러</a>					
						<ul>
							<li><a href="/peiti/peiti01.php">내성이적은EZEN보톡스</a></li>
							<li><a href="/peiti/peiti02.php">EZEN네추럴필러</a></li>
							<li><a href="/peiti/peiti03.php">BODY톡신</a></li>
						</ul>
					</li>
					<li>
						<a href="/counsel/counsel01.php">상담 및 후기</a>					
						<ul>
							<li><a href="/counsel/counsel01.php">온라인상담</a></li>
							<li><a href="/counsel/counsel02.php">생생후기</a></li>
						</ul>
					</li>
				
				</ul>
				<a href="javascript:void(0);" class="btn_menu">홈</a>
			</div>

		</div>
		<!-- //gnb -->		

	</div>
	<!-- //header -->	

	<div id="total_menu">
		<a href="#menu_close" class="btn_close">메뉴닫기</a>
	</div>




	
	<!-- r_banner -->
	<div id="r_banner">
		<h2><img src="../images/common/title_rquick.jpg" alt="QUICK MENU"></h2>
		<ul>
			<li><a href="/counsel/counsel01.php"><img src="../images/common/rquick02.jpg" alt="온라인상담"/></a></li>
			<li><a href="/counsel/counsel02.php"><img src="../images/common/rquick04.jpg" alt="수술후기"/></a></li>
			<li><a href="/intro/intro06.php"><img src="../images/common/rquick05.jpg" alt="오시는길"/></a></li>
			<li><img src="../images/common/rquick06.jpg" alt=""/></li>
		</ul>
	</div>
	<!-- //r_banner -->

	


	<!-- container -->
	<div id="container">

		<?if($mn!=0){?>
		<!-- sub_top -->
		<div id="sub_top">
			<?if($mn==1 || $mn==7){?>
			<img src="../images/sub/sub_top01.jpg" class="img">
			<?}else{?>
			<img src="../images/sub/sub_top02.jpg" class="img">
			<?}?>
			<ul>
				<!--
				<li><a href="/skin/skin01.php">기미색소</a></li>
				<li><a href="/skin/skin02.php">여드름/흉터</a></li>
				<li><a href="/skin/skin03.php">홍조</a></li>
				<li><a href="/skin/skin04.php">트리플점제거</a></li>
				<li><a href="/skin/skin05.php">질환센터</a></li>
				-->
			</ul>
		</div>
		<!-- //sub_top -->

		<!-- lnb -->
		<div id="lnb">
			<h2><!--피부센터--></h2>
			<ul>
				<!--
				<li><a href="/skin/skin01.php">기미색소</a></li>
				<li><a href="/skin/skin02.php">여드름/흉터</a></li>
				<li><a href="/skin/skin03.php">홍조</a></li>
				<li><a href="/skin/skin04.php">트리플점제거</a></li>
				<li><a href="/skin/skin05.php">질환센터</a></li>
				-->
			</ul>
			<a href="#"><img src="../images/btn/btn_top.png" alt="TOP"></a>
		</div>
		<!-- //lnb -->
		<?}?>