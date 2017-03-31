<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
            <div class="row-1">
                <div class="col-1">
                    <!--.phone-->
                </div><!--.col-1-->
                <div class="col-2">
                    <!--social-->
                </div><!--.col-2-->
            </div><!--.row-1-->
            <div class="row-2">
                <?php if(is_home()) { ?>
                    <h1 class="logo">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png"; ?>" alt="logo"></a>
                    </h1>
                <?php } else { ?>
                    <div class="logo">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png"; ?>" alt="logo"></a>
                    </div>
                <?php } ?>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
            </div><!--.row-2-->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
