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

	<header id="masthead" class="site-header" role="banner">
		<?php// get_template_part ('header', 'top-nav'); ?>
	</header><!-- #masthead -->

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
		<?php // get_template_part ('header', 'top-nav'); ?>



		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<section class="top-bar-section">
		<ul class="title-area site-branding">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if (function_exists('get_field')){
					echo '<img src="' . get_field('single_logo' , 'option') . '" />';}?></a><?php // bloginfo( 'description' ); ?></li>
		</ul><!-- .site-branding -->
			
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'magazine' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'start_lvl' => 'dropdown' ) ); ?>
	</section>
</nav><!-- #site-navigation -->

	</header>
      </section>

    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
	<?php get_sidebar(); ?>
      </ul>
    </aside>
