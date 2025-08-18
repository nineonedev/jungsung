<?php 
    $pageTitle = $CUR_PAGE['title'];
    $pageSubTitle = $CUR_PAGE_LIST[0]['title']; 
    $visualImgSrc = url('/resource/images/visual/visual_'.$CUR_PAGE_LIST[0]['dirname'].'.jpg'); 
?>
<section class="no-sub-vis">
    <div class="no-container-3xl no-sub-vis__inner">
        <div class="no-sub-vis__content">
            <span class="f-heading-7"><?=$pageSubTitle?></span>
            <h2 class="f-heading-4 no-content-desc">
                <?=$pageTitle?>
            </h2>
        </div>
    </div>
    <figure class="no-sub-vis__img">
        <img src="<?=$visualImgSrc?>" alt="">
    </figure>
</section>
