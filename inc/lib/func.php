<?

//페이지 이동
function location($go_url){
	echo "<script>document.location=\"$go_url\";</script>";
	exit;
}

// 에러 출력
function error($msg, $go_url="")
{

	if($go_url == "")
		echo "<script>alert(\"$msg\");history.go(-1);</script>";
	else
		echo "<script>alert(\"$msg\");document.location=\"$go_url\";</script>";

	exit;

}


// 에러 출력 후 닫기
function error_close($msg)
{
	echo "<script>alert(\"$msg\");self.close();</script>";
	exit;

}

// 경고창 출력
function alert($msg, $go_url="")
{

	if($go_url == "")
		echo "<script>alert(\"$msg\");history.go(-1);</script>";
	else
		echo "<script>alert(\"$msg\");document.location=\"$go_url\";</script>";

}


// 경고창만 출력
function alertonly($msg)
{
	echo "<script>alert(\"$msg\");</script>";

}

// 완료 메세지 출력
function complete($com_msg, $go_url="")
{

	if($go_url == "")
		echo "<script>window.setTimeout(\"history.go(-1)\",600);</script>";
	else
	echo "<script>window.setTimeout(\"document.location='$go_url';\",600);</script>";

	echo "<body><table width=100% height=100%><tr><td align=center><font size=2>$com_msg</font></td></tr></table></body>";

}

//체크박스 체크확인 리턴
function chkPrint($val, $target){
	if($val == $target)
		return "checked";
	else
		return "";
}

function selectedPrint($val, $target){
	if($val == $target)
		return "selected";
	else
		return "";
}


// 문자열 끊기 (이상의 길이일때는 ... 로 표시)
function cut_str($msg, $cut_size)
{

	if($cut_size<=0) return $msg;
	if(ereg("\[re\]",$msg)) $cut_size=$cut_size+4;
	for($i=0;$i<$cut_size;$i++) if(ord($msg[$i])>127) $han++; else $eng++;
	$cut_size=$cut_size+(int)$han*0.6;
	$point=1;
	for ($i=0;$i<strlen($msg);$i++) {
		if ($point>$cut_size) return $pointtmp."...";
		if (ord($msg[$i])<=127) {
			$pointtmp.= $msg[$i];
			if ($point%$cut_size==0) return $pointtmp."...";
		} else {
			if ($point%$cut_size==0) return $pointtmp."...";
			$pointtmp.=$msg[$i].$msg[++$i];
			$point++;
		}
		$point++;
	}

	return $pointtmp;

}


// 페이지 리스트 출력
function print_pagelist($page, $list_amount, $page_count, $param, $page_type = "")
{

   global $code, $catcode, $orderby, $skin_dir, $ptype;

   if($skin_dir == "") $skin_dir = "/admin/manage";
   if($param != "") $param = "&".$param;

	if(($page%$list_amount) == 0) $tmp = $page-1;
	else $tmp = $page;

	$spage = floor($tmp/$list_amount)*$list_amount+1;
	if($spage <= 1) $ppage = 1;
	else $ppage = $spage - $list_amount;

	$epage = $spage+$list_amount-1;
	if($epage >= $page_count){
		$epage = $page_count;
		$npage = $page_count;
	}else{
		$npage = $epage + 1;
	}

	if(!strcmp($page_type, "C")) {
		$page_name = "cpage";
	} else {
		$page_name = "page";
	}

	if($epage > 0) {

	   echo "    <table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center'>";
	   echo "      <table border='0' cellspacing='0' cellpadding='0'>";
	   echo "        <tr>";
	   echo "          <td width='16'><a href='$PHP_SELF?ptype=$ptype&$page_name=1$param'><img src='$skin_dir/image/btn_prev2.gif' align='absmiddle' border=0'></a></td>";
	   echo "          <td width='16'><a href='$PHP_SELF?ptype=$ptype&$page_name=$ppage$param'><img src='$skin_dir/image/btn_prev.gif' align='absmiddle' border=0'></a></td>";
	   echo "          <td align='center'>&nbsp; ";

	   for($spage; $spage <= $epage; $spage++){
	      if($page == $spage) echo "<b>$spage</b> / ";
	      else echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=$spage$param'> $spage </a> / ";
	   }

	   echo "          &nbsp; </td>";
	   echo "          <td width='16' align='right'><a href='$PHP_SELF?ptype=$ptype&$page_name=$npage$param'><img src='$skin_dir/image/btn_next.gif' align='absmiddle' border='0'></a></td>";
	   echo "          <td width='16' align='right'><a href='$PHP_SELF?ptype=$ptype&$page_name=$page_count$param'><img src='$skin_dir/image/btn_next2.gif' align='absmiddle' border='0'></a></td>";
	   echo "        </tr>";
	   echo "      </table>";
		echo "    </td></tr></table>";

	}

}



