<?php
/**
 * The header for single.php
 *
 * This is the template that displays all of the <head> section and everything up until main.
 * Port from https://html5up.net/forty
 * 2021/08/11 https://github.com/alphahamster
 */
?>

<html <?php language_attributes(); ?>>
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
</head>

<body class="is-preload">

<!-- Wrapper -->
    <div id="wrapper" <?php post_class(); ?>>
        <!-- Header -->
        <header id="header" class='alt style2'>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                <?php bloginfo( 'name' ); ?>
                <a href='https://www.your-url.here/'>by alphahamster</a>
            </a>
            <nav>
                <a href="#menu">Menü</a>
            </nav>
        </header>

<!-- Nav -->
    <nav id="menu">
        <?php if( has_nav_menu( 'mainmenu')) {
            wp_nav_menu( array( 
                'theme_location' => '',
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="links">%3$s</ul>' 
            ));
        }
        ?>
        <a class="close" href="#menu">
            Close
        </a>
    </nav>

<!-- Banner -->
        <section id="banner" <?php post_class(); ?> style="background-size:cover">
            <div class="inner">
                <span class="image">
                    <?php if ( has_post_thumbnail() ) :
				        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			            <img src="<?php echo $featured_image[0]; ?>" alt='' />
			        <?php endif; ?>
                </span>
                <header class="major">
                    <h1><?php the_title(); ?></h1>
                </header>
                <div class="content">
                    <p>
                        <?php
                            // $search_text = the_excerpt();
                            $search_text = get_the_excerpt();
                            // Strip the <p> tag by replacing it empty string
                            $tags = array("<p>", "</p>");
                            $search_content = str_replace($tags, "", $search_text);
                            // Echo the content
                            echo $search_content;
                        ?>
                    </p>
                </div>
            </div>
        </section>