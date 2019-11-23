<?php

//
//function pagination()
//{
//    global $wp_query;
//    $big = 999999999;
//    echo paginate_links(array(
//        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
//        'format' => '?paged=%#%',
//        'current' => max(1, get_query_var('paged')),
//        'type' => 'list',
//        'prev_text' => 'Назад',
//        'next_text' => 'Вперед',
//        'total' => $wp_query->max_num_pages,
//        'show_all' => false,
//        'end_size' => 15,
//        'mid_size' => 15,
//        'add_args' => false,
//        'add_fragment' => '',
//        'before_page_number' => '',
//        'after_page_number' => ''
//    ));
//}

/**
 * Dequeue jQuery Migrate script in WordPress.
 */
function matrix_remove_jquery_migrate(&$scripts)
{
    if (!is_admin()) {
        $scripts->remove('jquery');
    }
}

add_filter('wp_default_scripts', 'matrix_remove_jquery_migrate');

/**
 * Enqueue scripts and styles.
 */
function ukon_scripts()
{
    wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('owl-css', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), null);
    wp_enqueue_style('fancybox-css', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), null);
    wp_enqueue_style('app-style', get_template_directory_uri() . '/css/style.min.css', array(), '0.0.2');

    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('owl-js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true);
    wp_enqueue_script('fancybox-js', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), '2.3.4', true);
    wp_enqueue_script('app-script', get_template_directory_uri() . '/js/app.min.js', array(), '0.0.1', true);
}

add_action('wp_enqueue_scripts', 'ukon_scripts');


add_action('after_setup_theme', 'customEditorStyles');

add_filter( 'the_content_more_link', '__return_empty_string' );

add_theme_support( 'post-thumbnails' );

/* Функция для выбора шаблона записи по категории */
define(SINGLE_PATH, TEMPLATEPATH . '/single');
add_filter('single_template', 'my_single_template');
function my_single_template($single)
{
    global $wp_query, $post;
    foreach ((array)get_the_category() as $cat) :

        if (file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php')) {
            return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
        } elseif (file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php')) {
            return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
        }

    endforeach;
    $wp_query->in_the_loop = true;
    foreach ((array)get_the_tags() as $tag) :

        if (file_exists(SINGLE_PATH . '/single-tag-' . $tag->slug . '.php')) {
            return SINGLE_PATH . '/single-tag-' . $tag->slug . '.php';
        } elseif (file_exists(SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php')) {
            return SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php';
        }

    endforeach;
    $wp_query->in_the_loop = false;

    if (file_exists(SINGLE_PATH . '/single.php')) {
        return SINGLE_PATH . '/single.php';
    }

    return $single;
}

function pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'type' => 'list',
        'prev_text' => '',
        'next_text' => '',
        'total' => $wp_query->max_num_pages,
        'show_all' => false,
        'end_size' => 15,
        'mid_size' => 15,
        'add_args' => false,
        'add_fragment' => '',
        'before_page_number' => '',
        'after_page_number' => ''
    ));
}

function customEditorStyles()
{
    add_editor_style('admin-styles.css');
}

// Remove auto p from Contact Form 7 shortcode output
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');

function wpcf7_autop_return_false() {
    return false;
}

///**
// * Add custom menu
// */
//function register_my_menus() {
//    register_nav_menus(
//        array(
//            'my-custom-menu' => __( 'My Custom Menu' ),
//            'company-menu' => __( 'Company Menu' )
//        )
//    );
//}
//add_action( 'init', 'register_my_menus' );

add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'main-menu' => 'Main Menu',
        'company-menu' => 'Company Menu'
    ] );
} );

/**
 * Registers custom post types and taxonomies
 */
function create_posttype()
{

    register_post_type('company',
        [
            'labels' => [
                'name' => __('Компания'),
                'singular_name' => __('Компания'),
                'add_new' => __('Добавить данные')
            ],
            'public' => false,
            'has_archive' => false,
            'rewrite' => ['slug' => 'company'],
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 2,
            'can_export' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'taxonomies' => ['type'],
            'hierarchical' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes']
        ]
    );
}

