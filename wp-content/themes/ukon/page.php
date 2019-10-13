<?php /* Template Name: Внутренняя страница */
get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>


    <div class="page">
        <div class="container">
            <div class="page-wrap">

                <aside class="left-menu">
                    <div class="left-menu__title">Услуги</div>
                    <ul class="left-menu__list">
                        <li class="left-menu__list-item dropdown">
                            <a href="#sublist" class="left-menu__list-link" data-toggle="collapse" >Кадастровые работы</a>

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
                            <h1><?= the_title(); ?></h1>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <a href="#" class="btn">Отправить запрос</a>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam at beatae cupiditate
                        maiores, mollitia nemo nobis praesentium suscipit unde!</p>

                    <ul>
                        <li><b>образование</b> или создание недвижимости</li>
                        <li><b>акт обследования</b></li>
                        <li><b>изменение</b> уникальных характеристик объекта недвижимости</li>
                    </ul>

                    <h2>Технические планы на следующие объекты недвижимости</h2>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card__link">
                                <div class="card-simple">
                                    <div class="card-simple__icon"></div>
                                    <p>Технический план нежилого помещения</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card__link">
                                <div class="card card-simple">
                                    <div class="card-simple__icon"></div>
                                    <p>Технический план квартиры</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card__link">
                                <div class="card-simple">
                                    <div class="card-simple__icon"></div>
                                    <p>Технический план литейно-протяженного объекта</p>
                                </div>
                            </div>
                        </div>
                    </div>

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

<?php endwhile; ?>

<?php get_footer(); ?>
