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
            
            <section class="no-section-xl no-philo-intro">
                <div class="no-container-xl">
                    <div class="no-philo-intro__head --tac" <?= $AOS_FADE_UP ?>>
                        <h2 class="no-heading-xl">경영이념</h2>
                        <p class="--wrap no-pd-xl--t">
                            도전·열정·혁신이라는 경영방침 아래 건물관리 전문기업(Building Management Company)으로 성장하여 
                            <br>
                            물이 흐르는 방향(하수기)으로 따라 내려가듯 고객과 함께 가는 SOYOU가 될 것입니다.
                        </p>
                    </div>
                    <ul class="no-philo-intro__list no-pd-4xl--t" <?= $AOS_FADE_UP ?>>
                        <li class="no-philo-intro__item">
                            <div class="no-philo-intro__box">
                                <div class="no-philo-intro__icon">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/hibixlbn.json"
                                        trigger="loop"
                                        delay="2000"
                                        colors="primary:#26418D,secondary:#8DB2D8"
                                    >
                                    </lord-icon>
                                </div>
                                <div class="no-philo-intro__content --tac">
                                    <h3 class="no-philo-intro__label no-heading-xs">가치창출경영</h3>
                                    <p class="no-philo-intro__lang no-body-sm">Value Performance Management</p>
                                </div>
                            </div>
                        </li>
                        <li class="no-philo-intro__item">
                            <div class="no-philo-intro__box">
                                <div class="no-philo-intro__icon">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/azasiwss.json"
                                        trigger="loop"
                                        delay="2000"
                                        colors="primary:#26418D,secondary:#8DB2D8"
                                    >
                                    </lord-icon>
                                </div>
                                <div class="no-philo-intro__content --tac">
                                    <h3 class="no-philo-intro__label no-heading-xs">고객지향경영</h3>
                                    <p class="no-philo-intro__lang no-body-sm">Customer Satisfaction Management</p>
                                </div>
                            </div>
                        </li>
                        <li class="no-philo-intro__item">
                            <div class="no-philo-intro__box">
                                <div class="no-philo-intro__icon">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/jkxsndfq.json"
                                        trigger="loop"
                                        delay="2000"
                                        colors="primary:#26418D,secondary:#8DB2D8"
                                    >
                                    </lord-icon>
                                </div>
                                <div class="no-philo-intro__content --tac">
                                    <h3 class="no-philo-intro__label no-heading-xs">기술중심경영</h3>
                                    <p class="no-philo-intro__lang no-body-sm">Technology Development Management</p>
                                </div>
                            </div>
                        </li>
                        <li class="no-philo-intro__item">
                            <div class="no-philo-intro__box">
                                <div class="no-philo-intro__icon">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/rcuovkuy.json"
                                        trigger="loop"
                                        delay="2000"
                                        colors="primary:#26418D,secondary:#8DB2D8"
                                    >
                                    </lord-icon>
                                </div>
                                <div class="no-philo-intro__content --tac">
                                    <h3 class="no-philo-intro__label no-heading-xs">신뢰경영</h3>
                                    <p class="no-philo-intro__lang no-body-sm">Trust-Based Management</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="no-section-xl no-philo-service">
                <div class="no-container-lg no-philo-service__container">
                    <div class="no-philo-service__head" <?= $AOS_FADE_UP ?>>
                        <h2 class="no-heading-xl">
                            최상의 건물관리 토탈서비스 제공
                        </h2>
                    </div>
                    <div class="no-philo-service__body no-pd-5xl--t">
                        <ul class="no-philo-service__list">
                            <li class="no-philo-service__item" <?= $AOS_FADE_UP ?>>
                                <div class="no-philo-service__image">
                                    <img src="/resource/images/sub/philo_1.jpg" alt="">
                                </div>
                                <div class="no-philo-service__content">
                                    <h3 class="no-heading-xs">01. 관리목표</h3>
                                    <p class="no-philo-service__phrases no-pd-xl--t">
                                        <span>창조적 관리</span>
                                        <span>경제적 관리</span>
                                        <span>과학적 관리</span>
                                        <span>합리적 관리</span>
                                    </p>
                                </div>
                            </li>
                            <li class="no-philo-service__item" <?= $AOS_FADE_UP ?>>
                                <div class="no-philo-service__image">
                                    <img src="/resource/images/sub/philo_2.jpg" alt="">
                                </div>
                                <div class="no-philo-service__content">
                                    <h3 class="no-heading-xs">02. 사훈</h3>
                                    <p class="no-philo-service__phrases no-pd-xl--t">
                                        <span>誠 實 (성실)</span>
                                        <span>責 任 (책임)</span>
                                        <span>正 直 (정직)</span>
                                    </p>
                                </div>
                            </li>
                            <li class="no-philo-service__item" <?= $AOS_FADE_UP ?>>
                                <div class="no-philo-service__image">
                                    <img src="/resource/images/sub/philo_3.jpg" alt="">
                                </div>
                                <div class="no-philo-service__content">
                                    <h3 class="no-heading-xs">03. 관리지표</h3>
                                    <p class="no-philo-service__phrases no-pd-xl--t">
                                        <span>관리업무의 전문화</span>
                                        <span>과학화, 네트워크화</span>
                                        <span>관리시설의 안정성, 경제성, 쾌적성 지향</span>
                                        <span>인터넷 통합관리 솔루션</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="no-philo-service__background">
                    <img src="/resource/images/sub/philo_bg.jpg" alt="">
                </div>
            </section>
        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>