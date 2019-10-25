<?php /* Template Name: Главная страница */
get_header(); ?>

    <div class="main-screen">
        <div class="container">

            <div class="main-screen__info">
                <p><?= get_field('page_main_main_screen')['text'] ?></p>
                <p class="-xl"><?= get_field('page_main_main_screen')['sale'] ?></p>
                <?= get_field('page_main_main_screen')['list'] ?>
                <a href="#" class="btn">Узнать больше</a>
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
                            <a href="#" class="card__link">
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
                            <a href="#" class="card__link">
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

    <div class="section promo">
        <div class="container">
            <div class="promo__title">
                <span class="topic"><?= get_field('page_main_promo_phrase')['title'] ?></span>
                <span><?= get_field('page_main_promo_phrase')['text'] ?></span>
            </div>

            <div class="row">
                <?php if (get_field('page_main_promo')): ?>
                    <?php while (has_sub_field('page_main_promo')): ?>
                        <div class="col-md-3">
                            <div class="promo__item">
                                <span class="promo__item-number"><?= the_sub_field('number'); ?></span>
                                <p><?= the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="section section--blue-bg">
        <div class="container">
            <h2 class="-center"><?= get_field('page_main_advantages_title'); ?></h2>

            <div class="grid">
                <?php if (get_field('page_main_advantages')): ?>
                    <?php while (has_sub_field('page_main_advantages')): ?>
                        <div class="grid__item">
                            <div class="grid__icon"><img src="<?= the_sub_field('icon'); ?>" alt=""></div>
                            <p><?= the_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<!--    <div class="section">-->
<!--        <div class="container">-->
<!--            <h2 class="-center">Преимущества работы с нами</h2>-->
<!---->
<!--            <div class="grid grid--light">-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Полный комплекс кадастровых работ</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Полное сопровождение клиентов во время и после выполнения кадастровых работ</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Сбор всей необходимой информациию Мы экономим ваше время</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Работа со сложными проектами и нетиповыми решениями</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Бесплатная консультация</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Выполнение срочных проектов</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Полный комплекс кадастровых работ</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Полное сопровождение клиентов во время и после выполнения кадастровых работ</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Сбор всей необходимой информациию Мы экономим ваше время</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Работа со сложными проектами и нетиповыми решениями</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Бесплатная консультация</p>-->
<!--                </div>-->
<!--                <div class="grid__item">-->
<!--                    <div class="grid__icon"></div>-->
<!--                    <p>Выполнение срочных проектов</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <section class="section">
        <div class="container">
            <h2 class="-center"><?= get_field('page_main_clients_title'); ?></h2>
            <div class="clients-owl owl-carousel">

                <?php if (get_field('page_main_promo')): ?>
                    <?php while (has_sub_field('page_main_promo')): ?>
                        <div class="clients__item">
                            <img src="<?= the_sub_field('image'); ?>" alt="">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section section--light-bg">
        <div class="container">
            <h2 class="-center"><?= get_field('page_main_reviews_title'); ?></h2>
            <div class="reviews-owl owl-carousel">

                <?php if (get_field('page_main_promo')): ?>
                    <?php while (has_sub_field('page_main_promo')): ?>
                        <div class="item">
                            <img src="<?= the_sub_field('image'); ?>" alt="">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="-center">Наши проекты</h2>

            <div class="owl-projects owl-carousel">

                <a href="#" class="card__link">
                    <div class="card card-img card--brown">
                        <div class="card-img__img">
                            <img src="" alt="">
                        </div>
                        <div class="card-img__text">
                            <div class="card__title">Элитный жилой комплекс "Парадный квартал"</div>
                            <p>Адрес: Парадная ул., 3, корп. 2, Санкт-Петербург, 191014</p>
                            <p class="card__date">Год 2019</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="card__link">
                    <div class="card card-img card--brown">
                        <div class="card-img__img">
                            <img src="/wp-content/themes/ukon/img/house-1.jpg" alt="">
                        </div>
                        <div class="card-img__text">
                            <div class="card__title">Элитный жилой комплекс "Парадный квартал"</div>
                            <p>Адрес: Парадная ул., 3, корп. 2, Санкт-Петербург, 191014</p>
                            <p class="card__date">Год 2019</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="card__link">
                    <div class="card card-img card--brown">
                        <div class="card-img__img">
                            <img src="/wp-content/themes/ukon/img/house-2.jpg" alt="">
                        </div>
                        <div class="card-img__text">
                            <div class="card__title">Элитный жилой комплекс "Парадный квартал"</div>
                            <p>Адрес: Парадная ул., 3, корп. 2, Санкт-Петербург, 191014</p>
                            <p class="card__date">Год 2019</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>