// 모바일 페이지 리스트 출력
function print_pagelist_m($page, $list_amount, $page_count, $param, $page_type = ""){

   global $code, $catcode, $orderby, $skin_dir, $ptype;

   if($skin_dir == "") $skin_dir = "/admin/manage";
   if($param != "") $param = "&".$param;

	if(($page%$list_amount) == 0) $tmp = $page-1;
	else $tmp = $page;

	$spage = floor($tmp/$list_amount)*$list_amount+1;
	if($spage <= 1) $ppage = 1;
	else $ppage = $spage - $list_amount;

	$epage = $spage+$list_amount-1;
	if($epage >= $page_count){
		$epage = $page_count;
		$npage = $page_count;
	}else{
		$npage = $epage + 1;
	}

	if(!empty($page_type)) {
		$page_name = strtolower($page_type)."page";
	} else {
		$page_name = "page";
	}

	if($epage > 0) {

	   echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=1$param'><img src='../img/sub/prev2.gif' /></a> ";
	   echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=$ppage$param'><img src='../img/sub/prev.gif' /></a> ";

	   for($spage; $spage <= $epage; $spage++){
	      if($page == $spage) echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=$spage$param' class='on'>$spage</a> ";
	      else echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=$spage$param'>$spage</a> ";
	   }

	   echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=$npage$param'><img src='../img/sub/next.gif' /></a> ";
	   echo "<a href='$PHP_SELF?ptype=$ptype&$page_name=$page_count$param'><img src='../img/sub/next2.gif' /></a>";

	}

}


// 파일 확장자 체크
function file_check($filename, $file_str = "php|htm|html|inc|htm|shtm|ztx|dot|cgi|pl|phtm|ph|exe"){

	$fnames = explode(".", $filename);
	$fext = $fnames[count($fnames)-1];
	$fext = strtolower($fext);
	$file_str = strtolower($file_str);

	//업로드 금지 확장자 체크
	if(eregi($file_str, $fext)) {
		error("해당 파일은 업로드할 수 없는 형식입니다.");
		exit;
	}

}

//난수 생성
function getRndCode($len) { 

    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= $len) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 




//난수 생성(숫자만)
function getRndNumericCode($len) { 

    $chars = "02345678902345678902345678902345678"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= $len) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 

//인젝션 방지 치환 
function safeStr($value){ 
	//return mysql_real_escape_string($value);
	return safeFilter($value);
}


function safeFilter($str) {

	if (!get_magic_quotes_gpc()) $str = addslashes($str);

	$search = array("--","#",";");
	$replace = array("\--","\#","\;");
	$str = str_replace($search, $replace, $str);

	return $str;

}


function xss_clean($data) {
// Fix &entity\n;
$data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
$data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
$data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
$data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

// Remove any attribute starting with "on" or xmlns
$data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

// Remove javascript: and vbscript: protocols
$data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
$data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

// Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
$data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

// Remove namespaced elements (we do not need them)
$data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

do{
    // Remove really unwanted tags
    $old_data = $data;
    $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
}
while ($old_data !== $data);

// we are done...
return $data;

}


//D-DAY 계산
function getDday($target){

	$end_date = date($target); //디데이 날짜 YYYY-MM-DD
    $d_day = floor(( strtotime(substr($end_date,0,10)) -
                    strtotime(date('Y-m-d')) )/86400);

     return $d_day;
}


//ago 계산

function time_ago($date) {

    if (empty($date)) {
        return "No date provided";
    }
    $periods = array("초", "분", "시간", "일", "주", "개월", "년", "10년");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    $now = time();
    $unix_date = strtotime($date);
		// check validity of date
		if (empty($unix_date)) {
			return "Bad date";
		}
		// is it future date or past date
		if ($now > $unix_date) {
			$difference = $now - $unix_date;
			$tense = "전";
		} else {
			$difference = $unix_date - $now;
			$tense = "from now";
		}
		for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
			$difference /= $lengths[$j];
		}
		$difference = round($difference);
		if ($difference != 1) {
			//$periods[$j].= "s";
		}

    return "$difference$periods[$j] {$tense}";
}

function getRemodeAddr(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}


/**
 * UTF-8 => CP949 로 디코딩 Function
 */
 function decode_cp949($data){
  return iconv("UTF-8", "CP949", rawurldecode($data)); 
 }
 
 /**
 * CP949 => UTF-8 로 디코딩 Function
 */
 function decode_utf8($data){
  return iconv("CP949", "UTF-8", rawurldecode($data)); 
 }



function httpPostNano($data){

$url = "https://ollehsms.com/API/send.php";
$port = '443';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PORT, $port);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_TIMEOUT,3);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,5);
$response = curl_exec($ch);

$error_ck = curl_errno($ch);
curl_close($ch);

if(!empty($error_ck))
	return $error_ck;
else
	return $response;

}

