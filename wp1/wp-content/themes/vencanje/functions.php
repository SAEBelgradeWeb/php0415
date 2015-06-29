<?php
/**
 * vencanje functions and definitions
 *
 * @package vencanje
 */

if ( ! function_exists( 'vencanje_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vencanje_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vencanje, use a find and replace
	 * to change 'vencanje' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'vencanje', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	
	register_nav_menus(array(
		'gornji_meni' => "Top menu for the site",
		'donji meni' => 'Footer menu'

		));
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vencanje_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // vencanje_setup
add_action( 'after_setup_theme', 'vencanje_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vencanje_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vencanje_content_width', 640 );

	add_image_size('slider', 1156, 407, true);
}
add_action( 'after_setup_theme', 'vencanje_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vencanje_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vencanje' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'vencanje_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vencanje_scripts() {
	wp_enqueue_style( 'vencanje-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vencanje-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'vencanje-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vencanje_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


add_action('wp_enqueue_scripts', 'ucitaj_skripte');



function ucitaj_skripte() {

	wp_enqueue_style('DroidSans', "http://fonts.googleapis.com/css?family=Droid+Sans:400,700");
	wp_enqueue_style('DroidSerif', "http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700");
	wp_enqueue_style('style', get_template_directory_uri() . "/styles/style.css");
	wp_enqueue_style('inner', get_template_directory_uri() . "/styles/inner.css");
	wp_enqueue_style('layout', get_template_directory_uri() . "/styles/layout.css");
	wp_enqueue_style('flexslider', get_template_directory_uri() . "/styles/flexslider.css");
	wp_enqueue_style('color', get_template_directory_uri() . "/styles/color.css");
	wp_enqueue_style('prettyPhoto', get_template_directory_uri() . "/styles/prettyPhoto.css");

	wp_enqueue_script('jquery');
	wp_enqueue_script('hoverIntent', get_template_directory_uri(). '/js/hoverIntent.js', array(), '', true);
	wp_enqueue_script('superfish', get_template_directory_uri(). '/js/superfish.js', array(), '', true);
	wp_enqueue_script('supersubs', get_template_directory_uri(). '/js/supersubs.js', array(), '', true);
	wp_enqueue_script('tinynav', get_template_directory_uri(). '/js/tinynav.min.js', array(), '', true);
	wp_enqueue_script('flexslider', get_template_directory_uri(). '/js/jquery.flexslider-min.js', array(), '', true);
	wp_enqueue_script('custom', get_template_directory_uri(). '/js/custom.js', array(), '', true);
	wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', array(), '', true);
}


add_action('init', 'registruj_cpt', 0);


function registruj_cpt(){

	$labels = array(
		'name'                => _x( 'Slajdes', 'Post Type General Name', 'vencanje' ),
		'singular_name'       => _x( 'Slajd', 'Post Type Singular Name', 'vencanje' ),
		'menu_name'           => __( 'Slajder', 'vencanje' ),
		'name_admin_bar'      => __( 'Slajder', 'vencanje' ),
		'parent_item_colon'   => __( 'Parent Item:', 'vencanje' ),
		'all_items'           => __( 'Slides', 'vencanje' ),
		'add_new_item'        => __( 'Add New Slide', 'vencanje' ),
		'add_new'             => __( 'Add New', 'vencanje' ),
		'new_item'            => __( 'New Item', 'vencanje' ),
		'edit_item'           => __( 'Edit Item', 'vencanje' ),
		'update_item'         => __( 'Update Item', 'vencanje' ),
		'view_item'           => __( 'View Item', 'vencanje' ),
		'search_items'        => __( 'Search Slides', 'vencanje' ),
		'not_found'           => __( 'Not found', 'vencanje' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'vencanje' ),
	);

	$args = array(
		'label'               => __( 'Slajder', 'vencanje' ),
		'description'         => __( 'Post Type Description', 'vencanje' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 40,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,		
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
	);


	register_post_type( 'slider', $args );

}


  