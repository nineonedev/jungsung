<?php

/* 
- popup.close.php 변경, 
- style.css 적용
- popup.process.php 변경
- table 필드추가 p_desc VARCHAR(255) 
- admin/pages/design/popup.view.php와 add.php 좌표 삭제
*/
$query = "select 
            * 
          from nb_popup 
          where 
            sitekey = '$NO_SITE_UNIQUE_KEY' and 
            p_loc = 'P' and 
            p_view = 'Y' and 
            ( (
                p_sdate <= CURDATE() and 
                p_edate >= CURDATE() 
              ) or 
              p_none_limit = 'Y' 
            ) 
          ORDER BY 
            p_idx asc, 
            no desc";
//echo $query exit;
$result4th =mysql_query($query);
$arrPopup = array(); 
$array_nums = array();

while($row = mysql_fetch_assoc($result4th)) { 
    $arrPopup[] = $row; 

	if($_COOKIE["AuthPopupClose_" . $row['no']] <> "Y"){
		$array_nums[] = $row['no'];
	}
};

$popup_nums = implode(',', $array_nums);

?>

<?php if(!empty($popup_nums)) :
	
?>
<div class="no-popup">
<div class="no-popup-overlay"></div>

    <!-- POPUP BEGIN -->
  
        <div class="no-popup__inner" data-nums="<?=$popup_nums?>">
            <!-- image -->
            <div class="popup-swiper swiper">
				<ul class="swiper-wrapper">
					<?php foreach( $arrPopup as $k=>$v ) : ?>
					<?php if( $_COOKIE["AuthPopupClose_" . $v[no]] <> "Y" ) :
						$_img = $UPLOAD_WDIR_POPUP."/" . $v['p_img'];
						$_s = @getimagesize($_img);
						$app_div_name = "event_popup_div_" . $v[no];

						$pos_left = $v['p_left'] ? $v['p_left'].'px' : '';
						$pos_top = $v['p_top'] ? $v['p_top'].'px' : '';

						$translate = ''; 
						if($pos_left) {
							$translate .= 'translateX(0)';
						}
						if($pos_top){
							$translate .= ' translateY(0)';
						}

						$left = empty($pos_left) ? '' : "left:$pos_left;"; 
						$top = empty($pos_top) ? '' : "top:$pos_top;"; 
						$translate = empty($translate) ? '' : "transform:$translate;";

						$close_url = './inc/lib/popup.close.php?_mode=popup_close&uid='.$popup_nums;
					?>
					<li class="swiper-slide">
						<div class="no-popup__image">
							<a href="<?=$v['p_link']?>" class="no-popup__zone" target="<?=$v['p_target']?>">
							
							<picture>
								<!-- <source media="(min-width:768px)" srcset="img_white_flower.jpg"> -->
								<source media="(min-width:0px)" srcset="<?=$_img?>">
								<img src="<?=$_img?>" alt="Flowers">
							</picture>
							</a>
						</div>
						<!-- content -->
						<div class="no-popup__content">
						<?php if($v['p_title']) : ?>
						<h4 class="no-popup__title"><?=$v['p_title']?></h4>
						<?php endif; ?>

						<?php if($v['p_link']) : ?>
						<div class="no-popup__pos">
							<a href="<?=$v['p_link']?>" target="<?=$v['p_target']?>">바로가기</a>
						</div>
						<?php endif; ?>
						</div>
					</li>
					<?php endif; ?>
					<?php endforeach; ?>
				</ul>
				<div class="popup-pager swiper-pagination"></div>
            </div>

            <!-- control -->
            <div class="no-popup-ctrl">
                <div class="no-popup-ctrl__off">
                    <a href="javascript:void(0)">
                        <label for="agree_check_<?=$v['no']?>">
                            <input type="checkbox" id="agree_check_<?=$v['no']?>" onclick="javascript:close_popup('<?=$popup_nums?>');">
                            <span>오늘 하루 보지 않기</span>
                        </label>
                    </a>
                </div>
                <div class="no-popup-ctrl__close">
                    <a href="javascript:popup_display('.no-popup')" title="닫기">닫기</a>
                </div>
            </div>
        </div>
    <!-- POPUP END -->


</div>
<?php endif;?>

<script language="javascript">
	/*
	const popupContainer = document.querySelector('.no-popup');
	const popupItems = [...popupContainer.querySelectorAll('.no-popup__inner')];
	let isAllPopupHidden = false; 

	function popup_display( divname ){
		divname.style.display = 'none';
		divname.dataset.open = false; 

		const hiddenList = popupItems.map(item => item.dataset.open === 'false');
		isAllPopupHidden = hiddenList.every(item => item === true);

		if(isAllPopupHidden){
			popupContainer.style.display = 'none';
		}
	}
	*/
	document.querySelector('.no-popup-overlay').addEventListener('click', function(){
		document.querySelector('.no-popup').style.display = 'none'; 
	});

	function popup_display( divname ){
		document.querySelector(divname).style.display = 'none'; 
	}


	function close_popup(nums){
		common_frame.location.href=`./inc/lib/popup.close.php?_mode=popup_close&uid=${nums}`;
	}
	
	const popup= new Swiper('.popup-swiper', {
	  loop: true,
      autoHeight: true, 
	  pagination: {
		type: 'bullets',
		clickable: true,
		el: '.popup-pager',
	  },
	});

	
</script>
<!-- 팝업 -->