function httpPost($url,$params)
{
  $postData = '';
   //create name value pairs seperated by &
   foreach($params as $k => $v) 
   { 
      $postData .= $k . '='.$v.'&'; 
   }
   $postData = rtrim($postData, '&');
 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_POST, count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
	curl_setopt($ch, CURLOPT_REFERER, 'http://www.wizform.co.kr');

    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
 
}



function httpGet($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
}


function mobile_chk() {
    $ary_m = array("iPhone","iPod","IPad","Android","Blackberry","SymbianOS|SCH-M\d+","Opera Mini","Windows CE","Nokia","Sony","Samsung","LGTelecom","SKT","Mobile","Phone");
    for($i=0; $i<count($ary_m); $i++){
        if(preg_match("/$ary_m[$i]/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return $ary_m[$i];
            break;
        }
    }
    return "PC";
}


function checked($origin, $target){
	
	if($origin == $target)
		return "checked";
	else
		return "";

}


function selected($origin, $target){
	
	if($origin == $target)
		return "selected";
	else
		return "";

}



function getMillisecond(){

  list($microtime,$timestamp) = explode(' ',microtime());
  $time = $timestamp.substr($microtime, 2, 3);
 
  return $time;
}


/*비정상 한글 리플레이스 */
function doFilterHangle($txt){
		
	$valueText = $txt;
	$valueText = html_entity_decode($valueText);	
	$valueText = str_replace('=','',$valueText);	
	$valueText = str_replace('<','',$valueText);		
	$valueText = str_replace('>','',$valueText);	
	$valueText = str_replace('셪','셔',$valueText);
	$valueText = str_replace('셛','셔',$valueText);	
	$valueText = str_replace('빋','비',$valueText);	
	$valueText = str_replace('짇','지',$valueText);
	$valueText = str_replace('긷','기',$valueText);
	$valueText = str_replace('킫','키',$valueText);
	$valueText = str_replace('틷','티',$valueText);
	$valueText = str_replace('핃','피',$valueText);
	$valueText = str_replace('힏','히',$valueText);
	$valueText = str_replace('싲','시',$valueText);
	$valueText = str_replace('샾','샵',$valueText);


	$valueText = str_replace('갺','각',$valueText);
	$valueText = str_replace('갂','각',$valueText);
	$valueText = str_replace('갘','각',$valueText);
	$valueText = str_replace('갛','각',$valueText);
	$valueText = str_replace('갗','각',$valueText);
	$valueText = str_replace('갃','각',$valueText);
	$valueText = str_replace('갏','갈',$valueText);
	$valueText = str_replace('갋','갈',$valueText);
	$valueText = str_replace('걑','가',$valueText);
	$valueText = str_replace('갻','각',$valueText);
	$valueText = str_replace('갃','각',$valueText);
	$valueText = str_replace('걏','각',$valueText);
	$valueText = str_replace('걓','각',$valueText);
	$valueText = str_replace('걎','각',$valueText);
	$valueText = str_replace('걐','각',$valueText);
	$valueText = str_replace('갻','갹',$valueText);
	$valueText = str_replace('걇','걀',$valueText);
	$valueText = str_replace('걃','걀',$valueText);


	$valueText = str_replace('낰','나',$valueText);
	$valueText = str_replace('낳','나',$valueText);
	$valueText = str_replace('낯','나',$valueText);
	$valueText = str_replace('낱','나',$valueText);
	$valueText = str_replace('낛','나',$valueText);
	$valueText = str_replace('낧','나',$valueText);
	$valueText = str_replace('낢','나',$valueText);
	$valueText = str_replace('낛','나',$valueText);
	$valueText = str_replace('낲','나',$valueText);
	$valueText = str_replace('냨','냐',$valueText);
	$valueText = str_replace('냫','냐',$valueText);
	$valueText = str_replace('냧','냐',$valueText);
	$valueText = str_replace('냩','냐',$valueText);
	$valueText = str_replace('냓','냐',$valueText);
	$valueText = str_replace('냟','냐',$valueText);
	$valueText = str_replace('냚','냐',$valueText);
	$valueText = str_replace('냓','냐',$valueText);
	$valueText = str_replace('냪','냐',$valueText);
	$valueText = str_replace('냤','낫',$valueText);

	$valueText = str_replace('닼','다',$valueText);
	$valueText = str_replace('닿','다',$valueText);
	$valueText = str_replace('닻','다',$valueText);
	$valueText = str_replace('닽','다',$valueText);
	$valueText = str_replace('닧','다',$valueText);
	$valueText = str_replace('닳','다',$valueText);
	$valueText = str_replace('닮','다',$valueText);
	$valueText = str_replace('닾','다',$valueText);
	$valueText = str_replace('댴','다',$valueText);
	$valueText = str_replace('댷','다',$valueText);
	$valueText = str_replace('댳','다',$valueText);
	$valueText = str_replace('댵','다',$valueText);
	$valueText = str_replace('댟','닥',$valueText);
	$valueText = str_replace('댫','달',$valueText);
	$valueText = str_replace('댦','달',$valueText);
	$valueText = str_replace('댟','닥',$valueText);
	$valueText = str_replace('댶','답',$valueText);
	$valueText = str_replace('댰','닷',$valueText);

	$valueText = str_replace('랔','라',$valueText);
	$valueText = str_replace('랗','라',$valueText);
	$valueText = str_replace('랓','라',$valueText);
	$valueText = str_replace('랕','라',$valueText);
	$valueText = str_replace('띿','라',$valueText);
	$valueText = str_replace('랋','랄',$valueText);
	$valueText = str_replace('랆','랄',$valueText);
	$valueText = str_replace('랖','랍',$valueText);
	$valueText = str_replace('럌','라',$valueText);
	$valueText = str_replace('럏','라',$valueText);
	$valueText = str_replace('럋','라',$valueText);
	$valueText = str_replace('럍','라',$valueText);
	$valueText = str_replace('랷','락',$valueText);
	$valueText = str_replace('럃','랄',$valueText);
	$valueText = str_replace('랾','랄',$valueText);
	$valueText = str_replace('랷','락',$valueText);
	$valueText = str_replace('럎','랍',$valueText);
	$valueText = str_replace('럈','랏',$valueText);

	$valueText = str_replace('맠','마',$valueText);
	$valueText = str_replace('맣','마',$valueText);
	$valueText = str_replace('맟','마',$valueText);
	$valueText = str_replace('맡','맏',$valueText);
	$valueText = str_replace('맋','막',$valueText);
	$valueText = str_replace('맗','말',$valueText);
	$valueText = str_replace('맒','말',$valueText);
	$valueText = str_replace('맢','마',$valueText);
	$valueText = str_replace('먘','마',$valueText);
	$valueText = str_replace('먛','마',$valueText);
	$valueText = str_replace('먗','마',$valueText);
	$valueText = str_replace('먙','마',$valueText);
	$valueText = str_replace('먃','막',$valueText);
	$valueText = str_replace('먏','말',$valueText);
	$valueText = str_replace('먊','말',$valueText);
	$valueText = str_replace('먃','막',$valueText);
	$valueText = str_replace('먚','맙',$valueText);
	$valueText = str_replace('먓','맛',$valueText);

	$valueText = str_replace('샄','사',$valueText);
	$valueText = str_replace('샇','사',$valueText);
	$valueText = str_replace('샃','사',$valueText);
	$valueText = str_replace('샅','사',$valueText);
	$valueText = str_replace('삯','사',$valueText);
	$valueText = str_replace('삻','살',$valueText);
	$valueText = str_replace('삶','살',$valueText);
	$valueText = str_replace('샆','삽',$valueText);
	$valueText = str_replace('샼','샤',$valueText);
	$valueText = str_replace('샿','샤',$valueText);
	$valueText = str_replace('샻','샤',$valueText);
	$valueText = str_replace('샽','샵',$valueText);
	$valueText = str_replace('샧','샥',$valueText);
	$valueText = str_replace('샳','샬',$valueText);
	$valueText = str_replace('샳','샬',$valueText);
	$valueText = str_replace('샧','샥',$valueText);
	$valueText = str_replace('샾','샵',$valueText);
	$valueText = str_replace('샸','샷',$valueText);


	$valueText = str_replace('찼','찻',$valueText);
	$valueText = str_replace('챁','차',$valueText);
	$valueText = str_replace('챃','차',$valueText);
	$valueText = str_replace('챀','차',$valueText);
	$valueText = str_replace('챂','차',$valueText);
	$valueText = str_replace('챁','차',$valueText);
	$valueText = str_replace('챴','찻',$valueText);
	$valueText = str_replace('챹','챠',$valueText);
	$valueText = str_replace('챻','챠',$valueText);
	$valueText = str_replace('챸','챠',$valueText);
	$valueText = str_replace('챺','챠',$valueText);
	$valueText = str_replace('챹','챠',$valueText);

	$valueText = str_replace('핬','하',$valueText);
	$valueText = str_replace('핱','하',$valueText);
	$valueText = str_replace('핳','하',$valueText);
	$valueText = str_replace('핰','하',$valueText);
	$valueText = str_replace('핲','합',$valueText);
	$valueText = str_replace('핯','하',$valueText);
	$valueText = str_replace('햩','햐',$valueText);
	$valueText = str_replace('햤','햐',$valueText);
	$valueText = str_replace('햫','햐',$valueText);
	$valueText = str_replace('햨','햐',$valueText);
	$valueText = str_replace('햪','햐',$valueText);
	$valueText = str_replace('햧','햐',$valueText);

	


	return $valueText;
}


/* 특수문자 제거 */

function doRemoveSpecial($str){
	
	$returnstr = "";
	$returnstr = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $str);

	return $returnstr;

}




