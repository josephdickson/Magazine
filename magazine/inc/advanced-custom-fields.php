<?php

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
/*
 *	Advanced Custom Fields Pro Options Page
 *	http://www.advancedcustomfields.com/resources/options-page/
 */
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

/*
 *  Flexible Content
 */

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
/*
 * Option's Page: Footer Contact Information
 */
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
/*
 * Redirect URL Page Template
 */

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



/* Foundation 4 & 5 Clearing Gallery */
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

// Flex Video Embeds for Posts
if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_5484d195d0644',
	'title' => 'Flex Video',
	'fields' => array (
		array (
			'key' => 'field_5484d1d1bed8a',
			'label' => 'Video',
			'name' => 'video_type',
			'prefix' => '',
			'type' => 'radio',
			'instructions' => 'Select YouTube or Self hosted as source',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'None' => 'None',
				'Self Hosted' => 'Self Hosted',
				'Vimeo' => 'Vimeo',
				'YouTube' => 'YouTube',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_5484d23bbed8b',
			'label' => 'YouTube Video',
			'name' => 'youtube',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Place YouTube Video ID here.',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5484d1d1bed8a',
						'operator' => '==',
						'value' => 'YouTube',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Place video ID Here',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5488cea737451',
			'label' => 'Vimeo Video',
			'name' => 'vimeo',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Place Vimeo Video ID here.',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5484d1d1bed8a',
						'operator' => '==',
						'value' => 'Vimeo',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Place video ID Here',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5484d2c5bed8c',
			'label' => 'Self Hosted Video',
			'name' => 'self_hosted_video',
			'prefix' => '',
			'type' => 'file',
			'instructions' => 'Select Video From Media Library',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5484d1d1bed8a',
						'operator' => '==',
						'value' => 'Self Hosted',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => 0,
			'max_size' => 0,
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
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
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

// Additional Options

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5550f783b59ff',
	'title' => 'Additional Options',
	'fields' => array (
		array (
			'key' => 'field_5550f7a0645bc',
			'label' => 'Flag',
			'name' => 'flag',
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
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_55512d77a8bc3',
			'label' => 'Footer Links',
			'name' => 'footer_links',
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
					'key' => 'field_55512da4a8bc4',
					'label' => 'Link Text',
					'name' => 'link_text',
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
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55512dc6a8bc5',
					'label' => 'Link URL',
					'name' => 'link_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
		array (
			'key' => 'field_55515cf714a21',
			'label' => 'Single logo',
			'name' => 'single_logo',
			'type' => 'image',
			'instructions' => 'This logo will appear in the top nav and cannot be larger than 40px high.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
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

endif;

// Add WYSIWYG box to options page for featured items used on home.php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5554d23a02a9a',
	'title' => 'Homepage Index Box',
	'fields' => array (
		array (
			'key' => 'field_5554d2729e57a',
			'label' => 'Features Index',
			'name' => 'features-index-box',
			'type' => 'wysiwyg',
			'instructions' => 'A simple editor to add content to the homepage',
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

endif;

/*
 *  Slideshow 
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_543eaa70ad3c4',
	'title' => 'Slideshow',
	'fields' => array (
		array (
			'key' => 'field_543eaa7d2a327',
			'label' => 'Slideshow',
			'name' => 'slideshow',
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
			'layout' => 'row',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_543eaac62a328',
					'label' => 'Image',
					'name' => 'image',
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
					'min_width' => 0,
					'min_height' => 0,
					'min_size' => 0,
					'max_width' => 0,
					'max_height' => 0,
					'max_size' => 0,
					'mime_types' => '',
				),
				array (
					'key' => 'field_543eaae02a329',
					'label' => 'Caption',
					'name' => 'caption',
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
					'placeholder' => 'Caption Goes Here',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_543eab482a32a',
					'label' => 'Page',
					'name' => 'page',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
					),
					'taxonomy' => array (
					),
					'allow_null' => 1,
					'multiple' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
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
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

?>
