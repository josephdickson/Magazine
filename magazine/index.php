<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazine
 */

get_header(); ?>
    <section class="main-section">
	<!-- content goes here -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_template_part('photo-main-index'); ?>
			<div class="row">
				<?php get_template_part( 'post-limit' ); ?>
			</div><!-- .row -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="row">

	</div><!-- .row -->
    </section>
<?php get_footer(); ?>
