<?php 

$post = $wp_query->post;
			if ( has_tag( 'video' )) {
				get_template_part('single-tag-video'); } 


			else { 
				get_template_part('single-default'); 
			}

?>
