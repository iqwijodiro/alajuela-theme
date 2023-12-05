<?php

    function alajuela_setup() {
        // Imagenes Destacadas
        add_theme_support('post-thumbnails');

        // Titulos para SEO
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'alajuela_setup');


    function alajuela_menus() {
        register_nav_menus( array(
            'main-menu' => __('Menu Principal', 'alajuela-site')
        ) );
    }
    add_action('init', 'alajuela_menus');

    function site_scripts_styles() { // Enlista las hojas de estilos
    // Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');

    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.10.1/css/all.css', array('normalize'), '5.10.1' );
    // wp_enqueue_style('boostrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css', array('fontawesome'), '5.0.1' );
    wp_enqueue_style('style', get_stylesheet_uri(), array('fontawesome'), '1.0.0' );

}

add_action('wp_enqueue_scripts', 'site_scripts_styles');

