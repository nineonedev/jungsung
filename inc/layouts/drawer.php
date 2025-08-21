<aside id="main-drawer" class="no-drawer">
    <div class="no-drawer__inner">
        <div class="no-drawer__container no-container-xl">
            <div class="no-drawer__head">
                <a href="/" class="no-drawer__logo">
                    <img src="/resource/images/meta/logo-white.png" alt="정성종합관리(주)">
                </a>
                <button type="button" class="no-drawer__toggle">
                    <i class="fa-regular fa-xmark"></i>
                </button>
            </div>
            <nav class="no-drawer__nav">
                <?php if ($MENU_ITEMS) : ?>
                <ul class="no-drawer__gnb">
                    <?php foreach ($MENU_ITEMS as $depthIndex => $depthItem): 
                        if (!$depthItem['is_visible']) continue;    
                    ?>
                    <li class="no-drawer__gnb-item">
                        <a href="<?= $depthItem['path'] ?>" class="no-drawer__gnb-link">
                            <span class="no-drawer__gnb-label"><?= $depthItem['title'] ?></span>
                        </a>

                        <?php if (isset($depthItem['pages'])): ?>
                        <div class="no-drawer__submenu">
                            <ul class="no-drawer__lnb">
                                <?php foreach ($depthItem['pages'] as $pageIndex => $pageItem): 
                                    $hash = $pageItem['hash'] ?? ''; 
                                    $hash = $hash ? '#'.$hash : '';
                                ?>
                                <li class="no-drawer__lnb-item">
                                    <a href="<?= $pageItem['path'] . $hash ?>" class="no-drawer__lnb-link">
                                        <span class="no-drawer__lnb-label"><?= $pageItem['title'] ?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif;?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </nav>
            <div class="no-drawer__action">
                <button type="button" class="no-drawer__cta no-btn no-btn--white no-btn--sm">
                    <span>견적문의</span>
                    <i class="fa-light fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</aside>