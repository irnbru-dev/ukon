<?php /* Template Name: Кадастровые работы */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>


    <div class="page">
        <div class="container">
            <div class="page-wrap">

                <aside class="left-menu">
                    <div class="left-menu__title">Услуги</div>
                    <ul class="left-menu__list">
                        <li class="left-menu__list-item dropdown">
                            <a href="#sublist" class="left-menu__list-link" data-toggle="collapse">Кадастровые
                                работы</a>

                            <ul class="left-menu__sublist collapse" id="sublist">
                                <li><a href="#">Технический план</a></li>
                                <li><a href="#">Межевой план</a></li>
                                <li><a href="#">Акт обследования</a></li>
                            </ul>
                        </li>
                        <li class="left-menu__list-item dropdown"><a href="#" class="left-menu__list-link">Техническая
                                инвентаризация</a></li>
                        <li class="left-menu__list-item dropdown"><a href="#" class="left-menu__list-link">Документы
                                ввода
                                объектов недвижимости в эксплуатацию</a></li>
                        <li class="left-menu__list-item dropdown"><a href="#" class="left-menu__list-link">проект
                                перепланировки</a></li>
                    </ul>
                </aside>

                <div class="content">

                    <div class="banner">
                        <div class="banner__text">
                            <h1 class="banner__title"><?= the_title(); ?></h1>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <a href="#" class="btn">Отправить запрос</a>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet beatae possimus suscipit ut. Nisi,
                        quo?</p>

                    <p><b>Объекты кадастровых работ</b></p>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="card__link">
                                <div class="card card-full-bg">
                                    <p class="card-full-bg__text">Здания</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="card__link">
                                <div class="card card-full-bg">
                                    <p class="card-full-bg__text">Сооружения</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="card__link">
                                <div class="card card-full-bg">
                                    <p class="card-full-bg__text">Земельный участки</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <h2>Основные услуги</h2>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="#" class="card__link">
                                <div class="card card-vertical-img">
                                    <div class="card__img">
                                        <div class="icon-box">
                                            <img src="/wp-content/themes/ukon/img/svg/services-1.svg" alt="" class="icon">
                                        </div>
                                    </div>
                                    <div class="card-vertical-img__text">
                                        <div class="card__title">Технический план</div>
                                        <p>для постановки объекта недвижимости на кадастровый учет
                                            и
                                            осуществление сделок с ним
                                        </p>
                                        <a href="#" class="card-vertical-img__link">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
