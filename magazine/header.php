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

<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title"><?php// bloginfo( 'name' ); ?></h1>
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part ('header', 'top-nav'); ?>
	</header>
      </section>

    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
	<?php get_sidebar(); ?>
      </ul>
    </aside>
