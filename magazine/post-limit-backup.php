<?php

// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('ID=');

	echo '<ul class="small-block-grid-2 large-block-grid-3 clearing-thumbs" data-clearing>';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		}
		else {
			echo 'no thubnail enabled';
		}
	echo '<h1>' . get_the_title() . '</a></h1></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
