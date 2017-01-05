<? include $_SERVER['DOCUMENT_ROOT']."/include/session_start.php";	
include $_SERVER['DOCUMENT_ROOT']."/include/dbconfig.php";
include $_SERVER['DOCUMENT_ROOT']."/include/function.php";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

if(!$_POST["tblStrName"]) metaBack("성명을 입력하여 주세요.");
if(!$_POST["tblStrMobile"]) metaBack("휴대폰 번호를 입력하여 주세요.");

switch($_POST['tblType']){
	case 'main':
		if(!$_POST["tblIntField1"] && !$_POST["tblIntField2"]) metaBack("상담부위를 선택하여 주세요.");

		$alertMsg = '빠른 비용상담이 정상적으로 접수되었습니다.';
		break;
}
  

	$iQue = "INSERT INTO tb_counsel SET ";
	$iQue .= "tblType='".trim($_POST["tblType"])."',";
	$iQue .= "tblStrName='".trim($_POST["tblStrName"])."',";
	$iQue .= "tblStrMobile='".trim($_POST["tblStrMobile"])."',";
	$iQue .= "tblStrEmail='".$_POST["tblStrEmail"]."',";
	$iQue .= "tblIntField1='".$_POST["tblIntField1"]."',";
	$iQue .= "tblIntField2='".$_POST["tblIntField2"]."',";
	$iQue .= "tblIntStatus='1',";
	$iQue .= "tblStrComment='".$_POST["tblStrComment"]."',";
	$iQue .= "tblDtmRegDate='".date("YmdHis")."',";
	$iQue .= "tblip='".$_SERVER['REMOTE_ADDR']."'";
	$stmt=mysql_query($iQue,$connect);

	if ($stmt) {
		alertTour($alertMsg, $_SERVER['HTTP_REFERER']);
	} else {
		metaBack('등록시 문제가 발생하였습니다. 고객센터로 문의 바랍니다.');
	}

mysql_close($connect);
unset($connect);
?>