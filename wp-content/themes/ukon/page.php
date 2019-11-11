<?php /* Template Name: Базовый шаблон */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

    <div class="page">
        <div class="container">
            <div class="content">
                <h1><?= the_title(); ?></h1>
                <?= the_content(); ?>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>


