<?php
	
/*-----------------------------*/
/* Theme Bootstrapping 
 * Port from https://html5up.net/forty
 * 2021/08/11 https://github.com/alphahamster
 */
/*-----------------------------*/
if ( !function_exists('forty_theme_setup') ) {

	function forty_theme_setup() {

		/* REGISTER TEXT DOMAIN FOR TRANSLATION */
		load_theme_textdomain('forty');

		/* GETTING RSS FEED LINKS */
		add_theme_support( 'automatic-feed-links' );

		/* GETTING TITLE TAG */
		add_theme_support('title-tag');

		/* GETTING POST THUMBNAIL */
		add_theme_support('post-thumbnails');

		// add_theme_support('custom-header');

		/* GETTING BACKGROUND OPTIONS */
		add_theme_support('custom-background');

		/* add custom logo */
		add_theme_support( 'custom-logo');

		/* GETTING POST FORMATS */ 
		add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );

		/*
	     * Switch default core markup for search form, comment form, and comments
	     * to output valid HTML5.
	     */
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); // 

		/* REGISTER NAV MENU */
		register_nav_menu( 'mainmenu', __( 'Main Menu', 'forty' ) );

		if ( ! isset( $content_width ) ) $content_width = 900;
	}
	add_action('after_setup_theme', 'forty_theme_setup');
}

