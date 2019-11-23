<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

    <div class="page">
        <div class="container">
            <div class="page-wrap">

                <div class="content">
                    <h1><?= the_title(); ?></h1>
                    <?= the_content(); ?>
                </div>
                <aside class="right-aside">

<!--                    <div class="aside-banner">-->
<!--                        <div class="form-banner">-->
<!--                            <img src="" alt="" class="form-banner__icon">-->
<!--                            <p class="form-banner__title">Подписаться</p>-->
<!--                            --><?php //echo do_shortcode('[contact-form-7 id="299" title="Подписаться"]')?>
<!--                        </div>-->
<!--                    </div>-->

                    <div class="aside-banner">
                        <div class="form-banner">
                            <img src="" alt="" class="form-banner__icon">
                            <p class="form-banner__title">Задать вопрос</p>
                            <?php echo do_shortcode('[contact-form-7 id="300" title="Задать вопрос"]')?>
                        </div>
                    </div>

                </aside>

            </div>

        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
