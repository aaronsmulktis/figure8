<?php
/**
 * Template Name: About
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

<div class="container about-page">
	<div class="row">
		<div id="content" class="col-sm-10 col-sm-offset-1">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>

			<div class="table-responsive">
				<table class="table">
					<!-- On rows -->
					<tr class="active">...</tr>
					<tr class="success">...</tr>
					<tr class="warning">...</tr>
					<tr class="danger">...</tr>
					<tr class="info">...</tr>

					<!-- On cells (`td` or `th`) -->
					<tr>
					  <td class="active">...</td>
					  <td class="success">...</td>
					  <td class="warning">...</td>
					  <td class="danger">...</td>
					  <td class="info">...</td>
					</tr>
				</table>
			</div>

		</div>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>