/*-----------------------------*/
/* Sidebar register */
/*-----------------------------*/
function forty_register_sidebar() {
	$args = array(
		'id'			=> 'footer_sidebar_left',
		'name'			=> __( 'Footer Left Sidebar', 'forty' ),
		'description'	=> __( 'Set your footer widgets from widgets area.', 'forty' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_section'	=> '</div>'
	);
	register_sidebar($args);

	$args1 = array(
		'id'			=> 'footer_sidebar_right',
		'name'			=> __( 'Footer Right Sidebar', 'forty' ),
		'description'	=> __( 'Set your footer widgets from widgets area.', 'forty' ),
		'before_widget'	=> '<section id="%1$s" class="split">',
		'after_section'	=> '</section>',
		'before_title'  => '<span id="%1$s" class="widget %2$s"><h3>',
        'after_title'   => '</h3></span>'
	);
	register_sidebar($args1);
}
add_action( 'widgets_init', 'forty_register_sidebar' );

/*-----------------------------*/
/* Include theme assets */
/*-----------------------------*/
function forty_theme_assets() {

	$var = '1.0.0';

	/* CSS */
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css'), null, $var );
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Merriweather:300,700,300italic,700italic|Source+Sans+Pro:900', null, $var );
	wp_enqueue_style( 'main-css', get_theme_file_uri('/assets/css/main.css'), null, $var );
	wp_enqueue_style( 'noscript-css', get_theme_file_uri('/assets/css/noscript.css'), null, $var );
	wp_enqueue_style( 'theme-css', get_stylesheet_uri(), '', $var );

	/* JavaScripts */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scrollex-js', get_theme_file_uri('/assets/js/jquery.scrollex.min.js'), null, $var );
	wp_enqueue_script( 'scrolly-js', get_theme_file_uri('/assets/js/jquery.scrolly.min.js'), null, $var );
	wp_enqueue_script( 'browser-js', get_theme_file_uri('/assets/js/browser.min.js'), null, $var );
	wp_enqueue_script( 'breakpoints-js', get_theme_file_uri('/assets/js/breakpoints.min.js'), null, $var );
	wp_enqueue_script( 'util-js', get_theme_file_uri('/assets/js/util.js'), null, $var );
	wp_enqueue_script( 'main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), $var, true );
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.js'), array('jquery'), $var, true );

	if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        // Load comment-reply.js (into footer)
        wp_enqueue_script( 'comment-reply', 'wp-includes/js/comment-reply', array(), false, true );
    }
}
add_action('wp_enqueue_scripts', 'forty_theme_assets');

/*-----------------------------*/
/* REQUIRED FILES */
/*-----------------------------*/
require_once('inc/custom-widgets.php');
require_once('inc/customizer.php');
require_once( get_theme_file_path( '/inc/tgm.php' ) );
require_once( get_theme_file_path( '/inc/acf-metabox.php' ) );

/* HIDE ACF UI MENU */
add_filter('acf/settings/show_admin', '__return_false');

/*-----------------------------*/
/* CUSTOM STYLES ADD */
/*-----------------------------*/

function forty_custom_css_styles() {
	?>
	<style>
		<?php if ( !empty( get_background_image() ) ) : ?>
			.bg{
				background-image: url("<?php echo esc_url( get_theme_file_path( '/images/banner.jpg' ) ); ?>"), linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url( <?php echo get_background_image(); ?> ) !important;
			}
		<?php endif; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'forty_custom_css_styles' );

/** Added for piping different header styles to each blogpost */
/** * Add new colorpicker field to "Add new Category" screen 
* -https://developer.wordpress.org/reference/hooks/taxonomy_add_form_fields/ * * @param String $taxonomy 
* * @return void 
*/ 
function colorpicker_field_add_new_category( $taxonomy ) { ?> 
	<div class="form-field term-colorpicker-wrap"> 
	<label for="term-colorpicker">Category Color</label> 
	<input name="_category_color" value="#ffffff" class="colorpicker" id="term-colorpicker" /> 
	<p>This is the field description where you can tell the user how the color is used in the theme.</p> 
	</div> <?php } 
	add_action( 'category_add_form_fields', 'colorpicker_field_add_new_category' ); // Variable Hook Name

/** 
* Add new colopicker field to "Edit Category" screen 
* -https://developer.wordpress.org/reference/hooks/taxonomy_add_form_fields/ * * @param WP_Term_Object $term 
* * @return void 
*/ 
function colorpicker_field_edit_category( $term ) { 
	$color = get_term_meta( $term->term_id, '_category_color', true ); 
	$color = ( ! empty( $color ) ) ? "#{$color}" : '#ffffff'; ?> 
	<tr class="form-field term-colorpicker-wrap"> 
	<th scope="row">
	<label for="term-colorpicker">Select Color</label>
	</th> 
	<td> 
	<input name="_category_color" value="<?php echo $color; ?>" class="colorpicker" id="term-colorpicker" /> 
	<p class="description">This is the field description where you can tell the user how the color is used in the theme.</p> 
	</td> 
	</tr> <?php } 
	add_action( 'category_edit_form_fields', 'colorpicker_field_edit_category' ); // Variable Hook Name

	/** 
	* Term Metadata - Save Created and Edited Term Metadata 
	* - https://developer.wordpress.org/reference/hooks/created_taxonomy/ 
	* - https://developer.wordpress.org/reference/hooks/edited_taxonomy/ 
	* * @param Integer $term_id 
	* * @return void 
	*/ 
	function save_termmeta( $term_id ) { 
		// Save term color if possible 
		if( isset( $_POST['_category_color'] ) && ! empty( $_POST['_category_color'] ) ) { 
			update_term_meta( $term_id, '_category_color', sanitize_hex_color_no_hash( $_POST['_category_color'] ) ); 
		} else { 
			delete_term_meta( $term_id, '_category_color' ); 
		}
	} 
	add_action( 'created_category', 'save_termmeta' ); // Variable Hook Name add_action( 'edited_category', 'save_termmeta' ); // Variable Hook Name

	/* enqueue wp-color-picker
	*/ 
	function category_colorpicker_enqueue( $taxonomy ) { 
		if( null !== ( $screen = get_current_screen() ) && 'edit-category' !== $screen->id ) { 
		return; 
		} 
		// Colorpicker Scripts 
		wp_enqueue_script( 'wp-color-picker' ); 
		// Colorpicker Styles 
		wp_enqueue_style( 'wp-color-picker' ); } 
	add_action( 'admin_enqueue_scripts', 'category_colorpicker_enqueue' );

	/** 
	* Print javascript to initialize the colorpicker 
	* - https://developer.wordpress.org/reference/hooks/admin_print_scripts/ 
	* * @return void 
	*/ 
	function colorpicker_init_inline() { 
		if( null !== ( $screen = get_current_screen() ) && 'edit-category' !== $screen->id ) { 
		return; 
		} ?> 
		<script> 
		jQuery( document ).ready( function( $ ) {
		$( '.colorpicker' ).wpColorPicker(); 
		} ); 
		// End Document Ready JQuery 
		</script> 
		<?php } add_action( 'admin_print_scripts', 'colorpicker_init_inline', 20 );

	/** Added for piping different header styles to each blogpost */
	// add post category slug to body class in wordpress
	function wcs_add_category_slug_body_class( $classes ) {
		global $post;
		if ( is_single() ) {
			foreach ( get_the_category( $post->ID ) as $category ) {
				$classes[] = $category->category_nicename;
			}
		}
		return $classes;
	}
	add_filter( 'body_class', 'wcs_add_category_slug_body_class' );

	add_filter('term_links-post_tag','limit_to_five_tags');
	function limit_to_five_tags($terms) {
		return array_slice($terms,0,5,true);
	}

	/**
	 * @param array $sizes    An associative array of image sizes.
	 * @param array $metadata An associative array of image metadata: width, height, file.
	 */
	function remove_image_sizes( $sizes, $metadata ) {
		return [];
	}
	add_filter( 'intermediate_image_sizes_advanced', 'remove_image_sizes', 10, 2 );