<?php get_header(); ?>

    <div class="main-screen-inner -articles">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <h1>Бесплатная библиотека полезных материалов</h1>
                    <p>Подборка полезных статей с ценной информацией</p>
                </div>
            </div>

        </div>
    </div>

    <div class="page">
        <div class="container">
            <div class="page-wrap">

                <div class="content">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('loop-articles'); ?>
                    <?php endwhile; else: echo '<h2>Нет записей.</h2>'; endif; ?>

                    <?php pagination(); ?>
                </div>
                <aside class="right-aside">

<!--                    <div class="aside-banner">-->
<!--                        <div class="form-banner">-->
<!--                            <img src="" alt="" class="form-banner__icon">-->
<!--                            <p class="form-banner__title">Подписаться</p>-->
<!--                            --><?php //echo do_shortcode('[contact-form-7 id="299" title="Подписаться"]') ?>
<!--                        </div>-->
<!--                    </div>-->

                    <div class="aside-banner">
                        <div class="form-banner">
                            <img src="" alt="" class="form-banner__icon">
                            <p class="form-banner__title">Задать вопрос</p>
                            <?php echo do_shortcode('[contact-form-7 id="300" title="Задать вопрос"]') ?>
                        </div>
                    </div>

                </aside>

            </div>

        </div>
    </div>

<?php get_footer(); ?>