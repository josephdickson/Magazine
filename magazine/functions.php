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



register_sidebars( 2 ); 


/**
 * Enqueue scripts and styles.
 */
function magazine_scripts() {
	wp_enqueue_style( 'foundation-5', get_template_directory_uri() . '/css/foundation.min.css' );

	wp_enqueue_style( 'magazine-style', get_stylesheet_uri() );

	wp_enqueue_style( 'raleway-google-font', 'http://fonts.googleapis.com/css?family=Raleway:700,400,200' );

	wp_enqueue_script( 'jquery-2.1.4', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '20150505', true );

	wp_enqueue_script( 'magazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'magazine-foundation', get_template_directory_uri() . '/js/foundation/foundation.js', array(), '20150503', true );

	wp_enqueue_script( 'magazine-foundtion-offcanvas', get_template_directory_uri() . '/js/foundation/foundation.offcanvas.js', array(), '20150503', true );

	wp_enqueue_script( 'magazine-foundtion-interchange', get_template_directory_uri() . '/js/foundation/foundation.interchange.js', array(), '20150505', true );

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
 * Register style for social networking icons.
 */
function register_plugin_pz_social_networks() {
	wp_enqueue_style( 'pz_social_networks', get_template_directory_uri() . '/social_network_styles.css' , '' ,'' , 'all' );
	wp_enqueue_style( 'pz_social_networks' );
}

add_action( 'wp_enqueue_scripts', 'register_plugin_pz_social_networks' );

if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page(array(
        'title' => 'Social Networks',
        'parent' => 'options-general.php',
        'capability' => 'manage_options'
    ));
}

else {

	// do nothing

}

//	Advanced Custom Fields Pro Options Page
//	http://www.advancedcustomfields.com/resources/options-page/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_5464f860ced58',
	'title' => 'Header & Footer',
	'fields' => array (
		array (
			'key' => 'field_5464f8732d88d',
			'label' => 'Logo',
			'name' => 'logo_header',
			'prefix' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),


		array (
			'key' => 'field_546508b5804f3',
			'label' => 'Logo Footer',
			'name' => 'logo_footer',
			'prefix' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
		array (
			'key' => 'field_5464f8832d88e',
			'label' => 'Link url for header logo',
			'name' => 'url_header',
			'prefix' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'http://www.pitzer.edu',
			'placeholder' => '',
		),
		array (
			'key' => 'field_546508dd804f4',
			'label' => 'Link url for footer logo',
			'name' => 'url_footer',
			'prefix' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'http://www.pitzer.edu',
			'placeholder' => '',
		),
		array (
			'key' => 'field_54650e9fb5b51',
			'label' => 'Watermark',
			'name' => 'watermark',
			'prefix' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
		array (
			'key' => 'field_54651a271b364',
			'label' => 'Banner Image',
			'name' => 'image_banner',
			'prefix' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

register_field_group(array (
	'key' => 'group_54592956ca395',
	'title' => 'Flexible Content',
	'fields' => array (
		array (
			'key' => 'field_54592991e1d35',
			'label' => 'Flexible Content',
			'name' => 'flexible_content',
			'prefix' => '',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add Flexible Content',
			'min' => '',
			'max' => '',
			'layouts' => array (
				array (
					'key' => '5459299acdc1f',
					'name' => 'accordion',
					'label' => 'Accordion',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_54592a16e1d36',
							'label' => 'headline',
							'name' => 'headline',
							'prefix' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_54592a28e1d37',
							'label' => 'content',
							'name' => 'content',
							'prefix' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '545939949ba91',
					'name' => 'additional_content',
					'label' => 'Additional Content',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_545939a49ba92',
							'label' => 'Additional Content',
							'name' => 'wysiwyg',
							'prefix' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '546a9cbbc8acf',
					'name' => 'columns',
					'label' => 'Columns',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_546aa65e6ef01',
							'label' => 'Number of columns',
							'name' => 'number_of_columns',
							'prefix' => '',
							'type' => 'select',
							'instructions' => 'Select the number of columns you would like to display side by side.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								1 => 1,
								2 => 2,
								3 => 3,
								4 => 4,
								5 => 5,
							),
							'default_value' => array (
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'placeholder' => '',
							'disabled' => 0,
							'readonly' => 0,
						),
						array (
							'key' => 'field_546a9cf6c8ad0',
							'label' => 'Column Repeater',
							'name' => 'column_repeater',
							'prefix' => '',
							'type' => 'repeater',
							'instructions' => 'Add the same number of columns as selected in "number of columns" additional columns will start a new row.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'min' => '',
							'max' => '',
							'layout' => 'row',
							'button_label' => 'Add Column',
							'sub_fields' => array (
								array (
									'key' => 'field_546a9dfac8ad6',
									'label' => 'column content',
									'name' => 'column_content',
									'prefix' => '',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array (
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '54592d61e9a19',
					'name' => 'profile',
					'label' => 'Profile',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_54592b56e1d39',
							'label' => 'image',
							'name' => 'image',
							'prefix' => '',
							'type' => 'image',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
						),
						array (
							'key' => 'field_54592b68e1d3a',
							'label' => 'content',
							'name' => 'content',
							'prefix' => '',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'posts_page',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'top_level',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'parent',
			),
		),
		array (
			array (
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'child',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'field',
	'hide_on_screen' => '',
));

// Footer contact Information
register_field_group(array (
	'key' => 'group_546bbbcf710d6',
	'title' => 'Footer Contact Info',
	'fields' => array (
		array (
			'key' => 'field_546bbc8ea7d46',
			'label' => 'Office Name',
			'name' => 'office',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Office of Communications',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_546bbe69a7d47',
			'label' => 'Office Location',
			'name' => 'location',
			'prefix' => '',
			'type' => 'textarea',
			'instructions' => 'On campus office location.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Scott Hall 100',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_546bbefca7d48',
			'label' => 'Phone Numbers',
			'name' => 'phone',
			'prefix' => '',
			'type' => 'textarea',
			'instructions' => 'Add each number on a separate line.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '909.555.5555
Fax: 909.555.5555',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_546bbf4fa7d49',
			'label' => 'Address',
			'name' => 'address',
			'prefix' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '1050 N. Mills Avenue
Claremont, CA 91711',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_546bbf88a7d4a',
			'label' => 'Email',
			'name' => 'email',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Use a general email address.
When "Office Name" is clicked it will open an email to the provided address.
',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

// Redirect URL
register_field_group(array (
	'key' => 'group_54810d07aa9f1',
	'title' => 'Redirect URL',
	'fields' => array (
		array (
			'key' => 'field_54810d133f352',
			'label' => 'Redirect to URL',
			'name' => 'redirect_to_url',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'URL to redirect this page to.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'http://www.pitzer.edu',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-redirect.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));



/* Foundation 4 Clearing Gallery */
register_field_group(array (
	'key' => 'group_550b158d67abc',
	'title' => 'Gallery',
	'fields' => array (
		array (
			'key' => 'field_550b1595ad773',
			'label' => 'Image Gallery',
			'name' => 'image_gallery',
			'prefix' => '',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));





/* Social Networks */
register_field_group(array (
	'key' => 'group_542986452cf69',
	'title' => 'Social Networks',
	'fields' => array (
		array (
			'key' => 'field_54ee149552273',
			'label' => 'Icon Size',
			'name' => 'icon_size',
			'prefix' => '',
			'type' => 'radio',
			'instructions' => 'Choose the icon size "in pixels"',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'fifty' => 'fifty',
				'fourty' => 'fourty',
				'thirty' => 'thirty',
				'twenty-five' => 'twenty-five',
				'twenty' => 'twenty',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_54ee142352272',
			'label' => 'Icon Appearance',
			'name' => 'icon_appearance',
			'prefix' => '',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'circle' => 'circle',
				'rounded' => 'rounded',
				'square' => 'square',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_542989555d625',
			'label' => 'Social Networks',
			'name' => 'social_networks',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_542989745d626',
					'label' => 'Social Network URL',
					'name' => 'social_network_url',
					'prefix' => '',
					'type' => 'text',
					'instructions' => 'Url of social network page.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_542987745d623',
					'label' => 'Social Icon',
					'name' => 'social_icon',
					'prefix' => '',
					'type' => 'radio',
					'instructions' => 'Choose social network to display on this site.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Facebook' => 'Facebook',
						'Flickr' => 'Flickr',
						'Instagram' => 'Instagram',
						'Linkedin' => 'Linkedin',
						'Pinterest' => 'Pinterest',
						'Twitter' => 'Twitter',
						'Vimeo' => 'Vimeo',
						'YouTube' => 'YouTube',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-social-networks',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

