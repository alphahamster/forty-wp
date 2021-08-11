<?php get_header('single'); ?>
    <div id="main" <?php post_class(); ?>>
        <section id="two" class="spotlights" <?php post_class(); ?>>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else : ?>
            	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
       </section>
    </div>
<?php get_footer(); ?>