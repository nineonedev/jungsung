<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>
<?php //include_once $STATIC_ROOT."/inc/lib/counter.inc.php";?>
<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>

<div class="no-page">
    <div class="no-layout">
        
        <?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>
        <?php include_once $STATIC_ROOT . '/inc/layouts/drawer.php'; ?>

        <main>
            <?php include_once $STATIC_ROOT . '/inc/components/sub.hero.php'; ?>

            <div class="no-floating-container">
                <aside class="no-floating-menu no-section-lg">
                    <nav class="no-floating-menu__nav no-section-lg">
                        <?php foreach ($CUR_PAGE_LIST[0]['pages'] as $pageItem) : ?>
                        <a 
                            href="<?= $pageItem['path'].'#'.$pageItem['hash'] ?? ''; ?>"
                            class="no-floating-menu__link"
                        ><?=$pageItem['title']?></a>
                        <?php endforeach; ?>
                    </nav>
                </aside>
                
                <div class="no-floating-content">
                    <section class="no-section-lg">
                        <div class="no-container-xl">
                            <div class="no-service-hero no-section-xl" <?= $AOS_FADE_UP ?>>
                                <div class="no-service-hero__content --tac">
                                    <h2 class="no-service-hero__title no-heading-xl">
                                        사업영역
                                    </h2>
                                    <p class="no-pd-xl--t --wrap">
                                        건물의 안전, 청결, 관리까지 정성종합관리(주)는 
                                        <br>
                                        경비, 미화, 시설관리 전 분야에서 전문 인력과 체계적인 운영으로
                                        <br>
                                        고객 자산의 가치를 지키는 종합관리 전문기업입니다.    
                                    </p>
                                </div>
                                <div class="no-service-hero__bg">
                                    <img src="/resource/images/sub/service_summary.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
                    $services = [
                        [
                            'key' => 'facility',
                            'title' => '시설관리',
                            'desc'  => "건물을 '관리'하는 수준을 넘어, <br> 그 '가치'를 높이는 것이 정성의 철학입니다.",
                            'steps' => [
                                ['label' => '에너지 및 비용 효율 관리', 'detail' => ''],
                                ['label' => '시설물 유지보수 및 점검',   'detail' => ''],
                                ['label' => '고객 및 입주민 응대·지원',  'detail' => ''],
                                ['label' => '관리비 대행',               'detail' => ''],
                                ['label' => '안전·위생·환경 관리',       'detail' => ''],
                            ],
                        ],
                        [
                            'key' => 'cleaning',
                            'title' => '미화관리서비스',
                            'desc'  => '보이지 않는 곳까지 깨끗하게, 정성은 다릅니다.',
                            'steps' => [
                                ['label' => '업무계획 수립', 'detail' => '업무범위 파악 후 계획 수립'],
                                ['label' => '인력 배치',     'detail' => '현장 특성에 맞춘 인력 운영'],
                                ['label' => '청소작업 실시', 'detail' => '일정 및 동선에 따른 청소 수행'],
                                ['label' => '점검',           'detail' => '체크리스트 기반 품질 점검'],
                                ['label' => '평가 및 개선',   'detail' => '문제점 보완 및 지속 개선'],
                            ],
                        ],
                        [
                            'key' => 'security',
                            'title' => '경비용역서비스',
                            'desc'  => '신뢰할 수 있는 경비 서비스, 정성이 다르면 결과도 다릅니다.',
                            'steps' => [
                                ['label' => '현장조사',     'detail' => '시설 구조, 출입구, 취약 지점 등 보안 방향 파악'],
                                ['label' => '구역선정',     'detail' => '필요 위치별 감시·순찰 구간 지정'],
                                ['label' => '소요인원 산정', 'detail' => '인원 수, 근무시간대, 교대조 편성·전문 인력 선발'],
                                ['label' => '인력배치',     'detail' => '교육 후 구역별 인력 투입'],
                                ['label' => '실행',         'detail' => '출입 통제, 순찰, 상황 대응 등 체크리스트 기반 운영'],
                                ['label' => '피드백',       'detail' => '고객사 의견 수렴, 문제점 개선, 품질 향상'],
                            ],
                        ],
                        [
                            'key' => 'management',
                            'title' => '관리단 설립 지원',
                            'desc'  => '건물의 시작부터 안정적인 운영까지, <br>정성종합관리(주)는 함께 고민하고 함께 준비합니다.',
                            'steps' => [
                                ['label' => '관리 구성',           'detail' => '관리단 구성 및 창립총회 준비'],
                                ['label' => '초기 회계',           'detail' => '초기 회계·운영 시스템 구축'],
                                ['label' => '관리규약 작성',       'detail' => '관리규약(정관) 작성 및 자문'],
                                ['label' => '입주민 협의체 운영',  'detail' => '입주민협의체 운영 컨설팅'],
                                ['label' => '위탁관리 제안',       'detail' => '건물 특성에 맞는 맞춤형 위탁관리 제안'],
                            ],
                        ],
                        [
                            'key' => 'compliance',
                            'title' => '법률·노무 서비스',
                            'desc'  => '기업의 안정적인 운영과 인사·노무 리스크 관리를 위해 <br>전문 변호사와 노무사가 함께 맞춤형 자문을 제공합니다.',
                            'steps' => [
                                ['label' => '법률 자문',     'detail' => '계약 검토 및 분쟁 예방을 위한 법률 상담'],
                                ['label' => '노무 컨설팅',   'detail' => '인사·노무 관리 및 노동법 이슈 대응'],
                                ['label' => '계약 관리',     'detail' => '계약서 작성·검토·협상 지원'],
                                ['label' => '분쟁 대응',     'detail' => '분쟁 발생 시 소송·합의 등 실무 지원'],
                                ['label' => '사내 규정 정비', 'detail' => '취업규칙 및 인사규정 정비·개선'],
                            ],
                        ],
                        [
                            'key' => 'backoffice',
                            'title' => '행정·회계 서비스',
                            'desc'  => '투명한 재무 관리와 효율적인 행정 업무를 위해 <br>전문 회계사와 행정사가 체계적인 솔루션을 제공합니다.',
                            'steps' => [
                                ['label' => '재무 보고',   'detail' => '기업 맞춤형 재무 보고 및 현황 분석'],
                                ['label' => '세무 신고',   'detail' => '세금 신고 및 절세 전략 수립'],
                                ['label' => '회계 관리',   'detail' => '예산·지출 관리 및 결산 업무 대행'],
                                ['label' => '행정 대행',   'detail' => '인허가 및 각종 행정 절차 신속 처리'],
                                ['label' => '경영 컨설팅', 'detail' => '재무·회계 기반 경영 전략 수립'],
                            ],
                        ],
                    ];
                    ?>

                    <section class="no-section-xl no-service-area">
                        <div class="no-container-xl">
                            <ul class="no-service-area__list">
                            <?php foreach ($services as $index => $service): ?>
                                <li class="no-service-area__item" id="<?=$service['key']?>" <?= $AOS_FADE_UP ?>>
                                    <div class="no-service-area__content">
                                        <h3 class="no-service-area__title no-heading-lg">
                                            <?= $service['title'] ?>
                                        </h3>
                                        <strong class="no-service-area__desc --wrap">
                                            <?= $service['desc'] ?>
                                        </strong>
                                        <ol class="no-service-area__process">
                                        <?php foreach ($service['steps'] as $i => $step): ?>
                                            <li class="no-service-area__step">
                                            <span class="no-service-area__num">
                                                <?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?>
                                            </span>
                                            <h4 class="no-service-area__label">
                                                <?= $step['label'] ?>
                                            </h4>
                                            <?php if (!empty($step['detail'])): ?>
                                                <p class="no-service-area__detail">
                                                    <?= $step['detail'] ?>
                                                </p>
                                            <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                        </ol>
                                    </div>
                                    <div class="no-service-picture">
                                        <div class="no-service-area__image">
                                            <img src="/resource/images/sub/service_<?=$index+1?>_main.jpg" alt="">
                                        </div>
                                        <div class="no-service-area__sub-image">
                                            <img src="/resource/images/sub/service_<?=$index+1?>_sub.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>

        </main>

        <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>
    </div>
</div>