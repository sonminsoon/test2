<?php 
$db_host="121.78.88.141";
$db_user="wwwezen3675";
$db_pass="wwwezen@@";
$db_name="wwwezen";

if(!$connect) {
	$connect = mysql_connect($db_host, $db_user, $db_pass);	
	mysql_select_db($db_name, $connect);
	if (!$connect) {
		$errno=mysql_errno($connect);
		$errmsg=mysql_error($connect);
		echo "데이터 베이스에 연결할 수 없습니다.<br>";
		echo "에러코드: $errno, $errmsg ";
		exit;
	}
	mysql_query('set names utf8');
}


?>