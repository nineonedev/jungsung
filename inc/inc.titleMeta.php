<?
	$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';

	$SITEINFO_META_THUMB						= '';
	$NO_STATIC_TITLE							= $SITEINFO_TITLE ?? '';
	$NO_META_KEYWORDS							= $SITEINFO_META_KEYWORDS ?? '';
	$NO_META_DESCRIPTION						= $SITEINFO_META_DESCRIPTION ?? '';
	$NO_META_URL								= $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$NO_META_TWITTER_CARD						= "Summary";
	$NO_META_TWITTER_URL						= $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$NO_META_TWITTER_TITLE						= $NO_STATIC_TITLE ?? '';
	$NO_META_TWITTER_DESCRIPTION				= $NO_META_DESCRIPTION ?? '';
	$NO_META_TWITTER_IMAGE						= $NO_IS_SUBDIR ?? ''."/uploads/meta/".$SITEINFO_META_THUMB ?? '';
	$NO_META_OG_URL								= $protocol.$_SERVER['HTTP_HOST'];
	$NO_META_OG_TYPE							= "website";
	$NO_META_OG_IMAGE							= $NO_META_OG_URL."/uploads/meta/".$SITEINFO_META_THUMB ?? '';
	$NO_META_OG_SITE_NAME						= $NO_STATIC_TITLE;
	$NO_META_OG_LOCALE							= "ko";
	$NO_META_OG_TITLE							= $NO_STATIC_TITLE;
	$NO_META_OG_DESCRIPTION						= $NO_META_DESCRIPTION;
	$NO_META_OG_COUNTRY_NAME					= "";
	$NO_META_ITEMPROP_NAME						= $NO_STATIC_TITLE;
	$NO_META_ITEMPROP_IMAGE						= "";							
	$NO_META_ITEMPROP_URL						= $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$NO_META_ITEMPROP_DESCRIPTION				= $NO_META_DESCRIPTION;
	$NO_META_ITEMPROP_KEYWORD					= $NO_META_KEYWORDS;
	$NO_META_SHORTCUT_ICON						= $NO_IS_SUBDIR ?? ''."/uploads/meta/".$SITEINFO_META_FAVICON_ICO;
	$NO_META_APPLE_THOUCH_ICON					= "";

	$FAVICON_PATH = '/resource/images/favicon';
?>

<title><?=$PAGE_TITLE?></title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
<meta name="autocomplete" content="off" />
<meta name="keywords" content="<?=$NO_META_KEYWORDS?>">
<meta name="description" content="<?=$NO_META_DESCRIPTION?>">
<meta name="image" content="<?=$NO_META_OG_IMAGE?>">
<meta name="robots" content="index, follow" />
<meta property="og:locale" content="ko_KR" />
<meta property="og:url" content="<?=$NO_META_OG_URL?>">
<meta property="og:image" content="<?=$NO_META_OG_IMAGE?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?=$NO_META_OG_SITE_NAME?>">
<meta property="og:title" content="<?=$NO_META_OG_TITLE?><?=$NO_STATIC_SUBTITLE?>">
<meta property="og:description" content="<?=$NO_META_OG_DESCRIPTION?>">
<link rel="shortcut icon" href="<?=$NO_META_SHORTCUT_ICON?>">
-->

<link rel="icon" type="image/png" href="<?= $FAVICON_PATH ?>/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?= $FAVICON_PATH ?>/favicon.svg" />
<link rel="shortcut icon" href="<?= $FAVICON_PATH ?>/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?= $FAVICON_PATH ?>/apple-touch-icon.png" />
<link rel="manifest" href="<?= $FAVICON_PATH ?>/site.webmanifest" />