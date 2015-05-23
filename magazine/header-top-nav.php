<nav class="tab-bar">	
	<header id="masthead" class="site-header" role="banner">
		<div class="left-small">
			<h1 class="title"><?php// bloginfo( 'name' ); ?></h1>



				<nav id="site-navigation" class="main-navigation top-bar" role="navigation">

					<ul class="title-area site-branding">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php if (function_exists('get_field')){
								echo '<img src="' . get_field('single_logo' , 'option') . '" />';}?></a><?php // bloginfo( 'description' ); ?></a></li>
					</ul><!-- .site-branding -->
				</nav>
		</div>

		<div class="right">
			<?php get_template_part('acf/acf', 'social-networks'); ?>
		</div>
	</header>
</nav><!-- #site-navigation -->
