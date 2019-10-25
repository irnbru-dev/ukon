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
    wp_enqueue_style('app-style', get_template_directory_uri() . '/css/style.min.css', array(), '0.0.1');

    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('owl-js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true);
    wp_enqueue_script('app-script', get_template_directory_uri() . '/js/app.min.js', array(), '0.0.1', true);
}

add_action('wp_enqueue_scripts', 'ukon_scripts');


add_action( 'after_setup_theme', 'customEditorStyles' );
function customEditorStyles() {
    add_editor_style( 'admin-styles.css' );
}

/**
 * Add custom menu
 */
function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}

add_action('init', 'wpb_custom_new_menu');

/**
 * Registers custom post types and taxonomies
 */
// Our custom post type function
function create_posttype() {

    register_post_type( 'Контакты',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Контакты' ),
                'singular_name' => __( 'Контакты' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'contacts'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//Shordcodes
function true_add_mce_button() {
    // проверяем права пользователя - может ли он редактировать посты и страницы
    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
        return; // если не может, то и кнопка ему не понадобится, в этом случае выходим из функции
    }
    // проверяем, включен ли визуальный редактор у пользователя в настройках (если нет, то и кнопку подключать незачем)
    if ( 'true' == get_user_option( 'rich_editing' ) ) {
        add_filter( 'mce_external_plugins', 'true_add_tinymce_script' );
        add_filter( 'mce_buttons', 'true_register_mce_button' );
    }
}
add_action('admin_head', 'true_add_mce_button');

// В этом функции указываем ссылку на JavaScript-файл кнопки
function true_add_tinymce_script( $plugin_array ) {
    $plugin_array['card_simple_button'] = get_stylesheet_directory_uri() .'/shortcode/true_button.js'; // card_button - идентификатор кнопки
    return $plugin_array;
}

// Регистрируем кнопку в редакторе
function true_register_mce_button( $buttons ) {
    array_push( $buttons, 'card_simple_button' ); // card_button - идентификатор кнопки
    return $buttons;
}

//Shortcode Card
function render_card_simple($atts, $content)
{
    extract(shortcode_atts(['title' => '', 'link' => ''], $atts));

    $content = sprintf('<div class="col-md-4"><a href="%s" class="card__link"><div class="card card-simple"><div class="card-simple__icon"><img src="%s"></div><p>%s</p></div></a></div>', $link, $icon, $content);

    return force_balance_tags($content);
}

//Shortcode Row
function render_row($atts, $content)
{
    extract(shortcode_atts(['class' => ''], $atts));

    return force_balance_tags(sprintf('<div class="row %s">%s</div>', $class, do_shortcode($content)));
}

add_shortcode('card', 'render_card_simple');
add_shortcode('row', 'render_row');