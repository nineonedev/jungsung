<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>
<?php //include_once $STATIC_ROOT."/inc/lib/counter.inc.php";?>
<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>

<?php

    $CUR_PAGE_LIST[0] = $MENU_ITEMS[4];
?>
<div class="no-page">
    <div class="no-layout">
        
        <?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>
        <?php include_once $STATIC_ROOT . '/inc/layouts/drawer.php'; ?>

        <main>
            <?php include_once $STATIC_ROOT . '/inc/components/sub.hero.php'; ?>
            
            <!-- 비밀글 확인 -->
            <section class="no-section-xl no-locked">
            <div class="no-container-sm no-locked__container">
                <div class="no-locked__logo" aria-hidden="true">
                    <img src="/resource/images/meta/logo-primary.png" alt="">
                </div>

                <h2 class="no-heading-md no-locked__title">
                건물 시설 관리비용 문의드립니다.
                </h2>

                <p class="no-locked__desc">
                <strong>비밀글 기능으로 보호된 글입니다.</strong><br>
                작성자와 관리자만 열람하실 수 있습니다. <br>
                본인이라면 비밀번호를 입력하세요.
                </p>

                <form class="no-locked__form" method="post" action="/board/secret-check.php" autocomplete="off">
                <label class="no-form-control no-form-control--password no-locked__field">
                    <span class="sr-only">비밀번호</span>
                    <input
                    type="password"
                    name="password"
                    inputmode="numeric"
                    required
                    placeholder=""
                    class="no-form-control__input no-form-control__input--password no-locked__input"
                    aria-label="비밀번호 입력"
                    >
                </label>

                <button type="submit" class="no-btn no-btn--primary no-locked__submit">
                    <span>확인</span>
                </button>

                <a href="javascript:history.back()" class="no-locked__back" aria-label="이전 페이지로">
                    이전으로
                </a>

                <!-- 필요 시 전달 파라미터 -->
                <input type="hidden" name="post_id" value="">
                <input type="hidden" name="redirect" value="<?= $_GET['redirect'] ?? '' ?>">
                </form>
            </div>
            </section>

        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>