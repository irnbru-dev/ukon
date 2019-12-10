<?php /* Template Name: Главная страница */
get_header(); ?>

    <div class="main-screen">
        <div class="container">

            <div class="main-screen__info">
                <p><?= get_field('page_main_main_screen')['text'] ?></p>
                <p class="-xl"><?= get_field('page_main_main_screen')['sale'] ?></p>
                <?= get_field('page_main_main_screen')['list'] ?>
                <a href="<?= get_field('page_main_main_screen')['btn_link'] ?>" class="btn"><?= get_field('page_main_main_screen')['btn_text'] ?></a>
            </div>

        </div>
    </div>

    <div class="section section--light-bg">
        <div class="container">
            <h2 class="-center"><?= get_field('page_main_services_title') ?></h2>
            <div class="row">
                <?php if (get_field('page_main_services')): ?>
                    <?php while (has_sub_field('page_main_services')): ?>
                        <div class="col-md-6 col-lg-4">
                            <a href="<?= the_sub_field('link'); ?>" class="card__link">
                                <div class="card card--brown card--xl">
                                    <div class="card__icon"><img src="<?= the_sub_field('icon'); ?>" alt=""></div>
                                    <div class="card__title"><?= the_sub_field('title'); ?></div>
                                    <?= the_sub_field('list'); ?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <h2 class="-center mt-5"><?= get_field('page_main_solutions_title') ?></h2>
            <div class="row">

                <?php if (get_field('page_main_solutions')): ?>
                    <?php while (has_sub_field('page_main_solutions')): ?>
                        <div class="col-md-4">
                            <a href="<?= the_sub_field('link'); ?>" class="card__link">
                                <div class="card card--sm card--blue">
                                    <div class="card__icon"><img src="<?= the_sub_field('icon'); ?>" alt=""></div>
                                    <p><?= the_sub_field('text'); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>