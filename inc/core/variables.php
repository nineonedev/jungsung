<?php 

$MENU					= new Menu();
$PAGE_TITLE				= $MENU->getPageTitle();
$MENU_ITEMS				= $MENU->getMenuItems();
$CUR_PAGE				= $MENU->getCurPage();
$CUR_PAGE_LIST			= $MENU->getCurPageList();
$CUR_PAGE_ITEMS			= isset($CUR_PAGE_LIST[0]) ? $CUR_PAGE_LIST[0]['pages'] : array();
$CUR_PAGE_INDEX			= $MENU->getCurPageIndex();


$LOGO_BASE = '/resource/images/meta/logo-orange.svg';
$LOGO_BASE_BLACK = '/resource/images/meta/logo-black.svg';
$LOGO_SMB = '/resource/images/meta/smb.svg';
$LOGO_SMB_WHITE = '/resource/images/meta/smb-white.svg';


$URL_SMB = 'https://www.sejongpac.or.kr/portal/sjartgroups/artMember/list.do?bcode=BALLET&menuNo=200580';
$URL_INSTAGRAM = 'https://www.instagram.com/seoulmetropolitanballet';
$URL_FACEBOOK = 'https://www.facebook.com/sjcenter';
$URL_YOUTUBE = 'https://www.youtube.com/@SejongCenter';