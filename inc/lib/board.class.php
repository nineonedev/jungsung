<?


function getBoardInfoByName($nm){
	global $NO_SITE_UNIQUE_KEY;
	$query = "select  a.no, a.sitekey, a.title, a.skin, a.top_banner_image, a.contents, a.view_yn, a.secret_yn, a.sort_no, a.list_size, a.fileattach_yn, a.fileattach_cnt, a.comment_yn, a.depth1, a.depth2, a.depth3, a.lnb_path, a.view_skin
						from nb_board_manage  a
					where a.sitekey = '$NO_SITE_UNIQUE_KEY' and a. title = '$nm'";
			
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



function getBoardInfoByNo($board_no){
	global $NO_SITE_UNIQUE_KEY;
	$query = "select  a.no, a.sitekey, a.title, a.skin, a.top_banner_image, a.contents, a.view_yn, a.secret_yn, a.sort_no, a.list_size, a.fileattach_yn, a.fileattach_cnt, a.comment_yn, a.depth1, a.depth2, a.depth3, a.lnb_path, a.isOpen, a.view_skin
						from nb_board_manage  a
					where a.sitekey = '$NO_SITE_UNIQUE_KEY' and a. no = $board_no";
			
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


function getBoardManageInfoByNo($board_no){
	global $NO_SITE_UNIQUE_KEY;
	global $extra_fields;
	global $extra_match_fields;
	$query = "select  a.sitekey, a.title, a.skin, a.regdate, a.top_banner_image, a.contents, a.view_yn, a.secret_yn, 
						a.list_size, a.fileattach_yn, a.fileattach_cnt, a.comment_yn, a.depth1, a.depth2, a.depth3, a.lnb_path, a.category_yn, a.view_skin,
						$extra_match_fields
						from nb_board_manage a
					where a.sitekey = '$NO_SITE_UNIQUE_KEY' and a.no = $board_no";
	
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


function getBoardLimit($board_no, $limit=5, $orderby){

	global $NO_SITE_UNIQUE_KEY;
	global $extra_fields;
	global $extra_match_fields;
	$arr = array();
	$mainqry = " where a.sitekey = '$NO_SITE_UNIQUE_KEY' and a.board_no = $board_no";
	$orderByqry = "a.is_notice='Y' desc , a.regdate desc";
	if($orderby){
		$orderByqry = $orderby;
	}
	$query = " select a.no, a.board_no, a.user_no, a.category_no, a.comment_cnt, a.title, a.contents, a.regdate, a.read_cnt, a.direct_url, a.thumb_image, 
					a.is_admin_writed, a.is_notice, a.is_secret, a.secret_pwd, a.write_name, a.isFile
					 ,a.file_attach_1,a.file_attach_origin_1 ,a.file_attach_2, a.file_attach_origin_2 , a.file_attach_3, a.file_attach_origin_3 , a.file_attach_4, a.file_attach_origin_4 ,a.file_attach_5, a.file_attach_origin_5,
                     $extra_fields
					 ,b.title as board_name
					from nb_board a
					left join nb_board_manage b on a.board_no = b.no
					$mainqry  order by  $orderByqry  limit 0, " . $limit ;
	//echo $query;
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




function getBoardRole($board_no, $user_lev){
	global $NO_SITE_UNIQUE_KEY;
	$query = "select no, lev_no, role_write, role_edit, role_view, role_list, role_delete, role_comment from nb_board_lev_manage where sitekey = '$NO_SITE_UNIQUE_KEY' and lev_no = $user_lev and board_no = $board_no";
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



function getBoardCategory($board_no){

	global $NO_SITE_UNIQUE_KEY;
	$query = "select no, name from nb_board_category where sitekey = '$NO_SITE_UNIQUE_KEY' and board_no = $board_no order by sort_no asc";
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

function getBoardCnt($board_no){

	global $NO_SITE_UNIQUE_KEY;
	$query = "select count(no) as cnt from nb_board where board_no = $board_no";
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


function getBoardCategoryCnt($category_no){

	global $NO_SITE_UNIQUE_KEY;
	$query = "select count(no) as cnt from nb_board where category_no = $category_no";
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

?>