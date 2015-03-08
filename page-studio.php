<?php
/**
 * Template Name: Studio
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

<div class="studio-page container">
	<div class="row">
		<div class="container-fluid">
			<div class="col-sm-10 col-sm-offset-1 nopadding">
				<div class="jumbotron">
					<?php echo do_shortcode('[new_royalslider id="1"]'); ?>
				</div>
			</div>
		</div>
		<div id="content" class="col-sm-10 col-sm-offset-1">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>

		</div>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>