<!--<a href="--><? //= get_the_permalink(); ?><!--" class="card__link">-->
<div class="card card-reviews">
    <div class="card-reviews__imgs">
        <div class="card-reviews__logo">
            <img src="<?= get_field('review_logo'); ?>" alt="">
        </div>
        <?php if (get_field('review_doc')) : ?>
            <div class="card-reviews__doc">
                <a data-fancybox="reviews-doc" href="<?= get_field('review_doc'); ?>"><img src="<?= get_field('review_doc'); ?>"></a>
            </div>
        <? endif; ?>
    </div>
    <div class="card-reviews__info">
        <div class="card__title"><?= the_title(); ?></div>
        <p><?= get_field('review_text'); ?></p>
    </div>
</div>
<!--</a>-->