// Hooking up our function to theme setup
add_action('init', 'create_posttype');

//Register sidebar
register_sidebar(array(
    'name' => 'Левое меню',
    'id' => "left-sidebar",
    'description' => 'Левая колонка',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>\n",
    'before_title' => '<span class="widgettitle">',
    'after_title' => "</span>\n",
));

//Shordcodes
function true_add_mce_button()
{
    // проверяем права пользователя - может ли он редактировать посты и страницы
    if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) {
        return; // если не может, то и кнопка ему не понадобится, в этом случае выходим из функции
    }
    // проверяем, включен ли визуальный редактор у пользователя в настройках (если нет, то и кнопку подключать незачем)
    if ('true' == get_user_option('rich_editing')) {
        add_filter('mce_external_plugins', 'true_add_tinymce_script');
        add_filter('mce_buttons', 'true_register_mce_button');
    }
}

add_action('admin_head', 'true_add_mce_button');

// В этом функции указываем ссылку на JavaScript-файл кнопки
function true_add_tinymce_script($plugin_array)
{
    $plugin_array['card_simple_button'] = get_stylesheet_directory_uri() . '/shortcode/card-simple.js'; // card_simple_button - идентификатор кнопки
    $plugin_array['card_full_bg_button'] = get_stylesheet_directory_uri() . '/shortcode/card-full-bg.js';
    $plugin_array['card_vertical_img_button'] = get_stylesheet_directory_uri() . '/shortcode/card-vertical-img.js';
    return $plugin_array;
}

// Регистрируем кнопку в редакторе
function true_register_mce_button($buttons)
{
    array_push($buttons, 'card_simple_button'); // card_simple_button - идентификатор кнопки
    array_push($buttons, 'card_full_bg_button');
    array_push($buttons, 'card_vertical_img_button');
    return $buttons;
}

//Shortcode Card-Simple
function render_card_simple($atts, $content)
{
    extract(shortcode_atts(['title' => '', 'icon' => '', 'link' => ''], $atts));

    $content = sprintf('<div class="col-md-4"><a href="%s" class="card__link"><div class="card card-simple"><div class="card-simple__icon"><img src="%s"></div><p>%s</p></div></a></div>', $link, $icon, $content);

    return force_balance_tags($content);
}

//Shortcode Card-Full-Bg
function render_card_full_bg($atts, $content)
{
    extract(shortcode_atts(['title' => '', 'icon' => '', 'link' => ''], $atts));

    $content = sprintf('<div class="col-md-4"><a href="%s" class="card__link"><div class="card card-full-bg"><img src="%s" alt=""><p class="card-full-bg__text">%s</p></div></a></div>', $link, $icon, $content);

    return force_balance_tags($content);
}

//Shortcode Card-Vertical-Img
function render_card_vertical_img($atts, $content)
{
    extract(shortcode_atts(['title' => '', 'icon' => '', 'background' => '', 'link' => ''], $atts));

    $content = sprintf('<div class="col-md-4"><a href="%s" class="card__link"><div class="card card-vertical-img"><div class="card__img"><img src="%s" alt=""><div class="icon-box"><img class="icon" src="%s" alt=""></div></div><div class="card-vertical-img__text"><div class="card__title" >%s</div><p>%s</p><a href="%s" class="card-vertical-img__link">Подробнее</a></div></div></a></div>', $link, $background, $icon, $title, $content, $link);

    return force_balance_tags($content);
}

//Shortcode Row
function render_row($atts, $content)
{
    extract(shortcode_atts(['class' => ''], $atts));

    return force_balance_tags(sprintf('<div class="row %s">%s</div>', $class, do_shortcode($content)));
}

add_shortcode('card-simple', 'render_card_simple');
add_shortcode('card-full-bg', 'render_card_full_bg');
add_shortcode('card-vertical-img', 'render_card_vertical_img');
add_shortcode('row', 'render_row');
