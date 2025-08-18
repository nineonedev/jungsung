<nav class="no-sub-nav">
    <div class="no-sub-nav__inner no-container-3xl">
        <div class="swiper no-sub-nav__swiper" id="sub-nav-swiper">
            <ul class="swiper-wrapper">
                <?php foreach ($CUR_PAGE_LIST[0]['pages'] as $subIdx => $subPage) : 
                    $subActive = $subPage['isActive'] ? 'active' : '';
                ?>
                <li class="swiper-slide <?=$subActive?>">
                    <a href="<?=$subPage['path']?>" class="no-sub-nav__link">
                        <span><?=$subPage['title']?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="swiper-button-prev --custom">
            <i class="fa-light fa-chevron-left"></i>
        </div>
        <div class="swiper-button-next --custom">
            <i class="fa-light fa-chevron-right"></i>
        </div>
    </div>
</nav>