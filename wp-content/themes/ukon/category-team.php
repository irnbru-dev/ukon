<?php get_header(); ?>

<div class="page">
    <div class="container">
        <div class="page-wrap">

            <aside class="left-menu">


            </aside>

            <div class="content">

                <div class="banner">
                    <div class="banner__text">
                        <h1 class="banner__title"><?= single_cat_title() ?></h1>
                    </div>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('loop-team'); ?>
                <?php endwhile; else: echo '<h2>Нет записей.</h2>'; endif; ?>

                <div class="form">
                    <h2 class="-center">Оставить заявку</h2>

                    <form action="">
                        <div class="row">
                            <div class="col-md-5">
                                <input placeholder="ФИО">
                                <input placeholder="+7 (000) 000 00 00">
                                <input placeholder="E-mail">
                            </div>
                            <div class="col-md-7">
                                <textarea name="" id="" cols="30" placeholder="Опишите вашу задачу"></textarea>
                            </div>
                        </div>

                        <button class="btn">Отправить</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>

