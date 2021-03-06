<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-sitemap"); ?>>
	<?php $row_1_image = get_field( "row_1_image" );?>
    <div class="row-1 row-search" <?php if ( $row_1_image ): ?>
        style="background-image: url(<?php echo $row_1_image['url']; ?>);"
	<?php endif; ?>>
		<?php get_template_part( "template-parts/search", "form" ); ?>
    </div><!--.row-1-->
    <div class="row-2">
        <header>
            <h1><?php the_title();?></h1>
        </header>
        <div class="copy">
            <?php the_content();?>
            <?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
        </div><!--.copy-->
    </div><!--.row-2-->
</article><!-- #post-## -->