/* 텍스트 링크를 href 로 변환 */

function makeLinks($str, $target) {
	$reg_exUrl = "/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	$urls = array();
	$urlsToReplace = array();
	if(preg_match_all($reg_exUrl, $str, $urls)) {
		$numOfMatches = count($urls[0]);
		$numOfUrlsToReplace = 0;
		for($i=0; $i<$numOfMatches; $i++) {
			$alreadyAdded = false;
			$numOfUrlsToReplace = count($urlsToReplace);
			for($j=0; $j<$numOfUrlsToReplace; $j++) {
				if($urlsToReplace[$j] == $urls[0][$i]) {
					$alreadyAdded = true;
				}
			}
			if(!$alreadyAdded) {
				array_push($urlsToReplace, $urls[0][$i]);
			}
		}
		$numOfUrlsToReplace = count($urlsToReplace);
		for($i=0; $i<$numOfUrlsToReplace; $i++) {
			$str = str_replace($urlsToReplace[$i], "<a href=\"".$urlsToReplace[$i]."\" ".$target.">".$urlsToReplace[$i]."</a> ", $str);
		}
		return $str;
	} else {
		return $str;
	}
}


/* mobile check */
function doCheckMobile(){
	if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']) ) {
		echo "<meta http-equiv='Refresh' content='0;url=./m/'>"; exit;
	}
}


