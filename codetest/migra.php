<?	
ini_set('max_execution_time', 3000);
header("Content-Type:text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/include/dbconfig.php";
/*
그누보드에서 온라인 상담만 데이터 이전
*/
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

$tb = "online_counsel";

// 게시판 초기화
mysql_query("delete from tbl_".$tb);
mysql_query("ALTER TABLE tbl_".$tb." AUTO_INCREMENT=1");

	$sql = "select * from g5_write_online_consult where wr_reply != 'A' order by wr_id asc";
	$result = mysql_query( $sql );
	while( $row = mysql_fetch_array( $result ) ) {

		unset($Data);
		unset($networks);
		$max_result = mysql_query( "select max(tblIntFid) from tbl_".$tb );
		$rows = mysql_fetch_row( $max_result );
			
			$Data["fid"]			= ( $rows[0] ) ? $rows[0] + 1 : 1;		
			$Data["thread"]			= "A";			
			$Data["field"]			= '';
			$Data["ss_id"]			= $row['mb_id'];
			$Data["passwd"]			= $row["wr_password"];
			$Data["name"]			= $row["wr_name"];
			$Data["subject"]		= addslashes($row["wr_subject"]);
			$Data["phone"]			= '';
			$Data["mobile"]			= '';
			$Data["content"]		= addslashes( $row["wr_content"] );
			$Data["blnsms"]			= 'N';
			$Data["email"]			= $row["wr_email"];
			$Data["blnemail"]		= 'N';
			$Data["notice"]			= $row["notice"];
			$Data["secret"]='Y';

			if ( !$row["show_row"] || $row["show_row"] == '1' ) {
				$Data["show"]		= 'Y';
			} else if ( $row["show_row"] == '0' ) {
				$Data["show"]		= "N";
			}
			$Data["intgp"]			= $_POST["intGP"];
			$Data["ip"]				= $row["wr_ip"];
			$Data["etc"]			= $_POST["etc"];		
			$Data["ref"]			= $row["wr_hit"];		// 히트수
			$Data["regdate"]		=	$row["wr_datetime"];
			$Data["moddate"]		=	$row["wr_last"];
			
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
			$iQue .= " tblStrLieFile='".$Data["liefile"]."',";
			$iQue .= " tblStrThum1='".$Data["thumfile1"]."',";
			$iQue .= " tblStrThum2='".$Data["thumfile2"]."',";
			$iQue .= " tblStrThum3='".$Data["thumfile3"]."',";
			$iQue .= " tblStrThum4='".$Data["thumfile4"]."',";
			$iQue .= " tblStrThum5='".$Data["thumfile5"]."',";
			$iQue .= " tblIntRef='".$Data["ref"]."',";			// 히트수
			$iQue .= " tblStrShow='".$Data["show"]."',";
			$iQue .= " tblStrIp='".$Data["ip"]."',";
				
			if ($tb == 'online_counsel') {
				$iQue .= " tblIntGP='".$row["network"]."',";
			} else {
				$iQue .= " tblIntGP='".$Data["intgp"]."',";
			}
			$iQue .= " tblStrEtc='".abs($row["wr_num"])."',";
			$iQue .= " tblDtmRegDate='".$Data["regdate"]."'";
			

			$iSql = mysql_query($iQue) or die(mysql_error());
	}

	mysql_query("UPDATE tbl_".$tb." SET tblStrComment = REPLACE(tblStrComment,'http://hooclinic.co.kr/','/')");
?>
<?=$tb;?> OK!!