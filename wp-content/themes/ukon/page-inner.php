<?php /* Template Name: Внутренняя страница */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) :
    the_post(); ?>


    <div class="page">
        <div class="container">
            <div class="page-wrap">

                <aside class="left-menu">
                    <?php

                    if ($post->post_parent) {
                        $ancestors = get_post_ancestors($post->ID);
                        $root = count($ancestors) - 1;
                        $parent = $ancestors[$root];
                    } else {
                        $parent = $post->ID;
                    }

                    ?>
                    <a href="<?php get_post_permalink($parent); ?>"
                       class="left-menu__title"><?= get_the_title($parent); ?></a>

                    <ul class="left-menu__list">
                        <?php wp_list_pages(array(
                            'child_of' => $parent,
                            'depth' => 2,
                            'sort_order' => 'asc',
                            'title_li' => ''
                        )); ?>
                    </ul>

                </aside>

                <div class="content">

                    <div class="banner"
                         style="background-image: url(<?= get_field('page_inner_banner')['background']; ?>);">
                        <div class="banner__text">
                            <h1 class="banner__title"><?= get_field('page_inner_banner')['title'] ? get_field('page_inner_banner')['title'] : the_title() ?></h1>

                            <?php if (get_field('page_inner_banner')['subtitle']) : ?>
                                <p><?= get_field('page_inner_banner')['subtitle'] ?></p>
                            <?php endif; ?>
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Отправить
                                запрос
                            </button>
                        </div>
                    </div>

                    <?= the_content(); ?>

                    <div class="form">
                        <h2 class="-center">Оставить заявку</h2>
                        <?php echo do_shortcode('[contact-form-7 id="270" title="Оставить заявку"]') ?>
                    </div>

                </div>

            </div>
        </div>
    </div>


<?php endwhile; ?>

<?php get_footer(); ?>
