<?php 

    function theme_resources() {
        wp_enqueue_script( 'App', get_theme_file_uri( 'assets/js/main.js' ), NULL, '1.0', true );
        wp_enqueue_style('styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'theme_resources');

    function theme_features()
    {
        add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);


        // Menu registrations
        register_nav_menus( array(
            'headerMenuLocation' => 'Fejléc Menü',
            'footerMenuLocationOne' => 'Lábléc Menü 1',
            'footerMenuLocationTwo' => 'Lábléc Menü 2'
        ) );

        // Add document title tag to HTML <head>
        add_theme_support( 'title-tag' );

        // Enabling Support for Featured Image
        add_theme_support( 'post-thumbnails' );

        //add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array ); //Register a new image size
        //set_post_thumbnail_size( $width:integer, $height:integer, $crop:boolean|array ); //Registers an image size for the post thumbnail
    
        // Custom logo support
        add_theme_support('custom-logo', array(
				'height'               => 300,
				'width'                => 300,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);
    }
    
    add_action('after_setup_theme', 'theme_features');

    // Add Custom Header Support
    function themename_custom_header_setup() {
        add_theme_support( 'custom-header', array(
            'default-image'      => get_template_directory_uri() . '/assets/img/default-image.jpg',
            'width'              => 1000,
            'height'             => 250,
        ) );

        register_default_headers( array(
            'wheel' => array(
                'url'           => get_template_directory_uri() . '/assets/img/wheel.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/img/wheel-thumbnail.jpg',
                'description'   => 'Wheel',
            ),
            'shore' => array(
                'url'           => get_template_directory_uri() . '/assets/img/shore.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/img/shore-thumbnail.jpg',
                'description'   => 'Shore',
            ),
            'trolley' => array(
                'url'           => get_template_directory_uri() . '/assets/img/trolley.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/img/trolley-thumbnail.jpg',
                'description'   => 'Trolley',
            )
        ) );
    }
    
    add_action( 'after_setup_theme', 'themename_custom_header_setup' );

    function theme_widgets_init() {
        // Register the 'primary' sidebar.
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => 'Fő Oldalsáv',
                'description'   => 'Fő oldalsáv leírása',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h3>',
                'after_title'   => '</h3>',
            )
        );
    }

    add_action('widgets_init', 'theme_widgets_init');
?>