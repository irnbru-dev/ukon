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
function matrix_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
    }
}
add_filter( 'wp_default_scripts', 'matrix_remove_jquery_migrate' );

/**
 * Enqueue scripts and styles.
 */
function ukon_scripts() {
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), null );
    wp_enqueue_style( 'owl-css', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), null );
    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/css/style.min.css', array(), '0.0.1' );

    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true );
    wp_enqueue_script( 'owl-js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true );
    wp_enqueue_script( 'app-script', get_template_directory_uri() . '/js/app.min.js', array(), '0.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'ukon_scripts' );