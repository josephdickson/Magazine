<h3 class="related-articles">Featured Articles</h3>

<?php
$current_post_ID = get_the_ID(); // the post's id is assigned to $current_post_ID

$the_query = new WP_Query( array( 'post_type' => 'post', 'post__not_in' => array( $current_post_ID ) ) ); // current post is excluded from the loop

	echo '<ul class="block-grid small-block-grid-2 medium-block-grid-5 large-block-grid-6 additional-articles">';
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
