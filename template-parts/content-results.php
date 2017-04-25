<?php
/**
 * Template part for displaying page content in page-results.php.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-results"); ?>>
	<?php $row_1_image = get_field( "row_1_image" );
	$apply_now_text = get_field("apply_now_text");
	$apply_now_link = get_field("apply_now_link");?>
    <div class="row-1 row-search" <?php if ( $row_1_image ): ?>
        style="background-image: url(<?php echo $row_1_image['url']; ?>);"
	<?php endif; ?>>
		<?php get_template_part( "template-parts/search", "form" ); ?>
    </div><!--.row-1-->
    <div class="row-2">
        <header class="title">
            <h1><?php the_title();?></h1>
        </header>
        <?php   /*
         * Pre get posts for custom search query
         */
        $args = array(
                "post_type"=>"job",
                "posts_per_page"=>10,
                "paged"=>$paged,
            );
        $type     = array();
        $combined = array();
        $where    = array();
        if ( isset( $_GET['type'] ) && !empty($_GET['type'])) {
            $type['taxonomy'] = 'position';
            $type['field']    = 'slug';
            $type['terms']    = $_GET['type'];
            $combined[]       = $type;
        }
        if ( isset( $_GET['where'] ) && !empty($_GET['where']) ) {
            $where['taxonomy'] = 'location';
            $where['field']    = 'slug';
            $where['terms']    = $_GET['where'];
            $combined[]        = $where;
        }
        if ( ! empty( $type ) && ! empty( $where ) ) {
            $combined['relation'] = 'AND';
        }
        if ( ! empty( $combined ) ) {
            $args['tax_query']=$combined;
        }
        ?>
        <?php $query = new WP_Query($args);
        if($query->have_posts()):?>
            <div class="results">
                <?php while($query->have_posts()):$query->the_post();?>
                    <?php $positions = get_the_terms(get_the_ID(),'position');
	                $locations = get_the_terms(get_the_ID(),'location');
	                $position = null;
	                $location = null;
	                if(!is_wp_error($positions)&&is_array($positions)&&!empty($positions)):
		                $position = $positions[0];
	                endif;
	                if(!is_wp_error($locations)&&is_array($locations)&&!empty($locations)):
		                $location = $locations[0];
	                endif;
                    $shift = get_field("shift");
                    $description = get_field("description");
                    $pay = get_field("pay");
                    $benefits = get_field("benefits");?>
                    <div class="result">
                        <div class="row-1 clear-bottom">
                            <?php if($position):?>
                                <div class="col-1">
                                    <?php echo $position->name;?>
                                </div><!--.col-1-->
                            <?php endif;
                            if($location):?>
                                <div class="col-2">
                                    <?php echo $location->name;?>
                                </div><!--.col-2-->
                            <?php endif;?>
                        </div><!--.row-1-->
                        <div class="row-2 clear-bottom">
                            <div class="col-1">
	                            <?php if($shift):?>
                                    <div class="shift">
			                            <?php echo $shift;?>
                                    </div>
	                            <?php endif;?>
	                            <?php if($pay):?>
                                    <div class="pay">
			                            <?php echo $pay;?>
                                    </div>
	                            <?php endif;?>
	                            <?php if($benefits):?>
                                    <div class="benefits">
			                            <?php echo $benefits;?>
                                    </div>
	                            <?php endif;?>
                            </div><!--.col-1-->
                            <div class="col-2 copy">
                                <?php if($description):?>
                                    <?php echo $description;?>
                                <?php endif;?>
                            </div><!--.col-2-->
                        </div><!--.row-2-->
                        <div class="row-3">
                            <?php if($apply_now_link&&$apply_now_text):?>
                                <a href="<?php echo $apply_now_link;?>">
                                    <?php echo $apply_now_text;?>
                                </a>
                            <?php endif;?>
                        </div><!--.row-3-->
                    </div><!--.result-->
                <?php endwhile;?>
            </div><!--.results-->
        <?php else:
            $no_results_message = get_field("no_results_message");
            if($no_results_message):?>
                <div class="copy">
                    <?php echo $no_results_message;?>
                </div>
            <?php endif;
        endif;?>
    </div><!--.row-2-->
</article><!-- #post-## -->
