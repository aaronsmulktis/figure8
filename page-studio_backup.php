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

<div class="jumbotron">
	<div class="container-fluid">
		<div id="editable-jumbotron">
			<img src="<?php the_field('hero_image'); ?>" />
		</div>
		<div id="big-logo">
			<img src="<?php the_field('big_logo'); ?>" />

		</div>
		<div id="intro-text">
			<?php if(get_field('intro_text')) {
				echo get_field('intro_text');
			} ?>
		</div>
	</div>
</div>

<!--
<div class="studio-page container-fluid">
	<div class="row">
		<div id="content" class="col-sm-12">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>

			<ul class="studio-rooms">
				<?php $postslist = get_posts('numberposts=4&order=DESC&orderby=date'); foreach ($postslist as $post) : setup_postdata($post); ?>
				<li class="entry container-fluid">
					<div class="row-fluid">
						<a class="entry-link" href="<?php the_permalink(); ?>">
							<div class="col-sm-8">
								<?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
							</div>
							<div class="col-sm-4">
								<h3><?php the_title(); ?></h3>
								<div class="excerpt"><?php the_excerpt(); ?></div>
							</div>
						</a>
					</div>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>