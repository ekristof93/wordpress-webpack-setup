<?php

    function themename_custom_header_setup() {
        add_theme_support( 'custom-header', array(
            'default-image'      => get_template_directory_uri() . '/assets/img/default-image.jpg',
            'width'              => 1500,
            'height'             => 375,
        ) );

        register_default_headers( array(
            'default-image' => array(
                'url'           => get_template_directory_uri() . '/assets/img/default-image.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/img/default-image-thumbnail.jpg',
                'description'   => 'Default Image',
            ),
            /* 'shore' => array(
                'url'           => get_template_directory_uri() . '/assets/img/shore.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/img/shore-thumbnail.jpg',
                'description'   => 'Shore',
            ),
            'trolley' => array(
                'url'           => get_template_directory_uri() . '/assets/img/trolley.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/img/trolley-thumbnail.jpg',
                'description'   => 'Trolley',
            ) */
        ) );
    }

    add_action( 'after_setup_theme', 'themename_custom_header_setup' );

?>