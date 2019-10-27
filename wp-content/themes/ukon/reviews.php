<?php /* Template Name: Отзывы клиентов */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>


    <div class="page">
        <div class="container">
            <div class="page-wrap">

                <aside class="left-menu">
                    <div class="left-menu__title">Услуги</div>
                    <ul class="left-menu__list">
                        <li class="left-menu__list-item dropdown">
                            <a href="#sublist" class="left-menu__list-link" data-toggle="collapse">Компания</a>

                            <ul class="left-menu__sublist collapse" id="sublist">
                                <li><a href="#">О компании</a></li>
                                <li><a href="#">Сотрудники</a></li>
                                <li><a href="#">Отывы клиентов</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>

                <div class="content">

                    <div class="banner">
                        <div class="banner__text">
                            <h1 class="banner__title"><?= the_title(); ?></h1>
                        </div>
                    </div>

                    <div class="card__link">
                        <div class="card card-reviews">
                            <div class="card-reviews__imgs">
                                <img src="" alt="" class="card-reviews__logo">
                                <img src="" alt="">
                            </div>
                            <div class="card-reviews__info">
                                <div class="card__title">"ОхтаСтройИнвест"</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, voluptas?Lorem ipsum
                                    dolor sit amet.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
