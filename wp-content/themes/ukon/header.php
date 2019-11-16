<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ukon</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <?php wp_head(); ?>
</head>
<body>

<header class="header">

    <div class="container">

        <div class="header__top">

            <div class="address">
                <a href="#">
                    <img src="/wp-content/themes/ukon/img/point.png" alt="" class="icon">
                    <?= get_field('contacts_address', 107)?>
                </a>
            </div>

            <div class="tel">
                <a href="tel:<?= get_field('contacts_tel', 107)?>">
                    <img src="/wp-content/themes/ukon/img/tel.png" alt="" class="icon">
                    <b><?= get_field('contacts_tel', 107)?></b>
                </a>
                <button type="button" class="link ml-2" data-toggle="modal" data-target="#questionModal"><?= get_field('contacts_callback', 107)['text']?></button>
            </div>

            <div class="mail">
                <a href="mailto:<?= get_field('contacts_email', 107)?>">
                    <img src="/wp-content/themes/ukon/img/mail.png" alt="" class="icon">
                    <?= get_field('contacts_email', 107)?>
                </a>
            </div>
        </div>
    </div>

    <div class="header__main <?php if (is_front_page() || (is_category('articles'))): ?> header__main-page <?php endif; ?>">
        <div class="container">
            <div class="header__main-wrap">
                <div class="logo">
                    <a href="/">
                        <img src="<?= get_field('header', 125)['logo']; ?>" alt="">
                    </a>
                    <p><?= get_field('header', 125)['text']; ?></p>
                </div>

                <nav class="main-nav">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="menu-main-container">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php wp_nav_menu(array('theme_location' => 'Main Menu', 'menu' => 'main')); ?>
                </nav>
            </div>
        </div>
    </div>
</header>