/* 
	image upload 
	imageUpoad(경로, $_FILE[대상], 기존파일(수정시 삭제위한), 오리지날 파일명 리턴 여부)
*/
function imageUpoad($path, $upfile, $origin_file, $return_origin){

	$uploads_dir =  $path;
	$allowed_ext = array('jpg','jpeg','png','gif', 'ico');
	$max_file_size = 10485760; //10MB

	$file				= $upfile;
	$file_saved	= "";
	$file_origin	= "";

	
	if (isset( $file ) && !empty( $file["name"] ) ) {

		$fileInfo					= pathinfo($file['name']);    // 파일명 정보
		$strExtension		= $fileInfo['extension'];		// 확장자 추출
		$strExtension		= strtolower($strExtension);	// 확장자 소문자로 변경


		$file_origin = $file['name'];
		
		if($file_origin['size'] >= $max_file_size) {
			echo "{\"result\":\"fail\", \"msg\":\"업로드는 10MB까지 가능합니다.\"}";
			exit;
		}

		if( !in_array($strExtension, $allowed_ext) ) {
			echo "{\"result\":\"fail\", \"msg\":\"허용되지 않는 파일입니다.\"}";
			exit;
		}

		$strFNameNew    = uniqid();   // 파일명유니크하게 생성
		if($strExtension) { $strFNameNew = "{$strFNameNew}.{$strExtension}"; }  // 파일명생성

		if(is_dir( $uploads_dir )){
		 
		}else{
			umask(0);
			mkdir($uploads_dir, 0757, true);	
		}

		$result = move_uploaded_file($file['tmp_name'], $uploads_dir . '/' . $strFNameNew); // 업로드

		if(!$result){
			echo "{\"result\":\"fail\", \"msg\":\"파일 업로드가 실패했습니다.\"}";
			exit;
		}

		$file_saved = $strFNameNew;
	
		if($origin_file){
			if(file_exists($uploads_dir."/".$origin_file))
				@unlink($uploads_dir."/".$origin_file);
		}
		
		if($return_origin){
			$fileArray = array('origin'=>$file_origin, 'saved'=>$file_saved);
		}else{
			$fileArray = array('origin'=>'', 'saved'=>$file_saved);
		}
		
		return $fileArray;

	}

}


/* 
	file Upoad
	fileUpoad(경로, $_FILE[대상], 기존파일(수정시 삭제위한), 오리지날 파일명 리턴 여부, 허용파일)
	allow : array('jpg','jpeg','png','gif');
*/
function fileUpoad($path, $upfile, $origin_file, $return_origin, $allow){

	$uploads_dir	= $path;
	$allowed_ext	= $allow;
	$max_file_size = 10485760; //10MB

	$file				= $upfile;
	$file_saved	= "";
	$file_origin	= "";

	
	if (isset( $file ) && !empty( $file["name"] ) ) {

		$fileInfo					= pathinfo($file['name']);    // 파일명 정보
		$strExtension		= $fileInfo['extension'];		// 확장자 추출
		$strExtension		= strtolower($strExtension);	// 확장자 소문자로 변경


		$file_origin = $file['name'];
		
		if($file_origin['size'] >= $max_file_size) {
			echo "{\"result\":\"fail\", \"msg\":\"업로드는 10MB까지 가능합니다.\"}";
			exit;
		}

		if( !in_array($strExtension, $allowed_ext) ) {
			echo "{\"result\":\"fail\", \"msg\":\"허용되지 않는 파일입니다.\"}";
			exit;
		}

		$strFNameNew    = uniqid();   // 파일명유니크하게 생성
		if($strExtension) { $strFNameNew = "{$strFNameNew}.{$strExtension}"; }  // 파일명생성

		if(is_dir( $uploads_dir )){
		 
		}else{
			umask(0);
			mkdir($uploads_dir, 0757, true);	
		}

		$result = move_uploaded_file($file['tmp_name'], $uploads_dir . '/' . $strFNameNew); // 업로드

		if(!$result){
			echo "{\"result\":\"fail\", \"msg\":\"파일 업로드가 실패했습니다.\"}";
			exit;
		}

		$file_saved = $strFNameNew;
	
		if($origin_file){
			if(file_exists($uploads_dir."/".$origin_file))
				@unlink($uploads_dir."/".$origin_file);
		}
		
		if($return_origin){
			$fileArray = array('origin'=>$file_origin, 'saved'=>$file_saved);
		}else{
			$fileArray = array('origin'=>'', 'saved'=>$file_saved);
		}
		
		return $fileArray;

	}

}


