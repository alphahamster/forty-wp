<?php 
/** Archive Page
 * Port from https://html5up.net/forty
 * 2021/08/11 https://github.com/alphahamster
 */
get_header(); ?>
<!-- Main -->
<div id="main">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<!-- Posts -->
	<section class="posts">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();

				get_template_part('template-parts/posts/content', get_post_format() );
				
			endwhile;
	?>
	</section>

	<!-- Footer -->
	<footer>
		<div class="pagination">
		<?php 
			the_posts_pagination( array(
				'screen_reader_text'	=> ' ',
				'prev_text'	=> 'Previous',
				'next_text'	=> 'Next'
			) ); 
		?>
		</div>
	</footer>
	<?php else: ?>
		<h1><?php _e('Hier gehts nicht weiter!', 'forty'); ?></h1>
	<?php endif; ?>
</div>
<?php get_footer(); ?>