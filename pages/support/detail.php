<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>
<?php //include_once $STATIC_ROOT."/inc/lib/counter.inc.php";?>
<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>

<div class="no-page">
    <div class="no-layout">
        
        <?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>
        <?php include_once $STATIC_ROOT . '/inc/layouts/drawer.php'; ?>

        <main>
            <?php include_once $STATIC_ROOT . '/inc/components/sub.hero.php'; ?>
            <?php include_once $STATIC_ROOT . '/inc/components/sub.nav.php'; ?>
            
            <section class="no-section-xl no-board-detail">
                <div class="no-container-xl">
                    <h2 class="no-heading-lg no-board-detail__headline">
                        공지사항
                    </h2>

                    <div class="no-board-detail__head">
                        <h3 class="no-board-detail__title no-heading-xs">
                            하절기 시설 점검 안내
                        </h3>
                        <span class="no-board-detail__date">
                            2025-08-12
                        </span>
                    </div>

                    <div class="no-board-detail__body">
                    안녕하세요.
                    삼성닷컴 운영팀입니다.

                    삼성닷컴(www.samsung.com/sec)을 이용해주시는 고객님들께 감사드리며,
                    </div>

                    
                    <div class="no-prevnext">
                        <div class="no-prevnext__block">
                            <a href="" class="no-prevnext__link">
                                <strong class="no-prevnext__label">다음</strong>
                                <span class="no-prevnext__title">미화관리 서비스 강화 안내</span>
                            </a>
                        </div>
                        <div class="no-prevnext__block">
                            <a href="" class="no-prevnext__link">
                                <strong class="no-prevnext__label">이전</strong>
                                <span class="no-prevnext__title">미화관리 서비스 강화 안내</span>
                            </a>
                        </div>
                    </div>

                    <div class="no-board-detail__action">
                        <a href="" class="no-btn no-btn--primary no-btn--list">
                            <span>목록</span>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>