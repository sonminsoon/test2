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


// http://ppeum1.com/codetest/migra_re.php
$tb = "online_counsel";

// 게시판 초기화

	$sql = "select * from g5_write_online_consult where wr_reply = 'A' order by wr_id asc";
	$result = mysql_query( $sql );
	while( $row = mysql_fetch_array( $result ) ) {

		unset($Data);
			
			$iQue = "update tbl_".$tb." SET ";
			$iQue .= " tblStrReply='".addslashes($row["wr_content"])."',";
			$iQue .= " tblStrReID='".$row["mb_id"]."',";
			$iQue .= " tblStrReName='".$row["wr_name"]."',";
			$iQue .= " tblDtmReDate='".$row["wr_datetime"]."' where tblStrEtc='".abs($row['wr_num'])."'";

			$iSql = mysql_query($iQue) or die(mysql_error());
	}
?>
<?=$tb;?> OK!!