function imageDelete($path){
	
	if($path){
		$filepath = $path;
		if(file_exists($filepath))
			$result = @unlink($filepath);
	}

	return $result;

}





/* db proc */



function getBanner($loc , $limit=1, $return_type = 'html'){
	global $NO_SITE_UNIQUE_KEY;
	$arr = array();
	$query = "select * from nb_banner where sitekey = '$NO_SITE_UNIQUE_KEY' and b_loc='" . $loc . "' and b_view='Y' and ( (b_sdate <= CURDATE() and b_edate >= CURDATE() ) or b_none_limit = 'Y' ) order by b_idx asc , no asc limit 0, " . $limit ;

	$result =mysql_query($query);
	$r = array(); 
	while($row = mysql_fetch_assoc($result)) { 
		$r[] = $row; 
	} 
	if($result){
		mysql_free_result( $result );
	}
	return $r;
}

function getChangeDate($date, $format){
	return date($format, strtotime($date));
}


function getNBData($target){
	global $NO_SITE_UNIQUE_KEY;
	$query = "select  a.no, a.sitekey, a.target, a.contents, a.regdate
						from nb_data  a
					where a.sitekey = '$NO_SITE_UNIQUE_KEY' and a. target = '$target' ";
			
	$result=mysql_query($query);
	$r = array(); 
	while($row = mysql_fetch_assoc($result)) { 
		$r[] = $row; 
	} 
	if($result){
		mysql_free_result( $result );
	}
	return $r;
}

