<h3 class="related-articles">Featured Articles</h3>

<?php
	//start counter at zero
	$count = 0;


// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag__not_in=7');

	echo '<ul class="small-block-grid-2 large-block-grid-6 additional-articles">';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

// Add +1 to the counter each time it repeats
$count++;

	echo '<li class="counter-' . $count . '" ><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('thumbnail');
		}
		else {
			// do nothing 
		}
	echo '<h1>' . get_the_title() . '</a></h1>';
}
	echo '</ul>';
wp_reset_postdata();
?>
