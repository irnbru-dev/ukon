<a href="<?= get_permalink(); ?>" class="card__link">
    <div class="card card-vertical-img card--brown">
        <div class="card__img">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="card-vertical-img__text">
            <div class="card__title"><?= the_title(); ?></div>
            <?= the_content(); ?>
            <button class="btn btn--bordered">
                Подробнее
            </button>
        </div>
    </div>
</a>