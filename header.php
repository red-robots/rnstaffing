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
                <?php $phone = get_field("phone_number","option");
                if($phone):?>
                    <div class="col-1">
                        <?php echo $phone;?>
                    </div><!--.col-1-->
                <?php endif;?>
                <?php $facebook = get_field("facebook_link","option");
                $instagram = get_field("instagram_link","option");
                $twitter = get_field("twitter_link","option");
                if($twitter||$instagram||$facebook):?>
                    <div class="col-2">
	                    <?php if($facebook):?>
                            <a href="<?php echo $facebook;?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
	                    <?php endif;?>
	                    <?php if($instagram):?>
                            <a href="<?php echo $instagram;?>" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
	                    <?php endif;?>
	                    <?php if($twitter):?>
                            <a href="<?php echo $twitter;?>" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
	                    <?php endif;?>
                    </div><!--.col-2-->
                <?php endif;?>
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
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'acstarter' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
            </div><!--.row-2-->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
