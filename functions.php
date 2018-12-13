<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

    wp_enqueue_style( 'gs-parent-style', get_template_directory_uri() . '/style.css' );



    wp_enqueue_style( 'gs-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );

    

    wp_enqueue_style( 'gs-child-style',

        get_stylesheet_directory_uri() . '/style.css',

        array('gs-parent-style')

    );

    

    wp_enqueue_style( 'gs-main-style',

        get_stylesheet_directory_uri() . '/lib/assets/dist/css/main.css'

    );



    if( is_page_template('templates/t-services.php') || is_page_template('templates/t-about.php') ){

        wp_enqueue_style( 'gs-ightgallery-style',
            'https://cdn.jsdelivr.net/npm/lightgallery@1.6.6/dist/css/lightgallery.min.css'
        );

        wp_enqueue_script( 'gs-lightgallery',
            'https://cdn.jsdelivr.net/npm/lightgallery@1.6.6/dist/js/lightgallery.min.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_script( 'gs-mousewheel',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_style( 'gs-plugin-swiper',
            'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css',
            array(),
            null
        );

        wp_enqueue_script( 'gs-swiper-js',
            'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_script( 'gs-services',
            get_stylesheet_directory_uri() . '/lib/assets/src/js/services.js',
            array('jquery'),
            false,
            true
        );

        wp_enqueue_script( 'gs-tabs',
            get_stylesheet_directory_uri() . '/lib/assets/src/js/tabs.js',
            array('jquery'),
            false,
            true
        );

    }



    wp_enqueue_script( 'main-js',

        //get_stylesheet_directory_uri() . '/lib/assets/dist/js/bundle.js',
        get_stylesheet_directory_uri() . '/lib/assets/src/js/main.js',

        array(),

        false,

        true

    );

}



if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page(array(

		'page_title' 	=> 'Theme General Settings',

		'menu_title'	=> 'Theme Settings',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> false

	));

}