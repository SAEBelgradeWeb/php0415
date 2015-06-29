<?php 

// Theme settings

add_theme_support( 'post-thumbnails' );

function init_scripts(){

	wp_enqueue_style( 'droid_sans','http://fonts.googleapis.com/css?family=Droid+Sans:400,700', array(), '1.0' );
	wp_enqueue_style( 'main_style',get_template_directory_uri().'/styles/style.css', array(), '1.0' );
	wp_enqueue_style( 'inner',get_template_directory_uri().'/styles/inner.css', array(), '1.0' );
	wp_enqueue_style( 'layout',get_template_directory_uri().'/styles/layout.css', array(), '1.0' );
	wp_enqueue_style( 'flexslider',get_template_directory_uri().'/styles/flexslider.css', array(), '1.0' );
	wp_enqueue_style( 'color',get_template_directory_uri().'/styles/color.css', array(), '1.0' );
	wp_enqueue_style( 'prettyPhoto',get_template_directory_uri().'/styles/prettyPhoto.css', array(), '1.0' );


	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-1.7.1.min.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'supersubs', get_template_directory_uri() . '/js/supersubs.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'jquery_flexslide', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.js', array( 'jquery' ), '20150330', true );

}

add_action('wp_enqueue_scripts','init_scripts');

 ?>