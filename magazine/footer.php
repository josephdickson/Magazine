<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package magazine
 */
?>

  <a class="exit-off-canvas"></a>

  </div>
</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info hide">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'magazine' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'magazine' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'magazine' ), 'magazine', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
		
	<?php 
		if (function_exists('get_field')){
			$watermark = get_field('watermark' , 'option');
			//echo '<img src="' . $watermark['url'] . '" alt="' . $watermark['alt'] . '" />' ;
		}
	?>

	<?php get_template_part('acf/acf' , 'footer-link'); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
