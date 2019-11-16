<?php get_header(); ?>

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


    <section class="section">
        <div class="container">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('loop-docs'); ?>
            <?php endwhile; else: echo '<h2>Нет записей.</h2>'; endif; ?>

            <?php pagination(); ?>
        </div>
    </section>


    <div class="section advantages--light">
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

<?php get_footer(); ?>