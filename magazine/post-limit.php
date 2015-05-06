<?php

// The Query
$the_query = new WP_Query('ID=');

	echo '<ul class="small-block-grid-2 large-block-grid-4 clearing-thumbs" data-clearing>';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();
	echo '<li><div class="panel"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
