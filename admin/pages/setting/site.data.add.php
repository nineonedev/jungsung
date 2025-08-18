<!DOCTYPE html>
<html lang="ko">
<?
	include_once "../../../inc/lib/base.class.php";

	$depthnum = 4;
	$pagenum = 3;


	include_once "../../inc/admin.title.php";
	include_once "../../inc/admin.css.php";
	include_once "../../inc/admin.js.php";
?>
</head>

<body>
    <div class="no-wrap">
        <!-- Header -->
        <?
        include_once "../../inc/admin.header.php";
        ?>

        <!-- Main -->
        <main class="no-app no-container">
            <!-- Drawer -->
            <?
                include_once "../../inc/admin.drawer.php";
            ?>

            <!-- Contents -->
            <form id="frm" name="frm" method="post" enctype="multipart/form-data">
			<input type="hidden" id="mode" name="mode" value="">
                <section class="no-content">
                    <!-- Page Title -->
                    <div class="no-toolbar">
                        <div class="no-toolbar-container no-flex-stack">
                            <div class="no-page-indicator">
                            <h1 class="no-page-title">사이트 데이터 관리</h1>
                            <div class="no-breadcrumb-container">
                                <ul class="no-breadcrumb-list">
                                <li class="no-breadcrumb-item">
                                    <span>설정</span>
                                </li>
                                <li class="no-breadcrumb-item">
                                    <span>사이트 데이터 관리</span>
                                </li>
                                </ul>
                            </div>
                            </div>
                            <!-- page indicator -->
                        </div>
                    </div>


                    <!-- card-title -->
                    <div class="no-toolbar-container">
                        <div class="no-card">
                            <div class="no-card-header no-card-header--detail">
                                <h2 class="no-card-title">데이터 등록</h2>
                            </div>
                            <div
                                class="no-card-body no-admin-column no-admin-column--detail"
                            >
                                <div class="no-admin-block">
                                    <h3 class="no-admin-title">
                                        <label for="target"> 데이터 사용영역 </label>
                                    </h3>
                                    <div class="no-admin-content">
                                        <select name="target" id="target">
                                            <option value="">선택</option>
                                            <?
                                                foreach( $siteDataTarget  as $key=>$val ) {
                                            ?>
                                            <option value="<?=$key?>" <? if($target == $key) echo "selected";?>><?=$val?></option>
                                            <?
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- admin-block -->

                                <div class="no-admin-block">
                                    <h3 class="no-admin-title">
                                        <label for="content" >데이터 내용</label>
                                    </h3>
                                    <div class="no-admin-content">
                                        <div class="no-admin-check">
                                            <textarea
                                                name="content"
                                                id="content"
                                                class="SEditor"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- admin-block -->

                                


                                <div class="no-items-center center">
                                    <a
                                        href="./site.data.list.php"
                                        class="no-btn no-btn--big no-btn--normal"
                                    >
                                        목록
                                    </a>
                                    <a
                                        href="javascript:void(0);"
                                        class="no-btn no-btn--big no-btn--main"
                                        onClick="doRegSave();"
                                    >
                                        저장
                                    </a>
                                </div>
                            </div>
                            <!-- card-body -->
                        </div>
                    </div>
                </section>
            </form>
        </main>

        

        <!-- Footer -->
        <script type="text/javascript" src="./js/setting.data.process.js?c=<?=$STATIC_ADMIN_JS_MODIFY_DATE?>"></script>
        <?
            include_once "../../inc/admin.footer.php";
        ?>
        
    </div>
</body>
</html>