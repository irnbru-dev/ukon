<?php get_header(); ?>

<div class="page">
    <div class="container">
        <div class="page-wrap">

            <aside class="left-menu">
                <a href="<?php get_post_permalink(284); ?>"
                   class="left-menu__title">Компания</a>
                <?php if( is_category('team') || is_object_in_taxonomy( $post, 'team' ) || is_category('reviews') || is_object_in_taxonomy( $post, 'reviews' ) ) { ?>
                    <ul class="left-menu__list">
                        <?php wp_nav_menu('company') ?>
                    </ul>
                <?php } ?>

            </aside>

            <div class="content">

                <div class="banner" style="background-image: url(/wp-content/themes/ukon/img/otzovi_banner.jpg);">
                    <div class="banner__text">
                        <h1 class="banner__title"><?= single_cat_title() ?></h1>
                    </div>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('loop-reviews'); ?>
                <?php endwhile; else: echo '<h2>Нет записей.</h2>'; endif; ?>

                <div class="form">
                    <h2 class="-center">Оставить заявку</h2>
                    <?php echo do_shortcode('[contact-form-7 id="270" title="Оставить заявку"]') ?>
                </div>

            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>

