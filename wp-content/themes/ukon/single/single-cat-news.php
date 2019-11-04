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

                <div class="aside-banner">
                    <form action="">
                        <input placeholder="ФИО">
                        <input type="tel" placeholder="+7(000)000-00-00">

                        <input type="submit" class="btn" value="Отправить">
                    </form>
                </div>


            </aside>

        </div>

    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
