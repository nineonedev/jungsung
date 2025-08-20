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
            
            <section class="no-section-xl no-loc">
                <div class="no-container-xl">
                    <div class="no-loc-map__head">
                        <h2 class="no-heading-xl">찾아오시는 길</h2>
                        <p class="no-loc-map__desc">
                            정성종합관리(주)는 언제나 고객 여러분의 편의를 최우선으로 생각합니다.
                            <br>
                            방문 전 문의 주시면 교통 안내와 주차 안내 등 세부 사항을 친절히 안내드리며,
                            <br>
                            쾌적한 환경에서 맞이할 수 있도록 항상 준비하고 있겠습니다.
                        </p>
                    </div>
                    <div class="no-loc-map__body no-pd-4xl--t">
                        <div class="no-loc-map__view">
                            <div id="daumRoughmapContainer1755671992417" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                            <script charset="UTF-8">
                                new daum.roughmap.Lander({
                                    "timestamp" : "1755671992417",
                                    "key" : "7p4ic9gdmaf",
                                    "mapWidth" : "100%",
                                    "mapHeight" : "100%"
                                }).render();
                            </script>
                        </div>
                    </div>

                    <div class="no-loc-block">
                        <div class="no-loc-block__head">
                            <h3 class="no-heading-xs">기본 정보</h3>
                            <div class="no-loc-block__body">
                                <div class="no-loc-block__detail">
                                    <dl class="--full">
                                        <dt>주소</dt>
                                        <dd>인천 부평구 경인로 1080-1 (부개동) 401호,402호 (부개동,세원빌딩)</dd>
                                    </dl>
                                    <dl>
                                        <dt>TEL</dt>
                                        <dd>032-505-2213</dd>
                                    </dl>
                                    <dl>
                                        <dt>FAX</dt>
                                        <dd>032-505-2215</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="no-loc-block">
                        <div class="no-loc-block__head">
                            <h3 class="no-heading-xs">교통 안내</h3>
                        </div>
                        <div class="no-loc-block__body">
                            <ul class="no-loc-guide__list">
                                <li class="no-loc-guide__item">
                                    <div class="no-loc-guide__content">
                                        <h4 class="no-loc-guide__title">
                                            <i class="fa-light fa-train-subway"></i>
                                            <span>지하철</span>
                                        </h4>
                                        <p class="no-loc-guide__desc">
                                           <em class="no-loc-guide__line no-loc-guide__line--1">1</em> 호선 부개역 하차 <b>→ 2번 출구에서 도보 약 5분 거리</b>
                                        </p>
                                    </div>
                                </li>
                                <li class="no-loc-guide__item">
                                    <div class="no-loc-guide__content">
                                        <h4 class="no-loc-guide__title">
                                            <i class="fa-light fa-bus"></i>
                                            <span>버스</span>
                                        </h4>
                                        <p class="no-loc-guide__desc">
                                            부개역 또는 부개동 세원빌딩 인근 정류장 하차 <b>(간선·지선버스 다수 운행)</b>
                                        </p>
                                    </div>
                                </li>
                                <li class="no-loc-guide__item">
                                    <div class="no-loc-guide__content">
                                        <h4 class="no-loc-guide__title">
                                            <i class="fa-light fa-car"></i>
                                            <span>차량</span>
                                        </h4>
                                        <p class="no-loc-guide__desc no-loc-guide__desc--detail">
                                            <span>
                                                경인로를 따라 오시면 세원빌딩 앞 진입로를 통해 주차 가능합니다.
                                            </span>
                                            <span>
                                                부개IC, 부평IC와 가까워 외곽순환도로, 경인고속도로 이용이 편리합니다.
                                            </span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>