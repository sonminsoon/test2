<?	
ini_set('max_execution_time', 3000);
header("Content-Type:text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/include/dbconfig.php";
exit;
// http://ezen.openhaja.com/codetest/migra.php?sub_no=1
// http://ezen.openhaja.com/codetest/migra.php?sub_no=4

//대괄호배열
function getArrayString($str)
{
	$arr1 = array();
	$arr1['data'] = array();
	$arr2 = explode('[',$str);
	foreach($arr2 as $val)
	{
		if($val=='') continue;
		$arr1['data'][] = str_replace(']','',$val);
	}
	$arr1['count'] = count($arr1['data']);
	return $arr1;
}
if ($sub_no == 1) {
	$tb = "notice";
} else if ($sub_no == 2) {
	$tb = "online_counsel";
}


// 게시판 초기화
mysql_query("delete from tbl_".$tb);
mysql_query("ALTER TABLE tbl_".$tb." AUTO_INCREMENT=1");


	if ($sub_no == 1) {
		// 1,4 공지사항과 이벤트
		//$sql = "SELECT * FROM admin_board_01 where Sub_No IN ('1', '4') and Fname!='' order by No asc";
		$sql = "SELECT * FROM admin_board_01 where Sub_No IN ('1', '4') order by No asc";
	} else if ($sub_no == 2) {
		// 온라인 상담
		$sql = "SELECT * FROM admin_board_01 where Sub_No=2 and No=No1 order by No asc";
	}

	$result = mysql_query( $sql );
	while( $row = mysql_fetch_array( $result ) ) {

		unset($Data);
		unset($networks);
		$max_result = mysql_query( "select max(tblIntFid) from tbl_".$tb );
		$rows = mysql_fetch_row( $max_result );
			
			$Data["fid"]			= ( $rows[0] ) ? $rows[0] + 1 : 1;		
			$Data["thread"]			= "A";			
			$Data["field"]			= '';

			$Data["ss_id"]=($sub_no == 1)?'admin':'';
			
			$Data["passwd"]			= $row["Pass"];
			$Data["name"]=($sub_no == 1)?'이젠의원':$row["Name"];
			$Data["subject"]		= addslashes($row["Title"]);
			$Data["phone"]			= '';
			$Data["mobile"]			= '';
			$Data["content"]		= addslashes( $row["Cont"] );
			$Data["blnsms"]			= 'N';
			$Data["email"]			= $row["Email"];
			$Data["blnemail"]		= 'N';
			$Data["notice"]			= ($row["B_Title"]==1)?'1':'0';
			$Data["secret"]			= ($row["P_up"]==1)?'Y':'N';
			$Data["show"]		= 'Y';
			$Data["intgp"]			= $_POST["intGP"];
			$Data["ip"]				= $row["Ip"];
			$Data["etc"]			= '';	
			$Data["ref"]			= $row["Cnt"];		// 히트수
			$Data["regdate"]		=	$row["Wdate"];
			$Data["moddate"]		=	'';
			
			unset($saveFile);
			unset($liefile);
			if ($row["Fname"]) {
				echo 'Fname=  '.$row["No"].'--'.$row["Fname"];
				$org_img = '/_data/temp/'.$row['Fname'];
				$new_img = '/_data/'.$tb.'/'.$row['Fname'];
				copy($_SERVER['DOCUMENT_ROOT'].$org_img, $_SERVER['DOCUMENT_ROOT'].$new_img);
				//$saveFile = $new_img.'|';
				//$liefile = $row['Fname'].'|';
			}

			$iQue = "INSERT INTO tbl_".$tb." SET ";
			$iQue .= " tblIntFid='".$Data["fid"]."',";
			$iQue .= " tblStrThread='".$Data["thread"]."',";
			$iQue .= " tblIntField='".$Data["field"]."',";
			$iQue .= " tblStrID='".$Data["ss_id"]."',";
			$iQue .= " tblStrName='".$Data["name"]."',";
			$iQue .= " tblStrPass='".$Data["passwd"]."',";
			$iQue .= " tblStrSubject='".$Data["subject"]."',";
			$iQue .= " tblStrHomePage='".$Data["homepage"]."',";
			$iQue .= " tblStrPhone='".$Data["phone"]."',";
			$iQue .= " tblStrMobile='".$Data["mobile"]."',";
			$iQue .= " tblBlnSms='".$Data["blnsms"]."',";
			$iQue .= " tblStrEmail='".$Data["email"]."',";
			$iQue .= " tblBlnEmail='".$Data["blnemail"]."',";
			$iQue .= " tblIntNotice='".$Data["notice"]."',";
			$iQue .= " tblStrSecret='".$Data["secret"]."',";
			$iQue .= " tblStrComment='".$Data["content"]."',";
			$iQue .= " tblStrSaveFile='".$saveFile."',";
			$iQue .= " tblStrLieFile='".$liefile."',";
			$iQue .= " tblStrThum1='".$Data["thumfile1"]."',";
			$iQue .= " tblStrThum2='".$Data["thumfile2"]."',";
			$iQue .= " tblStrThum3='".$Data["thumfile3"]."',";
			$iQue .= " tblStrThum4='".$Data["thumfile4"]."',";
			$iQue .= " tblStrThum5='".$Data["thumfile5"]."',";
			$iQue .= " tblIntRef='".$Data["ref"]."',";			// 히트수
			$iQue .= " tblStrShow='".$Data["show"]."',";
			$iQue .= " tblStrIp='".$Data["ip"]."',";
			$iQue .= " tblIntGP='".$Data["intgp"]."',";
			$iQue .= " tblStrEtc='".abs($row["No"])."',";
			$iQue .= " tblDtmRegDate='".$Data["regdate"]."'";
			

			$iSql = mysql_query($iQue) or die(mysql_error());
	}

	mysql_query("UPDATE tbl_".$tb." SET tblStrComment = REPLACE(tblStrComment,'http://ezenskin.co.kr/admin/admin_board_01/data/','/_data/notice/')");
?>
<?=$tb;?> OK!!