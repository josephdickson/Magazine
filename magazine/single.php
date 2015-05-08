<?php 

$post = $wp_query->post;
			if ( has_tag( 'video' )) {
				get_header('video');
				get_template_part('single-tag-video'); } 


			else { 
				get_header() .
				get_template_part('single-default'); 
			}

?>
