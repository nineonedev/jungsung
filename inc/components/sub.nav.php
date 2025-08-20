<?php if ($CUR_PAGE_LIST[0] && count($CUR_PAGE_LIST[0]['pages']) > 1): ?>

<nav class="no-sub-nav">
    <div class="no-sub-nav__container no-container-xl">
        <div class="swiper no-sub-nav__carousel" id="sub-nav-swiper">
            <ul class="swiper-wrapper no-sub-nav__list">
                <?php foreach ($CUR_PAGE_LIST[0]['pages'] as $subIdx => $subPage) : 
                    $subActive = $subPage['isActive'] ? '--active' : '';
                ?>
                <li class="swiper-slide no-sub-nav__item <?=$subActive?>">
                    <a href="<?=$subPage['path']?>" class="no-sub-nav__link">
                        <span><?=$subPage['title']?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="swiper-button-prev no-sub-nav__button no-sub-nav__button--prev">
            <i class="fa-light fa-chevron-left"></i>
        </div>
        <div class="swiper-button-next no-sub-nav__button no-sub-nav__button--next">
            <i class="fa-light fa-chevron-right"></i>
        </div>
    </div>
</nav>
<?php endif; ?>