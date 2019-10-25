<?php /* Template Name: Базовый шаблон */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>

    <h1><?= the_title(); ?></h1>
    <?= the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
