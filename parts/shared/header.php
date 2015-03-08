<header>

	<div class="container-fluid">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar-collapse">
					<i class="fa fa-arrow-down"></i>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><h2><?php bloginfo('title'); ?></h2></a>
					<p class="capped" style="margin-left: -25px"><?php bloginfo( 'description' ); ?></p>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>	
		</nav>
	</div>
</header>