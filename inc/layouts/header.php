<header id="main-header" class="no-header">
    <div class="no-header__inner">
        <div class="no-header__container no-container-xl">
            <a href="/" class="no-header__logo">
                <img src="/resource/images/meta/logo-primary.png" alt="정성종합관리(주)">
            </a>
            <nav class="no-header__nav">
                <?php if ($MENU_ITEMS) : ?>
                <ul class="no-header__gnb">
                    <?php foreach ($MENU_ITEMS as $depthIndex => $depthItem): ?>
                    <li class="no-header__gnb-item">
                        <a href="<?= $depthIndex['path'] ?>" class="no-header__gnb-link">
                            <span class="no-header__gnb-label"><?= $depthItem['title'] ?></span>
                        </a>

                        <?php if (isset($depthItem['pages'])): ?>
                        <div class="no-header__submenu">
                            <ul class="no-header__lnb">
                                <?php foreach ($depthItem['pages'] as $pageIndex => $pageItem): ?>
                                <li class="no-header__lnb-item">
                                    <a href="<?= $pageItem['path'] ?>" class="no-header-lnb-link">
                                        <span class="no-header__lnb-label"><?= $pageItem['title'] ?></span>
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
            <div class="no-header__cta">
                <button type="button" class="no-btn-primary">
                    <span>견적문의</span>
                    <i></i>
                </button>
            </div>
        </div>
    </div>
</header>