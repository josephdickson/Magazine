<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package magazine
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="<?php echo get_the_title(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<meta property="og:image" content="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 300,300 ), false, '' ); echo $src[0]; ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<?php 	
	
	if (function_exists('get_field')){
		$logo_header = get_field('logo_header' , 'option');
	 	$logo_url = get_field('url_header' ,  'option');
		$banner = get_field('image_banner' ,  'option');
		}

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'magazine' ); ?></a>

	<div id="content" class="site-content">
	<?php get_template_part ('header-top-nav'); ?>
