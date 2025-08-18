<?php
	include_once $_SERVER[DOCUMENT_ROOT]."/inc/lib/base.class.php";
	ini_set('display_errors', 'on');
	error_reporting(-1);

	$path = $_SERVER[DOCUMENT_ROOT]."/upload";
	if(is_dir($path))
		echo "ok";
	else
		mkdir($path, 0777, true);echo "maked";


	if(!file_exists($path)){
		if (!mkdir($path, 0777, true)) {//0777
			die('Failed to create folders...');
		}
	}
?>