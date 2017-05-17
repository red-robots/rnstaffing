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
                <?php if(is_home()) { ?>
                    <h1 class="logo col-1">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo-w.png"; ?>" alt="logo"></a>
                    </h1>
                <?php } else { ?>
                    <div class="logo col-1">
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo-w.png"; ?>" alt="logo"></a>
                    </div>
                <?php } ?>
                <nav id="site-navigation" class="main-navigation col-2" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
                <?php $phone = get_field("phone_number","option");
                if($phone):?>
                    <div class="col-3">
                        <?php echo $phone;?>
                    </div><!--.col-1-->
                <?php endif;?>
            </div><!--.row-1-->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
