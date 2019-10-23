<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ukon</title>

    <?php wp_head(); ?>
</head>
<body>

<header class="header">

    <div class="container">

        <div class="header__top">

            <div class="address">
                <a href="#">
                    <img src="/wp-content/themes/ukon/img/point.png" alt="" class="icon">
                    Шпалерная улица, дом 40а офис 301
                </a>
            </div>

            <div class="mail">
                <a href="#">
                    <img src="/wp-content/themes/ukon/img/mail.png" alt="" class="icon">
                    kadastr@ukon-plus.ru
                </a>
            </div>

            <div class="tel">
                <a href="#">
                    <img src="/wp-content/themes/ukon/img/tel.png" alt="" class="icon">
                    +7 812 449-47-15
                </a>
                <a href="#" class="link">Обратный звонок</a>
            </div>

            <div class="search">
                поиск
                <img src="/wp-content/themes/ukon/img/search.png" alt="" class="icon">
            </div>
        </div>
    </div>

    <div class="header__main <?php if (is_front_page()): ?> header__main-page <?php endif; ?>">
        <div class="container">
            <div class="header__main-wrap">
                <div class="logo">
                    <a href="#">
                        <img src="/wp-content/themes/ukon/img/svg/logo-white.svg" alt="">
                    </a>
                    <p>Кадастровая деятельность любой сложности</p>
                </div>


                <nav class="main-nav">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="menu-main-container">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php wp_nav_menu(); ?>
                </nav>
                <!--                <nav class="navbar navbar-expand-lg main-nav">-->
                <!--                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainNav">-->
                <!--                        <span class="navbar-toggler-icon"></span>-->
                <!--                        <span class="navbar-toggler-icon"></span>-->
                <!--                        <span class="navbar-toggler-icon"></span>-->
                <!--                    </button>-->
                <!--                    <div class="collapse navbar-collapse" id="mainNav">-->
                <!--                        <ul class="navbar-nav">-->
                <!--                            <li class="nav-item dropdown">-->
                <!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"-->
                <!--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                                    Услуги-->
                <!--                                </a>-->
                <!--                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            <li class="nav-item dropdown">-->
                <!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"-->
                <!--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                                    Решения-->
                <!--                                </a>-->
                <!--                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            <li class="nav-item dropdown">-->
                <!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"-->
                <!--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                                    Статьи-->
                <!--                                </a>-->
                <!--                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            <li class="nav-item dropdown">-->
                <!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"-->
                <!--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                                    Новости и акции-->
                <!--                                </a>-->
                <!--                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            <li class="nav-item dropdown">-->
                <!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"-->
                <!--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                                    Клиенты-->
                <!--                                </a>-->
                <!--                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                            <li class="nav-item dropdown">-->
                <!--                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"-->
                <!--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                                    Компания-->
                <!--                                </a>-->
                <!--                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
                <!--                                    <a class="dropdown-item" href="#">Action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Another action</a>-->
                <!--                                    <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                                </div>-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                    </div>-->
                <!--                </nav>-->

            </div>
        </div>
    </div>
</header>