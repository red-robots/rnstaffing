<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
                <?php $post = get_post(49);
                setup_postdata($post);
                $row_1_image = get_field( "row_1_image" );
                wp_reset_postdata();?>
                <div class="row-1 row-search" <?php if ( $row_1_image ): ?>
                    style="background-image: url(<?php echo $row_1_image['url']; ?>);"
                <?php endif; ?>>
                    <?php get_template_part( "template-parts/search", "form" ); ?>
                </div><!--.row-1-->
                <div class="row-2">
                    <header>
                        <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
                    </header>
                    <div class="copy">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'acstarter' ); ?></p>
                        <?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
                    </div><!--.copy-->
                </div><!--.row-2-->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
