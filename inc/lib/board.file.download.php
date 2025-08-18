<?

	include_once $_SERVER[DOCUMENT_ROOT]."/inc/lib/base.class.php";



	$no		= $_REQUEST[no];
	$fld		= $_REQUEST[fld];

	$query = " select thumb_image, file_attach_1, file_attach_2, file_attach_3, file_attach_4, file_attach_5,
					file_attach_origin_1, file_attach_origin_2, file_attach_origin_3, file_attach_origin_4, file_attach_origin_5
					from nb_board 
					where no = $no ";
	//echo $query;exit;
	$result=mysql_query($query);
	$data=mysql_fetch_array($result);
	if(!$data){
		error("정보를 찾을 수 없습니다");
	}

	$thumb_image					= $data[thumb_image];
	$file_attach_1					= $data[file_attach_1];
	$file_attach_2					= $data[file_attach_2];
	$file_attach_3					= $data[file_attach_3];
	$file_attach_4					= $data[file_attach_4];
	$file_attach_5					= $data[file_attach_5];

	$file_attach_origin_1			= $data[file_attach_origin_1];
	$file_attach_origin_2			= $data[file_attach_origin_2];
	$file_attach_origin_3			= $data[file_attach_origin_3];
	$file_attach_origin_4			= $data[file_attach_origin_4];
	$file_attach_origin_5			= $data[file_attach_origin_5];

	$filename = "";
	$filename_origin = "";

	if($fld == "thumb"){
		$filename = $thumb_image;
		$filename_origin = $thumb_image;
	}else if($fld == "attach1"){
		$filename = $file_attach_1;
		$filename_origin = $file_attach_origin_1;
	}else if($fld == "attach2"){
		$filename = $file_attach_2;
		$filename_origin = $file_attach_origin_2;
	}else if($fld == "attach3"){
		$filename = $file_attach_3;
		$filename_origin = $file_attach_origin_3;
	}else if($fld == "attach4"){
		$filename = $file_attach_4;
		$filename_origin = $file_attach_origin_4;
	}else if($fld == "attach5"){
		$filename = $file_attach_5;
		$filename_origin = $file_attach_origin_5;
	}


	$filepath = $UPLOAD_DIR_BOARD."/".$filename;


	$filesize = filesize($filepath);
	$path_parts = pathinfo($filepath);
	$filename = $path_parts['basename'];
	$extension = $path_parts['extension'];


	$ie = isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false); 
 
	if($ie) {
	   // UTF-8에서 EUC-KR로 캐릭터셋 변경
	   $filename_origin = utf2euc($filename_origin);
	 
	   // IE인 경우 헤더 변경
	   header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	   header('Pragma: public');
	}else{
	   // IE가 아닌 경우 일반 헤더 적용
	   header("Cache-Control: no-cache, must-revalidate"); 
	   header('Pragma: no-cache');
	}

	

	header("Pragma: public");
	header("Expires: 0");
	header("Content-Type: application/octet-stream");
	//header("Content-Disposition: attachment; filename=$filename_origin");
	header("Content-Disposition: attachment; filename=\"$filename_origin\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: $filesize");

	ob_clean();
	flush();
	readfile($filepath);



?>
