<?php
	//start counter at zero
	$count = 0;



$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ' '; 
  }
}



// The Query : Set limiter in WP_Query below

//$t = wp_get_post_tags($post->ID);
//print_r($t);


$args = array(
	'slug' => 'in-this-issue');


foreach($args as $arg){
	echo $arg;
}


$tags =  get_tags(array('slug' => 'in-this-issue')); // create array looking for slug 'in-this-issue'
$html = '<div class="post_tags">';
foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
	$exclude = $tag_link;
	$postid = url_to_postid($tag_link);
	$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	$html .= "{$tag->parent}</a>";
echo '<br />' . $exclude;
echo '<br />'. $postid;

}
$html .= '</div>';
echo $html;
