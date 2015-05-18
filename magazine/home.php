<?php
/**
 * The home template file.
 *
 * This is the homepage template file in a WordPress theme, it generates the layout instead of index.php
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
			<h3 class="blog-info"><?php echo bloginfo('description'); ?></h3>
					<div class="features small-16 medium-15 large-12 small-centered columns">		
						<?php get_template_part( 'post-loop' ); ?>
				</div>
			</main><!-- #main -->
	</div><!-- #primary -->
    </section>
<?php get_footer(); ?>
