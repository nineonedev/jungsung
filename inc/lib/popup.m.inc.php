<?php

	$query = "select * from nb_popup where sitekey = '$NO_SITE_UNIQUE_KEY' and p_loc = 'M' and p_view='Y' and ( (p_sdate <= CURDATE() and p_edate >= CURDATE() ) or p_none_limit = 'Y' ) ORDER BY p_idx asc , no desc";
		//echo $query;
		$result4th =mysql_query($query);
		$arrPopup = array(); 
		while($row = mysql_fetch_assoc($result4th)) { 
			$arrPopup[] = $row; 
		} 

		$defultNo = 9999999;

		foreach( $arrPopup as $k=>$v ){
			
			if( $_COOKIE["AuthPopupCloseM_" . $v[no]] <> "Y" ) {
				$_img = $UPLOAD_WDIR_POPUP."/" . $v[p_img];
				$_s = @getimagesize($_img);
				$app_div_name = "event_popup_div_" . $v[no];

				$zindex = ($defultNo) + ($v[no] *1);
?>
	
		
		<!-- BEGIN ::  POPUP 영역 -->
		<div class="no_m_ad_popup" id="<?=$app_div_name?>" style="z-index:<?=$zindex?>">
			<div class="no_m_ad_popup_pos">
				<div class="no_m_ad_popup_con">
					<!-- event 발생할 시를 위한 a tag -->
					<a href="<?=$v[p_link]?>" title="<?=$v[p_title]?>"  target='<?=$v[p_target]?>' class="no_m_ad_popup_con_img">
						<img src="<?=$_img?>" title="<?=$v[p_title]?>" />				
					</a>
				</div>
				<div class="no_m_ad_popup_con_btn">
					<a href="javascript:void(0);" class="no_m_ad_btn_01"	 onclick="common_frame.location.href=('./inc/lib/popup.m.close.php?_mode=popup_close&uid=<?=$v[no]?>');" >오늘 하루 보지 않기</a>
					<a href="javascript:void(0);" onClick="popup_m_display('<?=$app_div_name?>')" class="no_m_ad_btn_02">닫기</a>
				</div>
			</div>
		</div>
		<!-- END ::  POPUP 영역 -->
<?
			}
		}

?>
<script language="javascript">

	function popup_m_display( divname ){
		$("#" + divname).css("display" , "none");
	}

</script>
<!-- 팝업 -->
