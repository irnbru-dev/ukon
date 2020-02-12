<?php /* Template Name: Документы для ранее учтенных объектов */
get_header(); ?>

    <div class="main-screen-inner -docs" style="background-image: url(<?= get_field('page_docs_main_screen_bg') ?>)">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <h1>Документы для ранее учтенных объектов</h1>
                    <p>Найдите свой жилой комплекс или другой объект недвижимости, и мы подготовим для вас необходимую
                        документацию</p>

                    <form action="" class="form form-search">
                        <input type="text" id="search-docs-input" placeholder="Введите название жилого комплекса">
                        <input type="submit" value="Поиск" class="btn">
                    </form>
                </div>
            </div>

        </div>
    </div>


    <section class="section section--light-bg">
        <div class="container">
<!--            --><?php //if (current_user_can('administrator')) : ?>
                <div class="d-flex flex-column flex-md-row mb-5">
                    <div class="sorting d-flex flex-wrap mr-3" data-sorting-param="object-type">
                        <span class="sort__btn sort__btn--bubble active" data-type="all">Все</span>
                        <span class="sort__btn sort__btn--bubble" data-type="complex">Жилой комплекс</span>
                        <span class="sort__btn sort__btn--bubble" data-type="object">Объект</span>
                    </div>

                    <div class="sorting d-flex">
                        <span data-sorting-param="alphabet">По алфавиту
                        <span class="sort__btn up ml-2">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px"
                                 viewBox="0 0 21.825 21.825" style="enable-background:new 0 0 21.825 21.825;"
                                 xml:space="preserve">
                            <path style="fill:#1E201D;" d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651
                                c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587
                                s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z"/>
                            </svg>
                        </span>
                        <span class="sort__btn down ml-1">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px"
                                 viewBox="0 0 21.825 21.825" style="enable-background:new 0 0 21.825 21.825;"
                                 xml:space="preserve">
                            <path style="fill:#1E201D;" d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651
                                c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587
                                s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z"/>
                            </svg>
                        </span>
                    </span>
                        <!--                    <span class="mr-3" data-sorting-param="date">По дате</span>-->
                    </div>
                </div>


<!--            --><?php //endif; ?>

<!--            <div class="sorting d-flex mb-4">-->
<!--                <span class="mr-5"><b>Сортировка</b></span>-->
<!--                <span class="mr-3" data-sorting-param="alphabet">По алфавиту-->
<!--                        <span class="sort__btn up ml-2">-->
<!--                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"-->
<!--                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"-->
<!--                                 y="0px"-->
<!--                                 viewBox="0 0 21.825 21.825" style="enable-background:new 0 0 21.825 21.825;"-->
<!--                                 xml:space="preserve">-->
<!--                            <path style="fill:#1E201D;" d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651-->
<!--                                c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587-->
<!--                                s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z"/>-->
<!--                            </svg>-->
<!--                        </span>-->
<!--                        <span class="sort__btn down ml-1">-->
<!--                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"-->
<!--                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"-->
<!--                                 y="0px"-->
<!--                                 viewBox="0 0 21.825 21.825" style="enable-background:new 0 0 21.825 21.825;"-->
<!--                                 xml:space="preserve">-->
<!--                            <path style="fill:#1E201D;" d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651-->
<!--                                c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587-->
<!--                                s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z"/>-->
<!--                            </svg>-->
<!--                        </span>-->
<!--                    </span>-->
<!--                <!--                    <span class="mr-3" data-sorting-param="date">По дате</span>-->
<!--            </div>-->

            <div class="row" id="docs">

                <?php if (get_field('page_docs_object')): ?>
                    <?php while (has_sub_field('page_docs_object')): ?>
                        <div class="col-md-4">
                            <div class="card card-vertical-wide-img card--brown card-docs active" data-type="<?= the_sub_field('type'); ?>">
                                <div class="card__img">
                                    <img src="<?= the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="card-vertical-wide-img__text">
                                    <div class="card__title"><?= the_sub_field('title'); ?></div>
                                    <?= the_sub_field('text'); ?>
                                    <?php if (get_sub_field('type') == 'complex') : ?>
                                        <button class="btn btn--bordered" data-toggle="modal" data-target="#docsModal"
                                                data-title="<?= the_sub_field('title'); ?>">
                                            Подготовить документы
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php pagination(); ?>
        </div>
    </section>


    <div class="section advantages--light">
        <div class="container">
            <h2 class="-center"><?= get_field('page_docs_advantages_title'); ?></h2>

            <div class="grid grid--light">
                <?php if (get_field('page_docs_advantages')): ?>
                    <?php while (has_sub_field('page_docs_advantages')): ?>
                        <div class="grid__item">
                            <div class="grid__icon"><img src="<?= the_sub_field('icon'); ?>" alt=""></div>
                            <p><?= the_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>