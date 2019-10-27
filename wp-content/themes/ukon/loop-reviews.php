<!--<a href="--><?//= get_the_permalink(); ?><!--" class="card__link">-->
    <div class="card card-reviews">
        <div class="card-reviews__imgs">
            <img src="<?= get_field('review_logo'); ?>" alt="" class="card-reviews__logo">
            <?php if (get_field('review_doc')) : ?>
                <img src="<?= get_field('review_doc'); ?>" alt="">
            <? endif; ?>
        </div>
        <div class="card-reviews__info">
            <div class="card__title"><?= the_title(); ?></div>
            <p><?= get_field('review_text'); ?></p>
        </div>
    </div>
<!--</a>-->