<?
	
	$db_host = 'localhost';
	$db_name = 'theslim0825all';
	$db_uid = 'theslim0825all';
	$db_passwd = '!#All0825Sl!M81';

	$connect = mysql_connect($db_host, $db_uid, $db_passwd) or die("MySQL Server 연결에 실패했습니다");
	mysql_select_db($db_name,$connect);
	mysql_query("set names utf8");

?>