<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="content">

	<?php 
		$hero = get_field('hero_image');
		$upstairs = get_field('upstairs_media');
		$downstairs = get_field('downstairs_media');
		$rates = get_field('rates_media');
		$clients = get_field('client_media');
	?>

	<div id="hero" class="room container-fluid">
		<div id="big-brand" class="center-block" style="background-image: url(<?php echo $hero['sizes']['large']; ?>)">
			<div id="big-logo">
				<img src="<?php the_field('big_logo'); ?>" />
				<h3>
					<?php if(get_field('intro_text')) {
						echo get_field('intro_text');
					} ?>
				</h3>
			</div>
			<a id="scroll-down" href="#"><i class="fa fa-arrow-circle-o-down"></i></a>
		</div>
	</div>

	<div id="upstairs" class="room container-fluid">
		<div class="center-block" style="background-image: url(<?php echo $upstairs['sizes']['large']; ?>)">
			<div class="center-info">
				<div id="upstairs-title">
					<h2><?php if(get_field('upstairs')) {
						echo get_field('upstairs');
					} ?></h2>
				</div>
			</div>		
		</div>
	</div>

	<div id="upstairs-gallery" class="room container">
		<div class="room-info row" id="upstairs-info">
			<div class="col-md-10 col-md-offset-1">
				<?php if(get_field('upstairs_info')) {
					echo get_field('upstairs_info');
				} ?>
			</div>
		</div>

		<hr class="marVert40">

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-7">
					<?php 
						$upstairs1 = get_field('upstairs_media_1');
						$upstairs2 = get_field('upstairs_media_2');
						$upstairs3 = get_field('upstairs_media_3');
						$upstairs4 = get_field('upstairs_media_4');
						$upstairs5 = get_field('upstairs_media_5');
					?>
					<div class="row">
						<div class="col-md-6 padRight5">
								<img src="<?php echo $upstairs1['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
						<div class="col-md-6 padLeft5">
								<img src="<?php echo $upstairs2['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
					<div class="row top-buffer">
						<div class="col-md-12">
								<img src="<?php echo $upstairs4['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
				</div>
				<div class="col-md-5">
						<div class="row"><img src="<?php echo $upstairs3['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>

						<div class="row top-buffer"><img src="<?php echo $upstairs5['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>
				</div>
			</div>
		</div>

		<div class="room-info row padVert40" id="upstairs-call">
			<div class="container">
				<div class="col-sm-6 col-sm-offset-2 text-right">
					<h4><?php the_field('call-to-action'); ?></h4>
				</div>
				<div class="col-sm-2">
					<a href="mailto:michael@figure8recording.com" class="btn btn-default">Email Us</a>
				</div>
			</div>
		</div>

	</div>

	<div id="downstairs" class="room container-fluid">
		
		<div class="center-block" style="background-image: url(<?php echo $downstairs['sizes']['large']; ?>)">
			<div class="center-info">
				<div id="downstairs-title">
					<h2><?php if(get_field('downstairs')) {
						echo get_field('downstairs');
					} ?></h2>
				</div>
			</div>
		</div>
	</div>

	<div id="downstairs-gallery" class="room container">
		<div class="room-info row" id="downstairs-info">
			<div class="col-md-10 col-md-offset-1">
				<?php if(get_field('downstairs_info')) {
					echo get_field('downstairs_info');
				} ?>
			</div>
		</div>

		<hr class="marVert40">

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-5">
					<?php
						$downstairs1 = get_field('downstairs_media_1');
						$downstairs2 = get_field('downstairs_media_2');
						$downstairs3 = get_field('downstairs_media_3');
						$downstairs4 = get_field('downstairs_media_4');
						$downstairs5 = get_field('downstairs_media_5');
					?>
						<div class="row"><img src="<?php echo $downstairs1['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>

						<div class="row top-buffer"><img src="<?php echo $downstairs3['sizes']['medium']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
								<img src="<?php echo $downstairs2['sizes']['medium']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
					<div class="row top-buffer">
						<div class="col-md-6 padRight5">
								<img src="<?php echo $downstairs4['sizes']['medium']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
						<div class="col-md-6 padLeft5">
								<img src="<?php echo $downstairs5['sizes']['medium']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="room-info row padVert40" id="downstairs-call">
			<div class="container">
				<div class="col-sm-6 col-sm-offset-2 text-right">
					<h4><?php the_field('call-to-action'); ?></h4>
				</div>
				<div class="col-sm-2">
					<a href="mailto:michael@figure8recording.com" class="btn btn-default">Email Us</a>
				</div>
			</div>
		</div>
	</div>

	<div id="rates" class="room">

		<div class="center-block" style="background-image: url(<?php echo $rates['sizes']['large']; ?>)">
			<div class="center-info">
				<div id="rates-acf" class="container-fluid">
					<div class=""><?php the_field('rates'); ?></div>
				</div>
			</div>
		</div>

	</div>

	<div id="gear" class="room">
		<div id="gear-acf" class="container">
			<div class="row">
				<h2><?php the_field('gear_title'); ?></h2>
				<div class="g-col1 col-md-4">
					<h3><?php the_field('g-column1-title'); ?></h3>
					<div class="g-box"><?php the_field('g-column1-b1'); ?></div>
					<div class="g-box"><?php the_field('g-column1-b2'); ?></div>
					<div class="g-box"><?php the_field('g-column1-b3'); ?></div>
					<div class="g-box"><?php the_field('g-column1-b4'); ?></div>
					<div class="g-box"><?php the_field('g-column1-b5'); ?></div>
					<div class="g-box"><?php the_field('g-column1-b6'); ?></div>
				</div>
				<div class="g-col2 col-md-4">
					<h3><?php the_field('g-column2-title'); ?></h3>
					<div class="g-box"><?php the_field('g-column2-b1'); ?></div>
					<div class="g-box"><?php the_field('g-column2-b2'); ?></div>
					<div class="g-box"><?php the_field('g-column2-b3'); ?></div>
					<div class="g-box"><?php the_field('g-column2-b4'); ?></div>
					<div class="g-box"><?php the_field('g-column2-b5'); ?></div>
				</div>
				<div class="g-col3 col-md-4">
					<h3><?php the_field('g-column3-title'); ?></h3>
					<div class="g-box"><?php the_field('g-column3-b1'); ?></div>
					<div class="g-box"><?php the_field('g-column3-b2'); ?></div>
					<div class="g-box"><?php the_field('g-column3-b3'); ?></div>
					<div class="g-box"><?php the_field('g-column3-b4'); ?></div>
				</div>
			</div>
		</div>
	</div>

	<div id="clients" class="room container-fluid">
		<div class="center-block" style="background-image: url(<?php echo $clients['sizes']['large']; ?>)">
			<div id="clients-acf">
				<div class="client-box col-md-8 col-md-offset-2">
					<?php the_field('clients'); ?>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="room scroll">
		<div id="about-acf"  class="container">
			<div class="col-md-8 col-md-offset-2">
				<?php the_field('about'); ?>
				
				<?php if ( is_active_sidebar( 'personnel' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'personnel' ); ?>
					</div>
					<!-- #primary-sidebar -->
				<?php endif; ?>
				
				<ul class="container-fluid">
					<?php
					
					
					$args = array( 'posts_per_page' => 15, 'category_name' => 'people', 'order' => 'DESC' );
					
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li class="row">
							<div class="col-sm-5">
								<?php the_post_thumbnail('medium',''); ?>
							</div>
							<div class="col-sm-7 text-left">
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
								<ul class="list-inline">
									<?php if(get_field('link1')) : ?>
										<li><a class="btn btn-default" href="<?php echo get_field('link1'); ?>">More Info</a></li>
									<?php endif; ?>
								</ul>
							</div>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>
				
				</ul>
			</div>
		</div>

		<hr class="marVert40">

		<div class="room-info row-fluid padVert40" id="about-call">
			<div class="container">
				<div class="col-sm-6 col-sm-offset-2 text-right">
					<h4><?php the_field('call-to-action'); ?></h4>
				</div>
				<div class="col-sm-2">
					<a href="mailto:michael@figure8recording.com" class="btn btn-default">Email Us</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>