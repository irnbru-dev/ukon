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
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                        </svg>
                    </div>

                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
