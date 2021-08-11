<?php 
/** 404 Not Found
 *  The template for displaying 404 pages (not found)
 *  Port from https://html5up.net/forty
 *  2021/08/11 https://github.com/alphahamster
 */
get_header(); ?>
	<!-- Main -->
	<div id="main">
		<div class="error" style="text-align: center;">
			<img src="<?php echo get_theme_file_uri() ?>/images/404-Error.png" alt="404 Error">
			<p style="text-align: center;"><?php _e( 'Back to', 'forty' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'forty' ); ?></a> </p>
		</div>	
	</div>
<?php get_footer(); ?>