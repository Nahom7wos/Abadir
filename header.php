<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abadir
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abadir' ); ?></a>

        <nav id="masthead" class="navbar navbar-expand-md navbar-dark bg-info col site-header ">

            <div class="container">
                <div class="site-branding">
                    <?php
					the_custom_logo();
					?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"
                        rel="home"><?php bloginfo( 'name' ); ?></a>
                </div><!-- .site-branding -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div id="site-navigation" class="main-navigation"> -->
                <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'abadir' ); ?></button> -->
                <?php
                wp_nav_menu(
                array(
                'menu' => 'menu-1',
                'theme_location' => 'menu-1',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                 'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </nav><!-- #masthead -->