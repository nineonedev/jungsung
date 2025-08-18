<?php


	session_start();
	header('Content-Type: image/gif');

	$captcha = '';

	/*패턴*/
	$patten = '123456789123456789'; //패턴 설정
	for($i = 0, $len = strlen($patten) -1; $i < 5; $i++){ //6가지 문자 생성
		$captcha .= $patten[rand(0, $len)];
	}

	$_SESSION['captcha_secure'] = $captcha;
	
	$img = imagecreatetruecolor (80, 20);
    // imagecreatetruecolor(넓이, 높이)

	$bgc		= imagecolorallocate ($img, 0, 66, 37); //배경색 
	$tc		= imagecolorallocate ($img, 255, 255, 255); //글자색
	$line		= imagecolorallocate ($img, 0, 78, 162); //라인색
	// imagecolorallocate(이미지생성변수, 빨강[R], 녹색[G], 파랑[B] )[RGB코드]

	// 이미지 테두리 설정
	imagefilledrectangle ($img, 0, 0, 80, 20, $bgc);
	imagestring($img, 5, 5, 2, $captcha, $tc); //문자크기, 문자 여백 x, y, 문자내용, 문자색상
	imagegif($img);
	imagedestroy($img);


?>