<header>
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container nopadding">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar-collapse">
					<i class="fa fa-arrow-down"></i>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"></a>
					<!-- <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><h2><?php bloginfo('title'); ?></h2></a> -->
					<!-- <p class="description capped"><?php bloginfo( 'description' ); ?></p> -->
<!--
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"></a>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><h2><?php bloginfo('title'); ?></h2></a>
					<p class="description capped"><?php bloginfo( 'description' ); ?></p>
-->
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>	
		</nav>
	</div>
</header>