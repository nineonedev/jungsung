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
            
            <section class="no-section-xl no-board no-resource">
                <div class="no-container-xl" <?= $AOS_FADE_UP ?>>
                    <h2 class="no-heading-xl --tac">
                        자료실
                    </h2>

                    
                    <form method="get">
                        <input type="hidden" name="page" value="">
                        <input type="hidden" name="perpage" value="9">
                        <input type="hidden" name="column" value="title">
                        <input type="hidden" name="search" value="">

                        <div class="no-board__filter no-pd-4xl--t">
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

                        <ul class="no-resource__list no-pd-3xl--t">
                            <?php for ($i = 0; $i < 12; $i ++): ?>
                            <li class="no-resource__item">
                                <article class="no-resource__block">
                                    <a href="no-resource__link">
                                        <figure class="no-resource__image">
                                            <img src="/resource/images/main/doc.jpg" alt="">
                                        </figure>
                                        <h3 class="no-resource__title">공동주택 관리규약 준칙</h3>
                                    </a>
                                </article>
                            </li>
                            <?php endfor; ?>
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