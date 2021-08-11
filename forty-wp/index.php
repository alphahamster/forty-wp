<?php get_header(); ?>
<!--
 * The header.
 *
 * This is the template that displays main section up until footer.
 * Port from https://html5up.net/forty
 * 2021/08/11 https://github.com/alphahamster
 -->

<!-- Main -->
	<div id="main">
		<section id="one" class="tiles">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', "tiles", get_post_format() ); ?>
				<?php endwhile; ?>
			<?php elseif ( is_search() ) : ?>
		</section>
<!-- 		<div class="post single">
			<div class="post-container">
				<div class="post-inner">
					<div class="post-content">
						<p><?php _e( 'No results. Try again, would you kindly?', 'hitchcock' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div> -->
		<?php endif; ?>
	</div>
<?php get_footer(); ?>