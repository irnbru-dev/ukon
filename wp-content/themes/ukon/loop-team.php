<!--<a href="--><?//= get_the_permalink(); ?><!--" class="card__link">-->
    <div class="card card-team">
        <div class="card-team__img">
            <img src="" alt="">
        </div>
        <div class="card-team__info">
            <div class="card__title"><?= the_title(); ?>
                <span class="card__subtitle"><?= get_field('team_position'); ?></span>
            </div>
            <p><?= get_field('team_desc'); ?></p>
            <a href="#" class="card-team__link"><?= get_field('team_link'); ?></a>
        </div>
    </div>
<!--</a>-->