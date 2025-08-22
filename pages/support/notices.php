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
                        공지사항
                    </h2>

                    
                    <form method="get">
                        <input type="hidden" name="page" value="">
                        <input type="hidden" name="perpage" value="9">
                        <input type="hidden" name="column" value="title">
                        <input type="hidden" name="search" value="">

                        <div class="no-board__filter no-pd-4xl--t" <?= $AOS_FADE_UP ?>>
                            <span class="no-board__total">전체 <em>301</em>건</span>
                            <div class="no-board__search">
                                <div class="no-form-select">
                                    <select name="column" id="column" class="no-form-select__input">
                                        <option value="title">제목</option>
                                        <option value="content">내용</option>
                                    </select>
                                    <div class="no-form-select__icon">
                                        <i class="fa-light fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="no-form-control no-form-control--search">
                                    <label for="search">
                                        <input 
                                            type="search" 
                                            name="search" 
                                            id="search" 
                                            placeholder="검색어를 입력해주세요."
                                            class="no-form-control__input no-form-control__input--search"
                                        >
                                        <button type="submit">
                                            <i class="fa-light fa-magnifying-glass"></i>
                                        </button>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="no-table no-pd-2xl--t" <?= $AOS_FADE_UP ?>>
                            <div class="no-table__inner">
                                <table class="no-table__self">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10%">번호</th>
                                            <th scope="col" style="width: 60%" class="--tal">제목</th>
                                            <th scope="col" style="width: 15%">조회수</th>
                                            <th scope="col" style="width: 15%">등록일</th>
                                        </tr>
                                    </thead>
                                    <tbody class="--tac">
                                        <tr>
                                            <td>
                                                <span>1</span>
                                            </td>
                                            <td class="no-table__title --tal">
                                                <a href="" class="no-table__link">
                                                    <strong class="no-table__link-text">하절기 시설 점검 안내</strong>
                                                </a>
                                            </td>
                                            <td class="no-table__attr">
                                                <span data-label="조회수">231</span>
                                            </td>
                                            <td class="no-table__attr">
                                                <span data-label="등록일">2025-08-13</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="no-table__pin">
                                                    <i class="fa-sharp fa-solid fa-megaphone"></i>
                                                </span>
                                            </td>
                                            <td class="no-table__title --tal">
                                                <a href="" class="no-table__link">
                                                    <strong class="no-table__link-text">추석 연휴 경비 강화 계획</strong>
                                                </a>
                                            </td>
                                            <td class="no-table__attr">
                                                <span data-label="조회수">231</span>
                                            </td>
                                            <td class="no-table__attr">
                                                <span data-label="등록일">2025-08-13</span>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

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