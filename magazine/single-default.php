<?php
/**
 * The template for displaying all single posts.
 *
 * @package magazine
 */

get_header('single'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row article-begin">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php 
						if ( has_post_thumbnail() ) {
						the_post_thumbnail(); 
					} 
					?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php get_template_part('acf/acf', 'flexible-fields'); ?>
					
					<?php get_template_part( 'acf/acf' , 'gallery' ); ?>

					<?php // the_post_navigation(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

					<?php get_template_part( 'template-parts/loop', 'tiles' ); ?>
			</div><!-- .row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<div class="row">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
