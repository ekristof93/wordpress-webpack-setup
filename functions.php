<?php 

    function theme_resources() {
        wp_enqueue_style('styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_resources');

    function theme_features()
    {
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'theme_features');
?>