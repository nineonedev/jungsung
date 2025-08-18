<?

	include_once "../../../inc/lib/base.class.php";


	$depthnum = 1;
	$pagenum = 2;
	
	$no = $_REQUEST[no];

	$query = "  select a.no, a.title, a.skin, a.regdate, a.top_banner_image, a.contents, a.view_yn, a.secret_yn, a.sort_no, a.list_size, 
						a.fileattach_yn, a.fileattach_cnt, a.comment_yn, a.depth1, a.depth2, a.depth3, a.lnb_path
			  from nb_board_manage a
			  where a.no = $no  ";
	//echo $query;exit;
	$result=mysql_query($query);
	$data=mysql_fetch_array($result);
	if(!$data){
		error("정보를 찾을 수 없습니다");
	}



	$query = " select a.no, a.board_no, a.name, a.sort_no
						from nb_board_category a
						where board_no = $no order by a.sort_no asc
	";
	$result = mysql_query($query);



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
            <form  id="frm" name="frm" method="post" autocomplete='off'>	
			<input type="hidden" id="mode" name="mode" value="">
			<input type="hidden" id="no" name="no" value="<?=$no?>">
			<input type="hidden" id="board_no" name="board_no" value="<?=$no?>">
                <section class="no-content">
                    <!-- Page Title -->
                    <div class="no-toolbar">
                        <div class="no-toolbar-container no-flex-stack">
                            <div class="no-page-indicator">
                            <h1 class="no-page-title">게시판</h1>
                            <div class="no-breadcrumb-container">
                                <ul class="no-breadcrumb-list">
                                <li class="no-breadcrumb-item">
                                    <span>게시판 관리</span>
                                </li>
                                <li class="no-breadcrumb-item">
                                    <span>카테고리 관리</span>
                                </li>
                                </ul>
                            </div>
                            </div>
                            <!-- page indicator -->

                            <div class="no-items-center">
                                <a href="./board.manage.list.php" class="no-btn no-btn--main no-btn--big">
                                    돌아가기
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="no-search no-toolbar-container">
                        <div class="no-card">
                            <div class="no-card-body no-admin-column">

                                <div class="no-admin-block wide">
                                    <h3 class="no-admin-title">카테고리 등록</h3>
                                    
                                    <div class="no-search-select">
                                        <div class="no-search-wrap">
                                            <div class="no-search-input">
                                                <input
                                                    style="padding-left: 1.2rem"
                                                    name="name"
                                                    id="name"
                                                    type="text"
                                                    title="카테고리 등록"
                                                    placeholder="카테고리를 입력해주세요."
                                                    value=""
                                                />
                                            </div>
                                            <div class="no-search-btn">
                                                <button
                                                    type="button"
                                                    title="검색"
                                                    class="no-btn no-btn--main no-btn--search"
                                                    onClick="doCategoryAdd();"
                                                >
                                                등록
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contents -->
                    <div class="no-content-container">
                        <div class="no-card">
                            <div class="no-card-header">
                                <h2 class="no-card-title">카테고리 관리</h2>
                            </div>

                            <div class="no-card-body">
                               
                                <div class="no-table-responsive">
                                    <table class="no-table">
                                        <caption class="no-blind">
                                            카테고리명, 순서, 관리로 구성된 카테고리 관리표
                                        </caption>
                                        
                                        <thead>
                                            <tr>
                                                <th scope="col" class="no-min-width-120">
                                                    카테고리명
                                                </th>
                                                <th scope="col" class="no-min-width-120">
                                                    순서
                                                </th>
                                                <th scope="col" class="no-min-width-150">
                                                    관리
                                                </th>
                                            </tr>
                                        </thead>
                                        
                                        
                                        <tbody>
                                            <?
                                                while($v = mysql_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <td>
                                                    <span>
                                                        <input type="text" id="name_<?=$v[no]?>" value="<?=$v[name]?>">    
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <input type="text" id="sort_no_<?=$v[no]?>" value="<?=$v[sort_no]?>">
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="no-table-role">
                                                    <span class="no-role-btn">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </span>
                                                    <div class="no-table-action">
                                                        <a
                                                        href="javascript:doCategorySave(<?=$v[no]?>);"
                                                        class="no-btn no-btn--sm no-btn--normal"
                                                        >저장</a
                                                        >
                                                        <a
                                                        href="javascript:doCategoryDelete(<?=$v[no]?>);"
                                                        class="no-btn no-btn--sm no-btn--delete-outline"
                                                        >삭제</a
                                                        >
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?
                                                    $rnumber--;
                                                }
                                            ?>
                                            <? if(!$result){?>
                                            <!-- 글이 하나라도 등록되지 않았을 때 보여줄 div -->
                                            <p>등록된 카테고리가 없습니다.</p>
                                            <?}?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- card body -->
                        </div>
                        <!-- card -->
                    </div>
                    <!-- contents -->

                    <!-- Pagination -->
                    <? include_once "../../lib/admin.pagination.php"; ?>
                </section>
            </form>
        </main>

       

        <!-- Footer -->
        <script type="text/javascript" src="./js/board.manage.process.js?c=<?=$STATIC_ADMIN_JS_MODIFY_DATE?>"></script>
        <?
            include_once "../../inc/admin.footer.php";
        ?>
    </div>
    <style>
        #board_no-button{
            display: none;
        }
    </style>
</body>
</html>