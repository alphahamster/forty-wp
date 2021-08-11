<?php get_header('page'); ?>
        <div id="main" class="alt">
            <section id="one" class=<?php post_class(); ?>>
                <div class="inner">
                    <header class="major">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </header>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </section>
        </div>
<?php get_footer('page'); ?>