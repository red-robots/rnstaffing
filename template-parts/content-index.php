<?php
/**
 * Template part for displaying page content in index.php.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( "template-index" ); ?>>
	<?php $post = get_post( 13 );
	setup_postdata( $post );
	$row_1_video = get_field( "row_1_video" );
	$banner_text = get_field("banner_text");?>
	<?php wp_reset_postdata(); ?>
    <div class="row-1">
        <?php if($row_1_video):?>
            <div class="video-wrapper">
                <video autoplay muted loop>
                    <source src="<?php echo $row_1_video['url'];?>" type="video/mp4">
                    Your browser doesn't support html5 video
                </video>
            </div><!--.video-wrapper-->
        <?php endif;?>
        <div class="banner-text">
            <?php echo $banner_text;?>
        </div>
		<?php get_template_part( "template-parts/search", "form-single" ); ?>
        <div class="down-icon">
            <i class="fa fa-chevron-circle-down"></i>
        </div><!--.down-icon-->
    </div><!--.row-1-->
	<?php $post = get_post( 13 );
	setup_postdata( $post ); ?>
    <div class="row-2">
		<?php $row_2_column_1_copy = get_field( "row_2_column_1_copy" );
		$row_2_column_1_link       = get_field( "row_2_column_1_link" );
		$row_2_column_2_copy       = get_field( "row_2_column_2_copy" );
		$row_2_column_2_link       = get_field( "row_2_column_2_link" );
		$row_2_column_3_copy       = get_field( "row_2_column_3_copy" );
		$row_2_column_3_link       = get_field( "row_2_column_3_link" ); ?>
        <div class="col-1">
			<?php if ( $row_2_column_1_link ): ?>
            <a href="<?php echo $row_2_column_1_link; ?>">
				<?php endif; ?>
                <div class="wrapper">
                    <div class="circle"><i class="fa fa-user-md"></i></div><!--.circle-->
					<?php if ( $row_2_column_1_copy ): ?>
                        <div class="copy"><?php echo $row_2_column_1_copy; ?></div><!--.copy-->
					<?php endif; ?>
                </div><!--.wrapper-->
				<?php if ( $row_2_column_3_link ): ?>
            </a>
		<?php endif; ?>
        </div><!--.col-1-->
        <div class="col-2">
			<?php if ( $row_2_column_2_link ): ?>
            <a href="<?php echo $row_2_column_2_link; ?>">
				<?php endif; ?>
                <div class="wrapper">
                    <div class="circle"><i class="fa fa-thumbs-o-up"></i></div><!--.circle-->
					<?php if ( $row_2_column_2_copy ): ?>
                        <div class="copy"><?php echo $row_2_column_2_copy; ?></div><!--.copy-->
					<?php endif; ?>
                </div><!--.wrapper-->
				<?php if ( $row_2_column_3_link ): ?>
            </a>
		<?php endif; ?>
        </div><!--.col-2-->
        <div class="col-3">
			<?php if ( $row_2_column_3_link ): ?>
            <a href="<?php echo $row_2_column_3_link; ?>">
				<?php endif; ?>
                <div class="wrapper">
                    <div class="circle"><i class="fa fa-heart-o"></i></div><!--.circle-->
					<?php if ( $row_2_column_3_copy ): ?>
                        <div class="copy"><?php echo $row_2_column_3_copy; ?></div><!--.copy-->
					<?php endif; ?>
                </div><!--.wrapper-->
				<?php if ( $row_2_column_3_link ): ?>
            </a>
		<?php endif; ?>
        </div><!--.col-3-->
    </div><!--.row-2-->
    <div class="row-3">
		<?php $row_3_column_2_title = get_field( "row_3_column_2_title" );
		$row_3_column_2_copy        = get_field( "row_3_column_2_copy" );
		$row_3_column_1_image       = get_field( "row_3_column_1_image" );
		$row_3_column_2_link        = get_field( "row_3_column_2_link" );
		$row_3_column_2_link_text   = get_field( "row_3_column_2_link_text" ); ?>
        <div class="col-1" <?php if ( $row_3_column_1_image ): ?>
            style="background-image: url(<?php echo $row_3_column_1_image['url']; ?>);"
		<?php endif; ?>>
            <div class="wrapper"></div><!--.wrapper-->
        </div><!--.col-1-->
        <div class="col-2">
            <div class="wrapper">
                <div class="wrapper">
					<?php if ( $row_3_column_2_title ): ?>
                        <h2><?php echo $row_3_column_2_title; ?></h2>
                        <div class="spacer"></div>
					<?php endif; ?>
					<?php if ( $row_3_column_2_copy ): ?>
                        <div class="copy">
							<?php echo $row_3_column_2_copy; ?>
                        </div><!--.copy-->
					<?php endif; ?>
                </div><!--.wrapper-->
				<?php if ( $row_3_column_2_link && $row_3_column_2_link_text ): ?>
                    <div class="link">
                        <a href="<?php echo $row_3_column_2_link; ?>">
							<?php echo $row_3_column_2_link_text; ?>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div><!--link-->
				<?php endif; ?>
            </div><!--.wrapper-->
        </div><!--.col-2-->
    </div><!--.row-3-->
    <div class="row-4">
		<?php $row_4_title = get_field( "row_4_title" );
		$row_4_copy        = get_field( "row_4_copy" ); ?>
		<?php if ( $row_4_title ): ?>
            <h2><?php echo $row_4_title; ?></h2>
            <div class="spacer"></div><!--.spacer-->
		<?php endif; ?>
		<?php if ( $row_4_copy ): ?>
            <div class="copy">
				<?php echo $row_4_copy; ?>
            </div><!--.copy-->
		<?php endif; ?>
        <div class="email">
            <!--insert email signup here-->
        </div><!--.email-->
    </div><!--.row-4-->
	<?php wp_reset_postdata(); ?>
</article><!-- #post-## -->
