<?php

define('DEBUG', true);
$_path_str = dirname(__FILE__);
$CACHE_MODIFIER = date('YmdHis');
$NO_IS_SUBDIR = "";
$NO_SITE_UNIQUE_KEY = "SLIM00";

if(!DEBUG){
    session_start();
    session_cache_limiter("private"); 
    ini_set("session.cookie_lifetime", 86400); 
    ini_set("session.cache_expire", 86400); 
    ini_set("session.gc_maxlifetime", 86400);

    header("Pragma: no-cache");
    header("Content-Type: text/html; charset=utf-8");

    
    $NO_CURRENT_URL = $_SERVER['HTTP_HOST'];
    $NO_MAKE_KEY = hash("sha256", $NO_CURRENT_URL.$NO_SITE_UNIQUE_KEY);


    /* uploads 폴더 하위 포함 쓰기 권한 설정 해야 함 */

    //error_reporting( E_ALL & ~( E_NOTICE | E_USER_NOTICE | E_WARNING | E_COMPILE_WARNING | E_CORE_WARNING | E_USER_WARNING | E_DEPRECATED | E_USER_DEPRECATED ) );

    // // 현재 파일명 확인
    $EX_FILENAME = explode("/" , $_SERVER['SCRIPT_FILENAME']);
    $CURR_FILENAME = $EX_FILENAME[(sizeof($EX_FILENAME)-1)]; // 현재파일명
    $END_FILENAME = end(explode('/', dirname($_SERVER['SCRIPT_NAME']))); // 현재 최하위 DIR명

    $PHP_SELF = $_SERVER['PHP_SELF'];

    

    // # 서버에 지정된 업로드 최대용량 확인
    $MAX_SERVER_UPLOAD_SIZE = (ini_get('upload_max_filesize')?ini_get('upload_max_filesize'):'서버설정용량');


    // /* 기본 설정 값 */
    $BOARD_DEFAULT_LIST_SIZE = 20;
    $BOARD_DEFULAT_BLOCK_SIZE = 10; //페이지 카운트

    // /* 경로 설정 */

    // /* 엑스트라 필드 갯수 설정 */
    $NO_EXTRA_FIELDS_COUNT = 15;

    // /* 서브 경로 없는 경우 아래 내용 비움 */

    $UPLOAD_DIR_BASE						= $_SERVER['DOCUMENT_ROOT'] . $NO_IS_SUBDIR.  "/uploads";
    $UPLOAD_WDIR_BASE						= $NO_IS_SUBDIR. "/uploads";

    $UPLOAD_DIR_BANNER					= $UPLOAD_DIR_BASE."/banner";
    $UPLOAD_WDIR_BANNER					= $UPLOAD_WDIR_BASE."/banner";

    $UPLOAD_DIR_POPUP						= $UPLOAD_DIR_BASE."/popup";
    $UPLOAD_WDIR_POPUP					= $UPLOAD_WDIR_BASE."/popup";

    $UPLOAD_DIR_BOARD						= $UPLOAD_DIR_BASE."/board";
    $UPLOAD_WDIR_BOARD					= $UPLOAD_WDIR_BASE."/board";

    $UPLOAD_SITEINFO_DIR_LOGO		= $UPLOAD_DIR_BASE."/logo";
    $UPLOAD_SITEINFO_WDIR_LOGO		= $UPLOAD_WDIR_BASE."/logo";

    $UPLOAD_META_DIR						= $UPLOAD_DIR_BASE."/meta";
    $UPLOAD_META_WDIR						= $UPLOAD_WDIR_BASE."/meta";	

    $UPLOAD_DIR_EMPLOYMENT						= $UPLOAD_DIR_BASE."/employment";
    $UPLOAD_WDIR_EMPLOYMENT					= $UPLOAD_WDIR_BASE."/employment";

    $UPLOAD_DIR_ADMISSION						= $UPLOAD_DIR_BASE."/admission";
    $UPLOAD_WDIR_ADMISSION					= $UPLOAD_WDIR_BASE."/admission";


    // /* 관리자 메뉴 권한 */
    $NO_ADMIN_GNB_BOARD_OPEN = true; /*게시판*/
    $NO_ADMIN_GNB_DESIGN_OPEN = true; /*디자인*/
    $NO_ADMIN_GNB_REQUEST_OPEN = true; /*상담문의*/
    $NO_ADMIN_GNB_SMS_OPEN = false; /*문자관리*/
    $NO_ADMIN_GNB_SETTING_OPEN = true; /*설정*/
    $NO_ADMIN_GNB_LOG_OPEN = true; /*접속통계*/
    $NO_ADMIN_GNB_MEMBER_OPEN = false;
    $NO_ADMIN_LNB_BOARD_MENU_OPEN = false; /*게시판 관리 */
    $NO_ADMIN_LNB_BOARD_MENU_ROLE_OPEN = false; /*게시판 권한 관리 */


    $devIArrIP = array("220.72.73.182", "125.128.228.224","1.228.9.177");

    if(in_array($_SERVER['REMOTE_ADDR'], $devIArrIP)){
        $NO_ADMIN_LNB_BOARD_MENU_OPEN = true;
        $NO_ADMIN_LNB_BOARD_MENU_ROLE_OPEN = true;
        $NO_ADMIN_GNB_MEMBER_OPEN = true;
    }


    /*사용되는 테이블
    nb_admin
    nb_siteinfo

    nb_board
    nb_board_manage
    nb_board_lev_manage

    nb_banner
    nb_popup
    nb_request

    nb_counter
    nb_counter_config
    nb_counter_data
    nb_counter_route


    nb_member
    nb_member_level
    */



    /* 사용자 세션 변수 */
    $NO_USR_NO			= $_SESSION['no_usr_no'];
    $NO_USR_ID				= $_SESSION['no_usr_id'];
    $NO_USR_NAME		= $_SESSION['no_usr_name'];
    $NO_USR_LEV			= $_SESSION['no_usr_lev'];

    /* 비로그인 상태면 비회원 코드값 0으로 부여 */
    if(!$NO_USR_LEV)
        $NO_USR_LEV = 0;

    if(!$NO_USR_NO)
        $NO_USR_NO = 0;

    /* 관리자 세션 변수 */
    $NO_ADM_NO			= $_SESSION['no_adm_login_no'];
    $NO_ADM_ID			= $_SESSION['no_adm_login_uid'];
    $NO_ADM_NAME		= $_SESSION['no_adm_login_uname'];


    $NO_USR_SESSION_ID = session_id();
    $NO_USR_SESSION_ID_COOKIE = $_COOKIE['cookie_session_id'];
    if($NO_USR_SESSION_ID_COOKIE)
        $NO_USR_SESSION_ID = $NO_USR_SESSION_ID_COOKIE;



    
    include_once $_path_str.'/PasswordHashClass.php';
    include_once $_path_str.'/db.php';
    include_once $_path_str.'/func.php';
    include_once $_path_str.'/board.inc.php';
    include_once $_path_str.'/board.class.php';
    include_once $_path_str.'/member.class.php';
    include_once $_path_str.'/inc.php';
    include_once $_path_str.'/injectionguard.php';
    include_once $_path_str.'/cache.inc.php';
    include_once $_path_str.'/site.info.php';
    include_once $_path_str.'/var.php';
    include_once $_path_str.'/license.php';
    include_once $_path_str.'/StringHelper.php';
    include_once $_path_str.'/SummerNote.php';

    if( strpos(dirname($_SERVER['SCRIPT_NAME']), "/admin/") !== false){
    }else{
        include_once $_path_str.'/counter.main.php';
    }



    if(!in_array($NO_MAKE_KEY, $NO_LICENSE_UQ_KEY)){
        echo "허용되지 않는 라이센스입니다.";exit;
    }

}

include_once $_path_str.'/menu/menu.init.php';
include_once dirname(__DIR__).'/core/config.php';
include_once dirname(__DIR__).'/core/util.php';
include_once dirname(__DIR__).'/core/variables.php';


?>