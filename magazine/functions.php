<?php
/**
 * magazine functions and definitions
 *
 * @package magazine
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'magazine_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function magazine_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on magazine, use a find and replace
	 * to change 'magazine' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'magazine', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'magazine' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'magazine_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

}
endif; // magazine_setup
add_action( 'after_setup_theme', 'magazine_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */



register_sidebars( 1 ); 


/**
 * Enqueue scripts and styles.
 */
function magazine_scripts() {
	wp_enqueue_style( 'foundation-5', get_template_directory_uri() . '/css/foundation.min.css' );

	wp_enqueue_style( 'magazine-style', get_stylesheet_uri() );

//	wp_enqueue_style( 'raleway-google-font', 'http://fonts.googleapis.com/css?family=Raleway:700,400,200' );

	wp_enqueue_style ( 'source-serif-pro', 'http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700,600' );

	wp_enqueue_script( 'jquery-2.1.4', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '20150505', true );

	wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '20150507', true );

	wp_enqueue_script( 'magazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'magazine-foundation', get_template_directory_uri() . '/js/foundation/foundation.js', array(), '20150503', true );

	wp_enqueue_script( 'magazine-foundation-modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '20150507', false );

	wp_enqueue_script( 'magazine-foundation-clearing', get_template_directory_uri() . '/js/foundation/foundation.clearing.js', array(), '20150507', true );

	wp_enqueue_script( 'magazine-foundation-interchange', get_template_directory_uri() . '/js/foundation/foundation.interchange.js', array(), '20150505', true );

	wp_enqueue_script( 'magazine-foundation-offcanvas', get_template_directory_uri() . '/js/foundation/foundation.offcanvas.js', array(), '20150503', true );

	wp_enqueue_script( 'magazine-foundation-reveal', get_template_directory_uri() . '/js/foundation/foundation.reveal.js', array(), '20150705', true );

	wp_enqueue_script( 'magazine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'magazine_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load Advanced Custom Fields compatibility file.
 */
require get_template_directory() . '/inc/advanced-custom-fields.php';
