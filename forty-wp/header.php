<?php
/**
 * The header.
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

    <div id="wrapper">
        <header id="header" class='alt'>
            <?php the_custom_logo(); ?>
            <nav>
                <a href="#menu">Menü</a>
            </nav>
        </header>

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
        <section id="banner" class="major" style="background-image:url(<?php background_image(); ?>)">
            <div class="inner">
                <header class="major">
                    <h1>Von Profis für Profis</h1>
                </header>
                <div class="content">
                    <p><?php echo get_bloginfo(); ?><br />
                    <?php echo get_bloginfo('description'); ?></p>
                    <ul class="actions">
                        <li><a href="#one" class="button next scrolly">Los geht's</a></li>
                    </ul>
                </div>
            </div>
        </section>