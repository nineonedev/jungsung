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
            
            <section class="no-section-xl no-pofol-case no-board">
                <div class="no-container-xl">
                    <h2 class="no-heading-xl --tac">
                        숫자와 사례로 확인하는 신뢰의 기록
                    </h2>

                    <div class="no-board__filter">
                        <span>전체 301건</span>
                        <div>
                            <select name="" id=""></select>
                            <div class="no-form-control">
                                <input type="password" name="" id="">
                            </div>
                        </div>
                    </div>

                    <form method="get">
                        <input type="hidden" name="page" value="">
                        <input type="hidden" name="perpage" value="9">
                        <input type="hidden" name="column" value="title">
                        <input type="hidden" name="search" value="">


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
                    <div class="no-pd-4xl--t">
                        <ul class="no-main-pofol__list no-pofol-case__list">
                            <?php foreach ($POFOL_DATA as $i => $row): 
                            $n   = $i + 1;
                            $img = "/resource/images/main/pofol_{$n}.jpg";
                            $title = htmlspecialchars($row['title'], ENT_QUOTES);
                            $location = htmlspecialchars($row['location'], ENT_QUOTES);
                            $area = htmlspecialchars($row['area'], ENT_QUOTES);
                            ?>
                            <li class="no-main-pofol__item">
                                <a href="#" class="no-main-pofol__link">
                                    <figure class="no-main-pofol__image no-main-pofol__image--case">
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

                        <div class="no-pd-5xl--t">
                            <nav class="no-pagination">
                                <a href="" class="no-pagination__link no-pagination__link--arrow">
                                    <i class="fa-regular fa-chevrons-left"></i>
                                </a>
                                <a href="" class="no-pagination__link no-pagination__link--arrow">
                                    <i class="fa-regular fa-chevron-left"></i>
                                </a>
                                <a href="" class="no-pagination__link no-pagination__link--num" aria-current="page">
                                    <span>1</span>
                                </a>
                                <a href="" class="no-pagination__link no-pagination__link--num">
                                    <span>2</span>
                                </a>
                                <a href="" class="no-pagination__link no-pagination__link--num">
                                    <span>3</span>
                                </a>
                                <a href="" class="no-pagination__link no-pagination__link--arrow">
                                    <i class="fa-regular fa-chevron-right"></i>
                                </a>
                                <a href="" class="no-pagination__link no-pagination__link--arrow">
                                    <i class="fa-regular fa-chevrons-right"></i>
                                </a>
                            </nav>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>