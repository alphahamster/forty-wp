<?php
/**
 * The header for page.php
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
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
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