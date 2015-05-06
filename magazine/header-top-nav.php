		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<section class="top-bar-section">
		<ul class="title-area site-branding">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><?php // bloginfo( 'description' ); ?></li>
		</ul><!-- .site-branding -->
			
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'magazine' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'start_lvl' => 'dropdown' ) ); ?>
			</section>
		</nav><!-- #site-navigation -->