/* 
img tag 가져오기 
$option :  tag : 전체 추출 src : src 만 추출
*/
function getImageTag($contents, $option){

	preg_match_all("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $contents, $matches);
	if($option == "tag")
		return $matches[0];
	else
		return $matches[1];

}

function wrap_tag_iframe($str){
	// addslashes 체크
	$is_slashes = strpos($str , "\\\"") !== false || strpos($str , "\\\'") !== false;
	if($is_slashes){
		$str = stripslashes($str);
	}

	// 엔터키 입력 시
	$str = str_replace(array("<div class=\"iframe_wrap\"><br></div>"), array("<p><br></p>"), $str);

	// .iframe_wrap으로 감싸져있는 iframe 추출하여 따로 저장
	$match = array();
	preg_match_all("/<div class=\"iframe_wrap\">(.*?)<\/div>/is",$str, $match);
	$except = array();
	if(count($match[0]) > 0){
		$arr = array_filter(array_unique($match[0]));
		foreach($arr as $k=>$v){
			$except['{iframe'.$k.'}'] = $v;
		}
		$str = str_replace(array_values($except), array_keys($except), $str);
	}

	// .iframe_wrap으로 감싸져 있지 않는 iframe 추출
	$match = array();
	preg_match_all("/<iframe(.*?)<\/iframe>/is",$str, $match);
	if(count($match[0]) > 0){
		$arr = array_filter(array_unique($match[0]));
		foreach($arr as $k=>$v){
			$str = str_replace(array($v), array('<div class="iframe_wrap">'.$v.'</div>'), $str);
		}
		//ViewArr($arr);
	}

	// .iframe_wrap으로 감싸져있던 iframe 복구
	if(count($except) > 0){
		$str = str_replace(array_keys($except), array_values($except), $str);
	}

	if($is_slashes){
		$str = addslashes($str);
	}
	return $str;
}


// - UTF-8 한글 자르기 최종 함수 ::: 
function cutstr_old($msg,$cut_size,$tail="...") {
	$cut_size = ($cut_size<=0 ? 100 : $cut_size) ;
	$han = $eng = $tmp_i =0; // 한글 , 영숫어 , 임시 i 갯수
	for($i=0;$i<$cut_size;$i++) {
		if(@ord($msg[$tmp_i])>127) {
			$han++;
			$tmp_i += 3;
		}
		else {
			$eng++;
			$tmp_i ++;
		}
	}
	$cut_size = ceil($han * 2/ 3) * 3 + $eng ;
	$snowtmp = "";//return string
	for($i=0;$i<$cut_size;$i++) {
		if(ord($msg[$i]) <= 127){
			$snowtmp.=$msg[$i];
		}
		else {
			$snowtmp .= $msg[$i].$msg[($i+1)].$msg[($i+2)];
			$i+=2;
		}
	}
	return $snowtmp . ( $msg != $snowtmp ? $tail : "");
}
// - UTF-8 한글 자르기 최종 함수 ::: 




// - UTF-8 한글 자르기 최종 함수 ::: 
 function cutstr_new_old($msg,$cut_size,$tail="...") {
	$han = $eng = $tmp_i =0; // 한글 , 영숫어 , 임시 i 갯수
	for($i=0;$i<$cut_size;$i++) {
	 if(@ord($msg[$tmp_i])>127) {
		$han++;
		$tmp_i += 3;
	 }
	 else {
		$eng++;
		$tmp_i ++;
	 }
	}
	$cut_size = $han * 3 + $eng ;
	$snowtmp = "";//return string
	for($i=0;$i<$cut_size;$i++) {
	 if(ord($msg[$i]) <= 127){
		$snowtmp.=$msg[$i];
	 }
	 else {
		$snowtmp .= $msg[$i].$msg[($i+1)].$msg[($i+2)];
		$i+=2;
	 }
	}
	return $snowtmp . ( $msg != $snowtmp ? $tail : "");
 }

 function utf8_length($str) {
   $len = strlen($str);
   for ($i = $length = 0; $i < $len; $length++) {
	$high = ord($str{$i});
	if ($high < 0x80)//0<= code <128 범위의 문자(ASCII 문자)는 인덱스 1칸이동
	 $i += 1;
	else if ($high < 0xE0)//128 <= code < 224 범위의 문자(확장 ASCII 문자)는 인덱스 2칸이동
	 $i += 2;
	else if ($high < 0xF0)//224 <= code < 240 범위의 문자(유니코드 확장문자)는 인덱스 3칸이동
	 $i += 3;
	else//그외 4칸이동 (미래에 나올문자)
	 $i += 4;
   }
   return $length;
 }
 function cutstr($str, $chars, $tail = '...') {
   if (utf8_length($str) <= $chars)//전체 길이를 불러올 수 있으면 tail을 제거한다.
	$tail = '';
   else
	$chars -= utf8_length($tail);//글자가 잘리게 생겼다면 tail 문자열의 길이만큼 본문을 빼준다.
   $len = strlen($str);
   for ($i = $adapted = 0; $i < $len; $adapted = $i) {
	$high = ord($str{$i});
	if ($high < 0x80)
	 $i += 1;
	else if ($high < 0xE0)
	 $i += 2;
	else if ($high < 0xF0)
	 $i += 3;
	else
	 $i += 4;
	if (--$chars < 0)
	 break;
   }
   return trim(substr($str, 0, $adapted)) . $tail;
 }

 function cutstr_new($str, $chars, $tail = '...') {
   if (utf8_length($str) <= $chars)//전체 길이를 불러올 수 있으면 tail을 제거한다.
	$tail = '';
   else
	$chars -= utf8_length($tail);//글자가 잘리게 생겼다면 tail 문자열의 길이만큼 본문을 빼준다.
   $len = strlen($str);
   for ($i = $adapted = 0; $i < $len; $adapted = $i) {
	$high = ord($str{$i});
	if ($high < 0x80)
	 $i += 1;
	else if ($high < 0xE0)
	 $i += 2;
	else if ($high < 0xF0)
	 $i += 3;
	else
	 $i += 4;
	if (--$chars < 0)
	 break;
   }
   return trim(substr($str, 0, $adapted)) . $tail;
 }
 // - UTF-8 한글 자르기 최종 함수 ::: 

function utf2euc($str) { return iconv("UTF-8","cp949//IGNORE", $str); }
function euc2utf($str) { return iconv("cp949","UTF-8//IGNORE", $str); }


// 메일발송함수
// mailer( 받을메일주소 , 메일제목 , 메일내용 )
function sendMailer($_email, $_from, $_sitename, $_title, $_content, $cc=array()) {
	$headers = '';
	$_title = '=?UTF-8?B?'.base64_encode($_title).'?=';
	if(!preg_match("/@daum.net|@hamail.net/i" , $_email)) $headers .= "From: =?UTF-8?B?".base64_encode($_sitename)."?= <{$_from}>\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
	$headers .= "Return-Path: {$_from}\r\n";
	if(count($cc) > 0) $headers .= "Cc: <". implode(">,<" , $cc) .">\r\n";
	return @mail($_email, $_title, $_content, $headers, "-f {$_from}");
}


// 메일 컨텐츠를 추출한다.
// 인자 : 컨텐츠 - !!컨텐츠에는 타이틀을 포함한 html을 입력
// 리턴 : 메일내용
function get_mail_content($mailling_content, $data_siteinfo) {
	global $_SERVER, $NO_CURRENT_URL, $UPLOAD_SITEINFO_WDIR_LOGO;
	
	$protocol = isSecure();
	if($protocol)
		$protocol = "https://";
	else
		$protocol = "http://";

	
	// 메일링 로고 추출
	$mailing_url = $protocol.$NO_CURRENT_URL;
	$mailling_logo = $protocol.$NO_CURRENT_URL.$UPLOAD_SITEINFO_WDIR_LOGO."/".$data_siteinfo[logo_top];


	$mail_body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
		<head>
		<title>'.htmlspecialchars($data_siteinfo['title']).'</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<body>
		<div style="overflow:hidden; padding:5px;">
			<div style="max-width:700px; margin:0 auto; background:#fff; border:1px solid #ddd; box-sizing:border-box;border-collapse: inherit;">

				<!--  Common Box / 헤더 -->
				<table style="width:100%;border-spacing:0; font-size:12px; font-family:\'돋움\',Dotum; line-height:17px">
					<tbody>
						<tr>
							<!-- [PC]공통 : 메일링 상단 로고 (가로 280 이하 * 세로 70 이하) -->
							<!-- 메일링 로고 따로 등록 / 없으면 헤더 기본로고 노출 -->
							<td style="background:#f5f5f5; padding:23px 30px;">
								<a href="'.$mailing_url.'" style="max-width:280px; display:inline-block" target="_blank">
									<img src="'.$mailling_logo.'" alt="'.addslashes(htmlspecialchars($data_siteinfo['title'])).'" style="max-width:100%; max-height:70px; border:0 !important;"/>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- / Common Box -->



				<!-- 컨텐츠박스 -->
				'.$mailling_content.'
				<!-- / 컨텐츠박스 -->



				<!--  Common Box / 푸터 -->
				<table style="width:100%;border-spacing:0; font-size:12px; font-family:\'돋움\',Dotum; line-height:17px">
					<tbody>
						<tr>
							<td style="text-align:center">
								<!-- 홈페이지 바로가기 버튼 -->
								<a href="'.$mailing_url.'" style="background:#505258; font-size:13px; font-weight:600; color:#fff; padding:13px 28px;text-decoration:none;display:inline-block;margin:20px 0 50px" target="_blank">홈페이지 바로가기</a>
							</td>
						</tr>
						<tr>
							<!-- 하단 쇼핑몰 정보 입력 -->
							<td style="background:#f5f5f5; padding:30px; color:#666; line-height:15px; letter-spacing:0px;font-size:12px;">
								본 메일은 발신전용으로 회신 할 경우 답변되지 않습니다. 문의사항은 '.$data_siteinfo['phone'].'로 연락을 주십시오.<br/>
								<!-- 이메일 수신거부 문구 -->
								'.$deny_content.'
								<br/>
								<strong style="letter-spacing:0px; font-weight:400; font-size:12px">Copyright ⓒ '.htmlspecialchars($data_siteinfo['title']).' All rights reserved</strong>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- / Common Box -->
			</div>
		</div>
		</body>
		</html>
	';

	return $mail_body;
}


function isSecure() {
    return  (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
}

function chkMultiplePrint($target, $value){
	$rtn = "";
	if( strpos($target, $value) !== false ){
		$rtn = "checked";
	}

	return $rtn;
}


function convertMonthStr($month){
	$rtn = "";

	if($month == "01")
		$rtn = "January";
	else if($month == "02")
		$rtn = "February";
	else if($month == "03")
		$rtn = "March";
	else if($month == "04")
		$rtn = "April";
	else if($month == "05")
		$rtn = "May";
	else if($month == "06")
		$rtn = "June";
	else if($month == "07")
		$rtn = "July";
	else if($month == "08")
		$rtn = "August";
	else if($month == "09")
		$rtn = "September";
	else if($month == "10")
		$rtn = "October";
	else if($month == "11")
		$rtn = "November";
	else if($month == "12")
		$rtn = "December";

	return $rtn;

}

function doSelectArrayData($arr, $target){
	$rtnArr = array(); 
	foreach($arr as $k=>$v){ 
		if($v['cdate'] == $target){
			$rtnArr[] = $v;
		}
	}
	return $rtnArr;
}

function weekOfMonth( $date_str ){
    //한국 정서인지 교회정서인지는 모르겠지만 일요일부터 시작해야하기 때문에 +1 days(기본값은 월요일부터)
    $date = date("Y-m-d", strtotime("+1 days", strtotime($date_str)));
    //전체(년) 기준의 오늘이 몇째주 인지( ex 38째주 )
    $now_date = date("W", strtotime($date));
    //지난달 마지막 날짜가 몇째주 인지 (원래 -1을 하는게 맞는데, 일요일을 기준으로 하기 때문에 1일이 지난달 마지막 기준)
    $prev_date = date("W", strtotime(date("Y-m-01", strtotime($date_str))));
    return $now_date-$prev_date;
}
?>