<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
			<?php $facebook = get_field("facebook_link","option");
			$instagram = get_field("instagram_link","option");
			$twitter = get_field("twitter_link","option");
			if($twitter||$instagram||$facebook):?>
                <div class="row-1">
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
                </div><!--.row-1-->
			<?php endif;?>
            <div class="row-2">
	            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu') ); ?>
            </div><!--.row-2-->
            <?php $copy = get_field("footer_copy","option");
            if($copy):?>
                <div class="row-3">
                    <?php echo $copy;?>
                </div><!--.row-3-->
            <?php endif;?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
