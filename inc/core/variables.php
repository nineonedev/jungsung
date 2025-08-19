<?php 

$MENU					= new Menu();
$PAGE_TITLE				= $MENU->getPageTitle();
$MENU_ITEMS				= $MENU->getMenuItems();
$CUR_PAGE				= $MENU->getCurPage();
$CUR_PAGE_LIST			= $MENU->getCurPageList();
$CUR_PAGE_ITEMS			= isset($CUR_PAGE_LIST[0]) ? $CUR_PAGE_LIST[0]['pages'] : array();
$CUR_PAGE_INDEX			= $MENU->getCurPageIndex();


$solutions = [
    ["title" => "시설관리",         "filename" => "facility",   "isHash" => true],
    ["title" => "미화관리서비스",   "filename" => "cleaning",   "isHash" => true],
    ["title" => "경비용역서비스",   "filename" => "security",   "isHash" => true],
    ["title" => "관리단설립",       "filename" => "management", "isHash" => true],
    ["title" => "법률·노무 서비스", "filename" => "compliance", "isHash" => true],
    ["title" => "행정·회계 서비스", "filename" => "backoffice", "isHash" => true],
];

$descs = [
    "facility"   => "통합 관리 시스템으로 건물 가치를 극대화",
    "cleaning"   => "친환경 자재 사용과 주기별 품질관리로 쾌적한 환경 제공",
    "security"   => "24시간 보안체계와 차별화된 교육 시스템",
    "management" => "초기 회계·규약·조직 구성까지 원스톱 지원",
    "compliance" => "전문 변호사·노무사 협업으로 리스크 최소화",
    "backoffice" => "투명한 재무 관리와 신속한 행정 처리",
];