<?php 
	$flag_middle = get_field('flag_middle_repeated', 'option'); 
	$flag = get_field('flag', 'option');

?>

<div class="small-16 medium-8 large-8 columns">

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=commencement-highlights');

	echo '<ul class="small-block-grid-1 large-block-grid-1">';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');

				$posttags = get_the_tags();
				if ($posttags) {
				  foreach($posttags as $tag) {
				    echo '<div class="flag" style="background-image:url(' . $flag['url'] . ');">'; // $flag is an image url
				    echo $tag-> name ;
				    echo '</div>';
				  }
				}
		}
			
		else {
			// do nothing
		}
	echo '<h1>' . get_the_title() . '</h1>';
	echo '<p>' . get_the_excerpt() . '</p></a></div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=video, student-awards, robert-little-15, bingxing-zhou-15');

	echo '<ul class="small-block-grid-1 large-block-grid-2">';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

		echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');

				$posttags = get_the_tags();
				if ($posttags) {
				  foreach($posttags as $tag) {
				    echo '<div class="flag" style="background-image:url(' . $flag['url'] . ');">'; // $flag is an image url
				    echo $tag-> name ;
				    echo '</div>';
				  }
				}
		}
		else {
			// do nothing
		}
	echo '<h1>' . get_the_title() . '</h1>';
	echo '<p>' . get_the_excerpt() . '</p></a></div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
</div>


<div class="small-16 medium-8 large-4 columns">
<?php 
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=president, the-class-of-2015');

	echo '<ul class="small-block-grid-1 large-block-grid-1">';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');

				$posttags = get_the_tags();
				if ($posttags) {
				  foreach($posttags as $tag) {
				    echo '<div class="flag" style="background-image:url(' . $flag['url'] . ');">'; // $flag is an image url
				    echo $tag-> name ;
				    echo '</div>';
				  }
				}
		}
		else {
			// do nothing
		}
	echo '<h1>' . get_the_title() . '</h1>';
	echo '<p>' . get_the_excerpt() . '</p></a></div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
</div>

<div class="small-16 medium-8 large-4 columns">
	<div class="panel features-box hide-for-small hide-for-medium">
		<?php // Requires ACF -- Pulls Homepage Index Box content from the Options page
		if (function_exists('get_field')){
			the_field('features-index-box', 'option');
		}

		?>
	</div>

<?php
	// counter for unique class tags for an element
	$count = 0;

// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=Sagehen');

	echo '<ul class="small-block-grid-1 large-block-grid-1">';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

// Add +1 to the counter each time it repeats
$count++;

	echo '<li><div class="panel counter-' . $count . '"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');

				$posttags = get_the_tags();
				if ($posttags) {
				  foreach($posttags as $tag) {
				    echo '<div class="flag" style="background-image:url(' . $flag['url'] . ');">'; // $flag is an image url
				    echo $tag-> name ;
				    echo '</div>';
				  }
				}
		}
		else {
			// do nothing
		}
	echo '<h1>' . get_the_title() . '</h1>';
	echo '<p>' . get_the_excerpt() . '</p></a></div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
</div>
