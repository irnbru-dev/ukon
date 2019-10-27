<?php /* Template Name: Сотрудники */
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
                        <div class="card card-team">
                            <div class="card-team__img">
                                <img src="" alt="">
                            </div>
                            <div class="card-team__info">
                                <div class="card__title">Ольга Николаевна Румянцева
                                    <span class="card__subtitle">генеральный директор</span>
                                </div>
                                <p>25 лет в технической инвентаризации</p>
                                <a href="#" class="card-team__link">Номер кадастрового инженера</a>
                            </div>
                        </div>
                    </div>

                    <div class="card__link">
                        <div class="card card-team">
                            <div class="card-team__img">
                                <img src="" alt="">
                            </div>
                            <div class="card-team__info">
                                <div class="card__title">Ольга Николаевна Румянцева
                                    <span class="card__subtitle">генеральный директор</span>
                                </div>
                                <p>25 лет в технической инвентаризации</p>
                                <a href="#" class="card-team__link">Номер кадастрового инженера</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
