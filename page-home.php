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

	<div id="hero" class="room container-fluid">
		<div id="big-brand" class="center-block" style="background-image: url(<?php the_field('hero_image'); ?>)">
			<div id="big-logo">
				<img src="<?php the_field('big_logo'); ?>" />
				<p>
					<?php if(get_field('intro_text')) {
						echo get_field('intro_text');
					} ?>
				</p>
			</div>
			<a id="scroll-down"><i class="fa fa-arrow-circle-o-down"></i></a>
		</div>
	</div>

	<div id="upstairs" class="room container-fluid">
		<div class="center-block" style="background-image: url(<?php the_field('upstairs_media'); ?>)">
			<div class="center-info">
				<div id="upstairs-title">
					<h2><?php if(get_field('upstairs')) {
						echo get_field('upstairs');
					} ?></h2>
				</div>
				<div id="upstairs-info">
					<?php if(get_field('upstairs_info')) {
						echo get_field('upstairs_info');
					} ?>
				</div>
			</div>			
		</div>
		
	</div>

	<div id="upstairs-gallery" class="room container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-7">
					<?php 
						$attachment_1 = get_field('upstairs_media_1');
						$attachment_2 = get_field('upstairs_media_2');
						$attachment_3 = get_field('upstairs_media_3');
						$attachment_4 = get_field('upstairs_media_4');
						$attachment_5 = get_field('upstairs_media_5');
						
						$size = "medium";
						
						$upstairs1 = wp_get_attachment_image_src( $attachment_1, $size );
						$upstairs2 = wp_get_attachment_image_src( $attachment_2, $size );
						$upstairs3 = wp_get_attachment_image_src( $attachment_3, $size );
						$upstairs4 = wp_get_attachment_image_src( $attachment_4, $size );
						$upstairs5 = wp_get_attachment_image_src( $attachment_5, $size );
					?>
					<div class="row">
						<div class="col-md-6">
								<img src="<?php echo $upstairs1['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
						<div class="col-md-6">
								<img src="<?php echo $upstairs2['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
					<div class="row top-buffer">
						<div class="col-md-12">
								<img src="<?php echo $upstairs4['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
				</div>
				<div class="col-md-5">
						<div class="row"><img src="<?php echo $upstairs3['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>

						<div class="row top-buffer"><img src="<?php echo $upstairs5['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>
				</div>
			</div>
		</div>
	</div>

	<!-- UPSTAIRS IMG GALLERY -->
	<!-- <div id="upstairs-gallery">
		<?php the_field('upstairs_gallery'); ?>
	</div> -->

	<hr>
	<div id="downstairs" class="room container-fluid">
		
		<div class="center-block" style="background-image: url(<?php the_field('downstairs_media'); ?>)">
			<div class="center-info">
				<div id="downstairs-title">
					<h2><?php if(get_field('downstairs')) {
						echo get_field('downstairs');
					} ?></h2>
				</div>
				<div id="downstairs-info">
					<?php if(get_field('downstairs_info')) {
						echo get_field('downstairs_info');
					} ?>
				</div>
			</div>
		</div>
	</div>

	<div id="downstairs-gallery" class="room container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-5">
					<?php 
						$attachment_1 = get_field('downstairs_media_1');
						$attachment_2 = get_field('downstairs_media_2');
						$attachment_3 = get_field('downstairs_media_3');
						$attachment_4 = get_field('downstairs_media_4');
						$attachment_5 = get_field('downstairs_media_5');
						
						$size = "medium";
						
						$downstairs1 = wp_get_attachment_image_src( $attachment_1, $size );
						$downstairs2 = wp_get_attachment_image_src( $attachment_2, $size );
						$downstairs3 = wp_get_attachment_image_src( $attachment_3, $size );
						$downstairs4 = wp_get_attachment_image_src( $attachment_4, $size );
						$downstairs5 = wp_get_attachment_image_src( $attachment_5, $size );
					?>
						<div class="row"><img src="<?php echo $downstairs1['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>

						<div class="row top-buffer"><img src="<?php echo $downstairs3['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" /></div>
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-12">
								<img src="<?php echo $downstairs2['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
					<div class="row top-buffer">
						<div class="col-md-6">
								<img src="<?php echo $downstairs4['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
						<div class="col-md-6">
								<img src="<?php echo $downstairs5['sizes']['medium']; ?>" width="<?php echo $image['sizes']['medium-width']; ?>" height="<?php echo $image['sizes']['medium-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<div id="gear" class="room">
		<div id="gear-acf" class="container">
			<div class="col-md-8 col-md-offset-2">
				<h2><?php if(get_field('gear_title')) {
						echo get_field('gear_title');
					} ?></h2>
				<?php the_field('gear'); ?>
			</div>
		</div>
	</div>
	<hr>
	<div id="rates" class="room">

		<div class="center-block" style="background-image: url(<?php the_field('rates_media'); ?>)">
			<div class="center-info">
				<div id="rates-acf" class="container-fluid">
					<div class=""><?php the_field('rates'); ?></div>
				</div>
			</div>
		</div>

	</div>
	<hr>
	<div id="clients" class="room">
		<div id="clients-acf" class="container">
			<div class="col-md-8 col-md-offset-2">
				<?php the_field('clients'); ?>
			</div>
		</div>
	</div>
	<hr>
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
								<p><?php the_excerpt(); ?></p>
								<!-- <ul class="list-inline">
									<li><a href="<?php the_field('link1'); ?>"><i class="fa fa-globe fa-2x"></i></a></li>
									<li><a href="<?php the_field('link2'); ?>"><i class="fa fa-globe fa-2x"></i></a></li>
									<li><a href="<?php the_field('link3'); ?>"><i class="fa fa-globe fa-2x"></i></a></li>
								</ul> -->
							</div>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>
				
				</ul>
			</div>
		</div>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>