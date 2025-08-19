<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>
<?php //include_once $STATIC_ROOT."/inc/lib/counter.inc.php";?>
<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>

<div class="no-page">
    <div class="no-layout">
        
        <?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>
        <?php include_once $STATIC_ROOT . '/inc/layouts/drawer.php'; ?>

        <main>
            <!-- Hero -->
            <section class="no-main-hero">
                <div class="swiper" id="main-hero-swiper">
                    <ul class="swiper-wrapper">
                        <li class="no-main-hero__slide swiper-slide --full-height">
                            <div class="no-container-xl no-main-hero__container no-section-xl">
                                <div class="no-main-hero__content">
                                    <h2 class="no-main-hero__title">
                                        사람이 머무는 곳, <br>정성이 필요합니다.
                                    </h2>
                                    <h3 class="no-main-hero__sub-title no-heading-xs">
                                        Every Stay Needs JungSung
                                    </h3>
                                    <div class="no-main-hero__cta">
                                        <button type="button" class="no-btn no-btn--md no-btn--white-outline">
                                            <span>견적문의</span>
                                            <i class="fa-light fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="no-main-hero__image">
                                <img src="/resource/images/main/main_slide_1.jpg" alt="">
                            </div>
                        </li>
                        <li class="no-main-hero__slide swiper-slide --full-height">
                            <div class="no-container-xl no-main-hero__container no-section-xl">
                                <div class="no-main-hero__content">
                                    <h2 class="no-main-hero__title">
                                        정성이 머무는 순간, <br>공간이 달라집니다.
                                    </h2>
                                    <h3 class="no-main-hero__sub-title no-heading-xs">
                                        Where Care Transforms Every Space
                                    </h3>
                                    <div class="no-main-hero__cta">
                                        <button type="button" class="no-btn no-btn--md no-btn--white-outline">
                                            <span>견적문의</span>
                                            <i class="fa-light fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="no-main-hero__image">
                                <img src="/resource/images/main/main_slide_2.jpg" alt="">
                            </div>
                        </li>
                        <li class="no-main-hero__slide swiper-slide --full-height">
                            <div class="no-container-xl no-main-hero__container no-section-xl">
                                <div class="no-main-hero__content">
                                    <h2 class="no-main-hero__title">
                                        사람이 함께하는 곳, <br> 마음이 깃듭니다.
                                    </h2>
                                    <h3 class="no-main-hero__sub-title no-heading-xs">
                                        Every Gathering Embraces JungSung
                                    </h3>
                                    <div class="no-main-hero__cta">
                                        <button type="button" class="no-btn no-btn--md no-btn--white-outline">
                                            <span>견적문의</span>
                                            <i class="fa-light fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="no-main-hero__image">
                                <img src="/resource/images/main/main_slide_3.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                    <div class="no-main-hero__control">
                        <div class="no-main-hero__fraction">
                            <span>01</span>
                            <i></i>
                            <span>03</span>
                        </div>
                        <div class="no-main-hero__pagination"></div>
                        <div class="no-main-hero__buttons">
                            <button type="button" class="no-main-hero__button no-main-hero__button--prev swiper-button-prev">
                                <i class="fa-regular fa-arrow-left"></i>
                            </button>
                            <button type="button" class="no-main-hero__button no-main-hero__button--next swiper-button-next">
                                <i class="fa-regular fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Philosophy -->
            <section class="no-section-xl no-main-philo --full-height">
                <div class="no-container-md no-main-philo__container">
                    <div class="no-main-philo__card">
                        <em class="no-main-philo__char" title="精誠">
                            <svg width="126" height="60" viewBox="0 0 126 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M40.012 28.144H45.26V41.712H40.012V28.144ZM31.628 41.008H53.068V42.864H31.628V41.008ZM51.148 28.144H50.508L53.196 24.944L59.596 29.68C59.3827 29.936 59.0627 30.192 58.636 30.448C58.2093 30.704 57.6547 30.8747 56.972 30.96V52.4C56.972 53.68 56.8013 54.8107 56.46 55.792C56.1187 56.7733 55.3933 57.5413 54.284 58.096C53.2173 58.6933 51.532 59.0987 49.228 59.312C49.1853 58.4587 49.0573 57.6907 48.844 57.008C48.6733 56.3253 48.396 55.792 48.012 55.408C47.5853 54.9813 47.0093 54.5973 46.284 54.256C45.5587 53.9573 44.5133 53.7013 43.148 53.488V52.592C43.148 52.592 43.4253 52.6133 43.98 52.656C44.5773 52.6987 45.26 52.7413 46.028 52.784C46.8387 52.8267 47.6067 52.8693 48.332 52.912C49.0573 52.9547 49.5693 52.976 49.868 52.976C50.38 52.976 50.7213 52.8693 50.892 52.656C51.0627 52.4427 51.148 52.144 51.148 51.76V28.144ZM28.62 28.144V25.584L34.636 28.144H52.876V30H34.316V57.392C34.316 57.5627 34.0813 57.7973 33.612 58.096C33.1853 58.4373 32.588 58.736 31.82 58.992C31.0947 59.248 30.3267 59.376 29.516 59.376H28.62V28.144ZM11.276 0.0479965L19.212 0.815998C19.1693 1.24266 18.9987 1.62666 18.7 1.968C18.4013 2.26666 17.8467 2.45866 17.036 2.544V57.648C17.036 57.8187 16.8013 58.0533 16.332 58.352C15.9053 58.6507 15.3293 58.9067 14.604 59.12C13.8787 59.376 13.1533 59.504 12.428 59.504H11.276V0.0479965ZM16.588 27.824C18.9773 28.8053 20.8547 29.872 22.22 31.024C23.5853 32.176 24.5667 33.3067 25.164 34.416C25.7613 35.5253 26.0173 36.5493 25.932 37.488C25.8893 38.384 25.6333 39.1093 25.164 39.664C24.6947 40.176 24.076 40.432 23.308 40.432C22.54 40.432 21.7507 40.0907 20.94 39.408C20.812 38.1707 20.4707 36.8907 19.916 35.568C19.3613 34.2027 18.7213 32.88 17.996 31.6C17.2707 30.32 16.5667 29.1893 15.884 28.208L16.588 27.824ZM1.676 23.088H18.764L21.9 18.928C21.9 18.928 22.22 19.2053 22.86 19.76C23.5 20.272 24.268 20.912 25.164 21.68C26.06 22.448 26.8707 23.1947 27.596 23.92C27.468 24.6027 26.892 24.944 25.868 24.944H2.188L1.676 23.088ZM10.316 23.088H16.524V24.112C15.244 29.1467 13.324 33.84 10.764 38.192C8.24667 42.5013 5.17467 46.32 1.548 49.648L0.716 48.944C2.29467 46.5547 3.68133 43.9307 4.876 41.072C6.11333 38.2133 7.18 35.248 8.076 32.176C9.01467 29.0613 9.76133 26.032 10.316 23.088ZM3.468 4.848C5.516 6.64 6.988 8.38933 7.884 10.096C8.78 11.8027 9.24933 13.3387 9.292 14.704C9.37733 16.0693 9.164 17.1787 8.652 18.032C8.18267 18.8853 7.54267 19.3547 6.732 19.44C5.964 19.5253 5.17467 19.12 4.364 18.224C4.492 16.816 4.47067 15.344 4.3 13.808C4.172 12.2293 3.93733 10.6933 3.596 9.2C3.29733 7.664 2.97733 6.29866 2.636 5.104L3.468 4.848ZM21.132 4.144L28.492 6.64C28.364 7.024 28.108 7.344 27.724 7.6C27.34 7.81333 26.7853 7.92 26.06 7.92C25.0787 9.968 23.9907 12.0373 22.796 14.128C21.6013 16.2187 20.364 18.0533 19.084 19.632L18.06 19.184C18.572 17.2213 19.1053 14.8747 19.66 12.144C20.2147 9.37066 20.7053 6.704 21.132 4.144ZM27.148 7.088H51.276L54.476 2.864C54.476 2.864 54.8173 3.14133 55.5 3.696C56.1827 4.25066 56.972 4.912 57.868 5.68C58.8067 6.448 59.6387 7.19466 60.364 7.92C60.1933 8.60266 59.6173 8.944 58.636 8.944H27.596L27.148 7.088ZM27.532 13.872H50.764L53.772 9.968C53.772 9.968 54.092 10.224 54.732 10.736C55.372 11.248 56.1187 11.8667 56.972 12.592C57.868 13.3173 58.6573 14.0213 59.34 14.704C59.2973 15.0453 59.1267 15.3013 58.828 15.472C58.5293 15.6427 58.1667 15.728 57.74 15.728H28.044L27.532 13.872ZM25.42 21.296H52.876L56.076 17.136C56.076 17.136 56.4173 17.4133 57.1 17.968C57.7827 18.48 58.572 19.12 59.468 19.888C60.4067 20.656 61.2387 21.3813 61.964 22.064C61.7933 22.7467 61.2387 23.088 60.3 23.088H25.932L25.42 21.296ZM39.18 0.367996L47.308 1.072C47.2653 1.49866 47.0733 1.88266 46.732 2.224C46.3907 2.52266 45.8147 2.736 45.004 2.864V21.872H39.18V0.367996ZM114.892 2.032C117.025 2.33066 118.711 2.8 119.948 3.44C121.185 4.08 122.06 4.784 122.572 5.552C123.084 6.27733 123.297 7.00267 123.212 7.728C123.127 8.41066 122.849 8.98667 122.38 9.456C121.911 9.92533 121.313 10.1813 120.588 10.224C119.863 10.2667 119.116 10.0107 118.348 9.456C118.135 8.21866 117.623 6.96 116.812 5.68C116.001 4.35733 115.169 3.29066 114.316 2.48L114.892 2.032ZM92.684 13.744H115.916L119.244 9.712C119.244 9.712 119.585 9.968 120.268 10.48C120.951 10.992 121.761 11.632 122.7 12.4C123.681 13.1253 124.535 13.8293 125.26 14.512C125.132 15.1947 124.556 15.536 123.532 15.536H92.684V13.744ZM92.94 25.584H102.476V27.44H92.94V25.584ZM89.612 13.744V13.104V11.248L95.884 13.744H94.988V29.04C94.988 31.472 94.9027 34.032 94.732 36.72C94.5613 39.3653 94.1347 42.0533 93.452 44.784C92.7693 47.472 91.724 50.0747 90.316 52.592C88.908 55.0667 86.9453 57.3493 84.428 59.44L83.596 58.864C85.4733 55.9627 86.8173 52.8693 87.628 49.584C88.4813 46.2987 89.0147 42.9067 89.228 39.408C89.484 35.9093 89.612 32.4747 89.612 29.104V13.744ZM100.492 25.584H99.852L102.412 22.896L107.596 27.056C107.212 27.568 106.423 27.9093 105.228 28.08C105.185 32.944 105.079 36.8267 104.908 39.728C104.737 42.6293 104.46 44.848 104.076 46.384C103.735 47.92 103.201 49.008 102.476 49.648C101.836 50.288 101.068 50.8 100.172 51.184C99.276 51.568 98.2733 51.76 97.164 51.76C97.164 50.992 97.1213 50.2453 97.036 49.52C96.9507 48.752 96.7373 48.176 96.396 47.792C96.0973 47.4507 95.6493 47.152 95.052 46.896C94.4973 46.64 93.8573 46.448 93.132 46.32V45.296C93.8573 45.3387 94.668 45.3813 95.564 45.424C96.5027 45.4667 97.2067 45.488 97.676 45.488C98.444 45.488 98.956 45.3387 99.212 45.04C99.5533 44.656 99.8093 43.7813 99.98 42.416C100.151 41.0507 100.257 39.0027 100.3 36.272C100.385 33.5413 100.449 29.9787 100.492 25.584ZM106.444 0.111996L114.636 1.008C114.593 1.43466 114.401 1.81866 114.06 2.16C113.761 2.50133 113.185 2.736 112.332 2.864C112.417 7.55733 112.524 12.2293 112.652 16.88C112.823 21.5307 113.164 25.968 113.676 30.192C114.188 34.416 114.935 38.2133 115.916 41.584C116.94 44.9547 118.327 47.728 120.076 49.904C120.46 50.416 120.759 50.672 120.972 50.672C121.185 50.6293 121.399 50.288 121.612 49.648C121.868 49.0933 122.145 48.3893 122.444 47.536C122.785 46.64 123.127 45.68 123.468 44.656C123.809 43.632 124.087 42.672 124.3 41.776L125.068 41.84L124.108 52.912C125.004 54.448 125.495 55.5573 125.58 56.24C125.708 56.9653 125.559 57.584 125.132 58.096C124.407 58.9067 123.532 59.2267 122.508 59.056C121.527 58.8853 120.524 58.416 119.5 57.648C118.519 56.9227 117.644 56.112 116.876 55.216C114.657 52.528 112.887 49.2213 111.564 45.296C110.284 41.3707 109.303 36.9973 108.62 32.176C107.937 27.3547 107.447 22.2347 107.148 16.816C106.892 11.3547 106.657 5.78666 106.444 0.111996ZM68.044 4.336H77.708L80.652 0.495998C80.652 0.495998 80.9507 0.751998 81.548 1.264C82.188 1.776 82.9347 2.39466 83.788 3.12C84.6413 3.80266 85.4093 4.48533 86.092 5.168C85.9213 5.85066 85.3667 6.192 84.428 6.192H68.556L68.044 4.336ZM68.044 20.592H78.412L81.228 17.008C81.228 17.008 81.5053 17.264 82.06 17.776C82.6573 18.2453 83.3613 18.8213 84.172 19.504C84.9827 20.144 85.708 20.784 86.348 21.424C86.1773 22.1067 85.6227 22.448 84.684 22.448H68.556L68.044 20.592ZM68.044 28.976H78.412L81.228 25.392C81.228 25.392 81.5053 25.6267 82.06 26.096C82.6573 26.5653 83.3613 27.1413 84.172 27.824C84.9827 28.5067 85.708 29.168 86.348 29.808C86.1773 30.448 85.6227 30.768 84.684 30.768H68.556L68.044 28.976ZM65.356 12.272H80.588L83.852 8.048C83.852 8.048 84.172 8.32533 84.812 8.88C85.4947 9.43466 86.284 10.096 87.18 10.864C88.1187 11.632 88.972 12.3787 89.74 13.104C89.5693 13.744 88.9933 14.064 88.012 14.064H65.804L65.356 12.272ZM67.852 37.296V34.864L73.42 37.296H82.38V39.152H73.164V57.072C73.164 57.2 72.9293 57.4133 72.46 57.712C72.0333 58.0107 71.4787 58.2667 70.796 58.48C70.156 58.6933 69.4307 58.8 68.62 58.8H67.852V37.296ZM80.012 37.296H79.436L82.06 34.48L87.756 38.704C87.5853 38.96 87.2867 39.1947 86.86 39.408C86.4333 39.6213 85.9427 39.7707 85.388 39.856V54.192C85.388 54.32 85.132 54.512 84.62 54.768C84.108 55.024 83.5107 55.2587 82.828 55.472C82.1453 55.728 81.5053 55.856 80.908 55.856H80.012V37.296ZM70.86 50.928H82.636V52.72H70.86V50.928ZM117.836 20.656L125.388 23.088C125.26 23.472 124.983 23.792 124.556 24.048C124.172 24.304 123.617 24.432 122.892 24.432C121.697 29.4667 120.033 34.16 117.9 38.512C115.809 42.864 113.207 46.7467 110.092 50.16C106.977 53.5307 103.329 56.3253 99.148 58.544L98.316 57.776C101.815 55.344 104.865 52.272 107.468 48.56C110.113 44.848 112.289 40.624 113.996 35.888C115.745 31.152 117.025 26.0747 117.836 20.656Z" fill="black"/>
                            </svg>
                        </em>
                        <span class="no-main-philo__line"></span>
                        <h2 class="no-main-philo__title no-heading-md">
                            처음부터 끝까지, <br>건물 관리의 본질을 생각합니다.
                        </h2>
                        <p class="no-main-philo__desc">
                            정성은 눈에 보이지 않는 곳에서 시작됩니다. <br>
                            관리의 기준, 그 깊이를 다르게 만듭니다.
                        </p>

                        <div class="no-main-philo__cta">
                            <button type="button" class="no-btn no-btn--primary no-btn--md">
                                <span>경영이념</span>
                                <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="no-main-philo__background"></div>
            </section>

            <!-- Solutions -->
            <section class="no-section-xl no-main-solution">
                <div class="no-container-xl no-main-solution__container">
                    <div class="no-main-solution__head">
                        <h2 class="no-heading-xl">
                            건물관리의 모든 것,<br> 
                            정성종합관리의 토탈 솔루션
                        </h2>
                    </div>
                    <div class="no-main-solution__body no-pd-4xl--t">
                        <ul class="no-main-solution__list">
                            <?php foreach ($solutions as $i => $item): 
                                $idx   = $i + 1;
                                $img   = "/resource/images/main/main_solution_{$idx}.jpg";
                                $href  = "/pages/solutions/" . ($item['isHash'] ? "#{$item['filename']}" : $item['filename']);
                                $title = $item['title'];
                                $desc  = $descs[$item['filename']] ?? "";
                            ?>
                            <li class="no-main-solution__item">
                                <a href="<?= $href ?>" class="no-main-solution__link">
                                    <figure class="no-main-solution__image">
                                        <img src="<?= $img ?>" alt="<?= $title ?>">
                                    </figure>
                                    <div class="no-main-solution__content">
                                        <h3 class="no-main-solution__label no-heading-xs">
                                            <?= $title ?>
                                        </h3>
                                        <?php if ($desc): ?>
                                        <p class="no-main-solution__desc">
                                            <?= $desc ?>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="no-main-solution__cta">
                            <a href="/pages/services/facility-management.php" class="no-btn no-btn--md no-btn--primary">
                                <span>사업영역 보러가기</span>
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="no-main-solution__background">
                    <img src="/resource/images/main/main_solution_bg.jpg" alt="">
                </div>
            </section>


            <?php
                $FEATURE_DATA = [
                    [
                        'lord_icon' => 'tdpsbogb',
                        'title' => '전문성과 경험', 
                        'desc' => '20년 이상 축적된 건물종합관리 경험을 바탕으로, 주요 공공기관 및 민간시설의 운영 실적을 확보하여 안정적이고 신뢰받는 서비스를 제공합니다.',
                    ],
                    [
                        'lord_icon' => 'hibixlbn',
                        'title' => '통합관리 시스템', 
                        'desc' => '경비, 미화, 시설관리뿐 아니라 전기·소방·엘리베이터 등 협력업체와의 유기적인 연계를 통해, 효율적이고 체계적인 통합 관리를 실현합니다.',
                    ],
                    [
                        'lord_icon' => 'heqlbljj',
                        'title' => '정성의 차이', 
                        'desc' => '철저한 현장 조사와 체크리스트 기반 운영, 고객 피드백 반영을 통해 눈에 보이지 않는 곳까지 꼼꼼하게 관리하는 것이 정성의 차별화된 서비스입니다.',
                    ],
                    [
                        'lord_icon' => 'rcuovkuy',
                        'title' => '설립부터 운영까지', 
                        'desc' => '관리단 구성, 회계 시스템 구축, 관리규약 자문 등 건물 초기 단계부터 위탁운영까지 전 과정을 함께 설계하고 지원합니다.',
                    ],
                ];
            ?>
            <!-- Features -->
            <section class="no-section-xl no-main-feature">
                <div class="no-container-xl">
                    <div class="no-main-feature__head">
                        <h2 class="no-heading-xl">
                            정성종합관리가 <em>특별한 이유</em>
                        </h2>
                    </div>
                    <div class="no-main-feature__body no-pd-4xl--t">
                        <div class="no-main-feature__div">
                            <ul class="no-main-feature__list">
                                <?php foreach ($FEATURE_DATA as $row) : ?>
                                <li class="no-main-feature__item">
                                    <div class="no-main-feature__icon">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/<?= $row['lord_icon'] ?>.json"
                                            trigger="hover"
                                            colors="primary:#ffffff,secondary:#ffffff"
                                        >
                                        </lord-icon>
                                    </div>
                                    <div class="no-main-feature__content">
                                        <h3 class="no-heading-xs no-main-feature__label"><?= $row['title'] ?></h3>
                                        <p class="no-main-feature__desc"><?= $row['desc'] ?></p>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="no-main-feature__cta">
                                <a href="/pages/services/ceo-message.php" class="no-btn no-btn--md no-btn--primary">
                                    <span>회사소개 보러가기</span>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="no-main-feature__pic">
                                <div class="no-main-feature__image">
                                    <img src="/resource/images/main/main_feature.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Portfolio -->
            <section class="no-section-xl no-main-pofol">
                <div class="no-container-xl">
                    <div class="no-main-pofol__top">
                        <div class="no-main-pofol__total">
                            <div class="no-main-pofol__enter">
                                <i></i>
                                <span>정성의 손길이 닿은 곳</span>
                            </div>
                            <div class="no-main-pofol__num">
                                <em>125</em>
                                <i>+</i>
                            </div>
                        </div>
                        <div class="no-main-pofol__head">
                            <h2 class="no-heading-xl no-main-pofol__title">
                                지금 이순간에도, <em>관리 중입니다.</em>
                            </h2>
                            <p class="no-main-pofol__desc --wrap no-pd-xl--t">
                                정성종합관리는 전국 각지의 대형 상업시설, 복합시설, 오피스 등을 <br>
                                체계적으로 운영하며 고객과 입주사의 만족을 높이고 있습니다.<br>
                                실시간으로 관리 중인 주요 현장들을 통해 당사의 운영 역량과 실적을 확인해보세요.
                            </p>
                        </div>
                    </div>

                    <?php
                        $POFOL_DATA = [
                            [
                                'title'   => '송도 드림시티',
                                'location'=> '인천광역시 연수구 송도동',
                                'area'    => '46,894.22 m²',
                            ],
                            [
                                'title'   => '송도 5gt',
                                'location'=> '인천광역시 연수구 송도동',
                                'area'    => '29,771.98 m²',
                            ],
                            [
                                'title'   => '배곧센터 프라자 2',
                                'location'=> '시흥 배곧동',
                                'area'    => '16,340.36 m²',
                            ],
                            [
                                'title'   => '오앤에스골드타워',
                                'location'=> '부천 소사구 옥길동',
                                'area'    => '15,521.06 m²',
                            ],
                            [
                                'title'   => '상동월드프라자',
                                'location'=> '부천시 원미구 상동',
                                'area'    => '8,262.71 m²',
                            ],
                        ];

                    ?>
                    <div class="no-main-pofol__carousel no-pd-4xl--t swiper" id="main-pofol-swiper">
                        <ul class="no-main-pofol__list swiper-wrapper">
                            <?php foreach ($POFOL_DATA as $i => $row): 
                            $n   = $i + 1;
                            $img = "/resource/images/main/pofol_{$n}.jpg";
                            $title = htmlspecialchars($row['title'], ENT_QUOTES);
                            $location = htmlspecialchars($row['location'], ENT_QUOTES);
                            $area = htmlspecialchars($row['area'], ENT_QUOTES);
                            ?>
                            <li class="no-main-pofol__item swiper-slide">
                                <a href="#" class="no-main-pofol__link">
                                    <figure class="no-main-pofol__image">
                                        <img src="<?= $img ?>" alt="<?= $title ?> 전경">
                                    </figure>
                                    <div class="no-main-pofol__content">
                                        <h3 class="no-main-pofol__label no-heading-xs"><?= $title ?></h3>
                                        <div class="no-main-pofol__info">
                                            <dl class="no-main-pofol__detail">
                                                <dt>건물위치</dt>
                                                <dd><?= $location ?></dd>
                                            </dl>
                                            <dl class="no-main-pofol__detail">
                                                <dt>관리면적</dt>
                                                <dd><?= $area ?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="no-main-pofol__control no-pd-4xl--t">
                            <div class="no-main-pofol__buttons">
                                <button type="button" class="no-main-pofol__button no-main-pofol__button--prev">
                                    <i class="fa-regular fa-arrow-left"></i>
                                </button>
                                <button type="button" class="no-main-pofol__button no-main-pofol__button--next">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="no-main-pofol__cta">
                                <a href="" class="no-btn no-btn--md no-btn--primary">
                                    <span>관리실적 보러가기</span>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php
                $NOTICE_DATA = [
                    [
                        'title' => '신규 위탁관리 계약 체결',
                        'regdate'  => '2025-03-28',
                    ],
                    [
                        'title' => '정기 안전점검 및 유지보수 완료',
                        'regdate'  => '2025-03-17',
                    ],
                    [
                        'title' => '노후 건물 리모델링 컨설팅 착수',
                        'regdate'  => '2025-02-21',
                    ],
                    [
                        'title' => '홈페이지 리뉴얼 오픈 안내',
                        'regdate'  => '2025-01-05',
                    ],
                ];
            ?>
            <!-- Notice -->
            <section class="no-section-xl no-main-comm no-main-notice">
                <div class="no-container-xl">
                    <div class="no-main-comm__div">
                        <div class="no-main-comm__head">
                            <h2 class="no-heading-xl">공지사항</h2>
                            <p class="no-pd-md--t --wrap">
                                정성종합관리(주)의 최신 소식과 안내를 전해드립니다. <br>
                                관리 계약 체결, 시설 점검, 고객 안내 등 각종 공지사항을 통해 <br> 
                                고객 여러분과의 신뢰를 이어갑니다.
                            </p>
                            <div class="no-main-comm__cta">
                                <a href="" class="no-btn no-btn--md no-btn--primary-outline">
                                    <span>전체 보기</span>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="no-main-comm__body no-main-comm__body--notice">
                            <ul class="no-main-notice__list">
                                <?php foreach ($NOTICE_DATA as $notice) : 
                                    $timestamp = strtotime($notice['regdate']);    
                                ?>
                                <li class="no-main-notice__item">
                                    <a href="" class="no-main-notice__link">
                                        <div class="no-main-notice__date">
                                            <span class="no-heading-md"><?= date('d',  $timestamp)?></span>
                                            <small><?= date('y. m', $timestamp) ?></small>
                                        </div>
                                        <h3 class="no-main-notice__label no-body-xl">
                                            <strong><?= $notice['title'] ?></strong>
                                        </h3>
                                        <div class="no-main-notice__icon">
                                            <i class="fa-light fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Resource -->
            <section class="no-section-xl no-main-comm no-main-resource">
                <div class="no-container-xl">
                    <div class="no-main-comm__div">
                        <div class="no-main-comm__head">
                            <h2 class="no-heading-xl">자료실</h2>
                            <p class="no-pd-md--t --wrap">
                                정성종합관리(주)의 최신 소식과 안내를 전해드립니다.<br>
                                관리 계약 체결, 시설 점검, 고객 안내 등 각종 공지사항을 통해 <br> 
                                고객 여러분과의 신뢰를 이어갑니다.
                            </p>
                            <div class="no-main-comm__cta">
                                <a href="" class="no-btn no-btn--md no-btn--primary-outline">
                                    <span>전체 보기</span>
                                    <i class="fa-light fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="no-main-comm__body no-main-comm__body--resource">
                            <div class="no-main-resource__carousel swiper" id="main-resource-swiper">
                                <ul class="no-main-resource__list swiper-wrapper">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                    <li class="no-main-resource__item swiper-slide">
                                        <a href="#" class="no-main-resource__link">
                                            <figure class="no-main-resource__image">
                                                <img src="/resource/images/main/doc.jpg" alt="">
                                            </figure>
                                            <div class="no-main-resource__content">
                                                <h3 class="no-main-resource__label">공동주택 관리규약 준칙</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section class="no-section-xl no-main-contact">
                <div class="no-container-xl no-main-contact__container">
                    <div class="no-main-contact__content">
                        <h2 class="no-main-contact__title no-heading-lg">
                            믿을 수 있는 관리 파트너를 찾고 계신가요?
                        </h2>
                        <p class="no-main-contact__desc">
                            건물관리부터 미화·경비·시설 운영까지, <br>
                            정성종합관리(주)가 함께 고민하고 최적의 솔루션을 제안해드립니다.
                        </p>
                        <div class="no-main-contact__cta">
                            <button type="button" class="no-btn no-btn--lg no-btn--white-primary">
                                <span>견적 문의하기</span>
                                <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="no-main-contact__background">
                    <img src="/resource/images/main/main_contact.jpg" alt="">
                </div>
            </section>

        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>