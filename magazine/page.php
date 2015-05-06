<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package magazine
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
					<?php 
						if ( has_post_thumbnail() ) {
						the_post_thumbnail(); 
					} 
					?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="row">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
