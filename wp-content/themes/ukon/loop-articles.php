<a href="<?= get_permalink(); ?>" class="card__link">
    <div class="card card-img card--brown card-img--white-bg">
        <div class="card-img__img">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="card-img__text">
            <div class="card__title"><?= the_title(); ?></div>
            <?= the_content(); ?>
            <a href="<?= get_permalink(); ?>" class="link--yellow">Читать</a>
        </div>
    </div>
</a>