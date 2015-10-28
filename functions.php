<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */
	
	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {

		// wp_register_style( 'bootstrapCSS', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', '', '', 'screen' );
  //       wp_enqueue_style( 'bootstrapCSS' );

  //       wp_register_style( 'bootstrapTheme', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css', '', '', 'screen' );
  //       wp_enqueue_style( 'bootstrapTheme' );

		// wp_register_script( 'bootstrapJS', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array( 'jquery' ) );
		// wp_enqueue_script( 'bootstrapJS' );

		// wp_register_script( 'royalsliderJS', plugins_url().'/new-royalslider/lib/royalslider/jquery.royalslider.min.js', array( 'jquery' ) );
		// wp_enqueue_script( 'royalsliderJS' );

		// wp_register_style( 'royalsliderCSS', plugins_url().'/new-royalslider/lib/royalslider/royalslider.css', '', '', 'screen' );
  //       wp_enqueue_style( 'royalsliderCSS' );

  //       wp_register_style( 'royalsliderSkin', get_template_directory_uri().'/rs-figure8-skin/rs-figure8.css', '', '', 'screen' );
  //       wp_enqueue_style( 'royalsliderSkin' );

		// wp_register_script( 'smoothScroll', get_template_directory_uri().'/js/smoothScroll.js', array( 'jquery' ) );
		// wp_enqueue_script( 'smoothScroll' );

		// wp_register_script( 'parallax', get_template_directory_uri().'/js/parallax.js', array( 'jquery' ) );
		// wp_enqueue_script( 'parallax' );
		
		wp_register_script( 'prod', get_template_directory_uri().'/js/prod.js', array( 'jquery' ) );
		wp_enqueue_script( 'prod' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );

	// Hide the Admin Bar
	add_filter('show_admin_bar', '__return_false');

	// CUSTOME SLIDER THEME
	add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
	function new_royalslider_add_custom_skin($skins) {
	      $skins['rsFigure8'] = array(
	           'label' => 'Figure8 Slider Skin',
	           'path' => get_stylesheet_directory_uri() . '/rs-figure8-skin/rs-figure8.css'  // get_stylesheet_directory_uri returns path to your theme folder
	      );
	      return $skins;
	}
	
	// Add Widgets
	function fig8_widgets_init() {

		register_sidebar( array(
			'name'          => 'Personnel',
			'id'            => 'personnel',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );
	
	}
	add_action( 'widgets_init', 'fig8_widgets_init' );