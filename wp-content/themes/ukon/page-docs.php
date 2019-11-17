<?php /* Template Name: Документы для ранее учтенных объектов */
get_header(); ?>

    <div class="main-screen-inner -docs">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <h1>Документы для ранее учтенных объектов</h1>
                    <p>Найдите свой жилой комплекс или другой объект недвижимости, и мы подготовим для вас необходимую
                        документацию</p>
                </div>
            </div>

        </div>
    </div>


    <section class="section section--light-bg">
        <div class="container">
            <div class="row">

                <?php if (get_field('page_docs_object')): ?>
                    <?php while (has_sub_field('page_docs_object')): ?>
                        <div class="col-md-4">
                            <div class="card card-vertical-wide-img card--brown">
                                <div class="card__img">
                                    <img src="<?= the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="card-vertical-wide-img__text">
                                    <div class="card__title"><?= the_sub_field('title'); ?></div>
                                    <?= the_sub_field('text'); ?>
                                    <button class="btn btn--bordered" data-toggle="modal" data-target="#docsModal">
                                        Подготовить документы
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php pagination(); ?>
        </div>
    </section>


    <div class="section advantages--light">
        <div class="container">
            <h2 class="-center"><?= get_field('page_docs_advantages_title'); ?></h2>

            <div class="grid grid--light">
                <?php if (get_field('page_docs_advantages')): ?>
                    <?php while (has_sub_field('page_docs_advantages')): ?>
                        <div class="grid__item">
                            <div class="grid__icon"><img src="<?= the_sub_field('icon'); ?>" alt=""></div>
                            <p><?= the_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>