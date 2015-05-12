<div class="row related-links">
		<div class="small-8 medium-6 large-4 small-centered columns">
		<?php if (function_exists('get_field')){

			$logo_footer = get_field('logo_footer' , 'option');
			$logo_link_to = get_field('url_footer' , 'option');

			echo '<a class="logo" href="'. $logo_link_to . '"><img src="' . $logo_footer['url'] . '" /></a>';
		?>
		</div>
		<div class="small-16 columns">
		<?php
			if( have_rows('footer_links', 'option') ): ?>
				<ul>
				<?php while( have_rows('footer_links', 'option') ): the_row(); 
					$text = get_sub_field('link_text');
					$url = get_sub_field('link_url');
						echo '<li><a class="footer-link" href="' . $url . '">' . $text . '</a></li>';
				endwhile; ?>
				</ul>
			<?php endif;
		}
		?>
		</div>
</div>
