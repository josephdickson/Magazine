<div class="small-16 large-8 columns">

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=commencement-highlights');

	echo '<ul class="small-block-grid-1 large-block-grid-1 clearing-thumbs" data-clearing>';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('full');
		}
		else {
			echo 'no thubnail enabled';
		}
	echo '<h1>' . get_the_title() . '</a></h1>';
	echo '<p>' . get_the_excerpt() . '</div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>

<?php
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=video, student-awards');

	echo '<ul class="small-block-grid-2 large-block-grid-2 clearing-thumbs" data-clearing>';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		}
		else {
			echo 'no thubnail enabled';
		}
	echo '<h1>' . get_the_title() . '</a></h1>';
	echo '<p>' . get_the_excerpt() . '</div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
</div>


<div class="small-16 large-4 columns">
<?php 
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=president, the-class-of-2015');

	echo '<ul class="small-block-grid-1 large-block-grid-1 clearing-thumbs" data-clearing>';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		}
		else {
			echo 'no thubnail enabled';
		}
	echo '<h1>' . get_the_title() . '</a></h1>';
	echo '<p>' . get_the_excerpt() . '</div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
</div>

<div class="small-16 large-4 columns">
<?php 
// The Query : Set limiter in WP_Query below
$the_query = new WP_Query('tag=in-this-issue, Sagehen');

	echo '<ul class="small-block-grid-1 large-block-grid-1 clearing-thumbs" data-clearing>';
// The Loop
while ( $the_query->have_posts() ) {
	$the_query->the_post();

	echo '<li><div class="panel"><a href="' . get_permalink() . '">';
			if ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		}
		else {
			echo 'no thubnail enabled';
		}
	echo '<h1>' . get_the_title() . '</a></h1>';
	echo '<p>' . get_the_excerpt() . '</div></li>';
}
	echo '</ul>';
wp_reset_postdata();
?>
</div>
