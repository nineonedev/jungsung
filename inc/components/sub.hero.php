<?php
    $subHero = $CUR_PAGE_LIST[0] ?? null; 
    if ($subHero) :
?>

<section class="no-sub-hero">
    <div class="no-container-xl no-sub-hero__container">
        <div class="no-sub-hero__content">
            <h2 class="no-heading-xl no-sub-hero__title"><?= $subHero['title'] ?? '' ?></h2>
            <p class="no-sub-hero__desc"><?= $subHero['desc'] ?? '' ?></p>
        </div>
    </div>
    <div class="no-sub-hero__background">
        <img src="/resource/images/visual/<?= $subHero['dirname'] ?>.jpg" alt="">
    </div>
</section>

<?php endif; ?>