<?	
ini_set('max_execution_time', 3000);
header("Content-Type:text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/include/dbconfig.php";
exit;
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


// http://ezen.openhaja.com/codetest/migra_re.php?sub_no=2
$tb = "online_counsel";

// 게시판 초기화

		// 온라인 상담
		$sql = "SELECT * FROM admin_board_01 where Sub_No=2 and No!=No1 order by No desc";
		$result = mysql_query( $sql );
		while( $row = mysql_fetch_array( $result ) ) {

		unset($Data);
			
			$iQue = "update tbl_".$tb." SET ";
			$iQue .= " tblStrReply='".addslashes($row["Cont"])."',";
			$iQue .= " tblStrReID='admin',";
			$iQue .= " tblStrReName='이젠의원',";
			$iQue .= " tblDtmReDate='".$row["Wdate"]."' where tblStrEtc='".abs($row['No1'])."'";

			$iSql = mysql_query($iQue) or die(mysql_error());
	}
	mysql_query("UPDATE tbl_notice SET tblStrEtc=''");
	mysql_query("UPDATE tbl_online_counsel SET tblStrEtc=''");
?>
<?=$tb;?> OK!!