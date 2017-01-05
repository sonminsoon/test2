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
<? 
$class01 = "";
$class02 = "";
$class03 = "";
$class04 = "";
$class05 = "";
$class06 = "";
$class07 = "";
$class08 = "";
$class09 = "";
$class10 = "";

switch($tabNum){
	case('1'): $class01 = "over"; break;
	case('2'): $class02 = "over"; break;
	case('3'): $class03 = "over"; break;
	case('4'): $class04 = "over"; break;
	case('5'): $class05 = "over"; break;
	case('6'): $class06 = "over"; break;
	case('7'): $class07 = "over"; break;
	case('8'): $class08 = "over"; break;
	case('9'): $class09 = "over"; break;
	case('10'): $class10 = "over"; break;
} ?>

<div class="m_top_bar">&nbsp;</div>
<div class="m_top_area">
	<div class="m_top">
		<h1><a href="/"><img src="/new/images/common/logo02.png" alt="홈으로 가기"></a></h1>
		<table summary="" class="m_menu">
			<caption></caption>
			<tbody>
				<tr>
					<? if ($_SESSION['ss_name']) { ?>
					<td><a href="javascript:;" onclick="javascript:document.formout.submit();" class="<?=$class01;?>">로그아웃</a></td> <!-- 로그인전 -->
					<td><a href="/member/modify.php" class="<?=$class04;?>">회원정보수정</a></td> <!-- 로그인후 -->
					<? if (!$_SESSION['sns']) { ?><td><a href="/member/out.php" class="<?=$class05;?>">회원탈퇴</a></td> <!-- 로그인후 --><? } ?>
					<? } else { ?>
					<td><a href="/member/login.php" class="<?=$class01;?>">회원로그인</a></td> <!-- 로그인전 -->
					<td><a href="/member/join01.php" class="<?=$class02;?>">회원가입</a></td> <!-- 로그인전 -->
					<td><a href="/member/idpw.php" class="<?=$class03;?>">아이디/비밀번호 찾기</a></td> <!-- 로그인전 -->
					<? } ?>
					<td><a href="/member/provision.php" class="<?=$class06;?>">회원약관</a></td>
					<td><a href="/member/privacy.php" class="last <?=$class07;?>">개인정보처리(취급)방침</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>