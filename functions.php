<?php 

    function theme_resources() {
        wp_enqueue_script( 'App', get_theme_file_uri( 'assets/js/main.js' ), NULL, '1.0', true );
        wp_enqueue_style('styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_resources');

    function theme_features()
    {
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'theme_features');
?>