<?php
/**** 

Slideshow 

*****/
if( have_rows('slideshow') ): ?>

	<ul data-orbit>

	<?php while( have_rows('slideshow') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$caption = get_sub_field('caption');
		$page = get_sub_field('page');

		?>

			<?php if( $image ): ?>
				<li>
			<?php endif; ?>

			<?php if( $page ): ?>
				<a href="<?php echo $page; ?>">
			<?php endif; ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php if ( $caption ): ?>
				<div class="orbit-caption"><?php echo $caption; ?></div>
			<?php endif; ?>
			
			<?php if( $page ): ?>
				</a>
			<?php endif; ?>

			<?php if( $image ): ?>
				</li>
			<?php endif; ?>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
