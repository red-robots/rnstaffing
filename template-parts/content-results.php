<?php
/**
 * Template part for displaying page content in page-results.php.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-results"); ?>>
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
    if ( isset( $_GET['type'] ) ) {
        $type['taxonomy'] = 'position';
        $type['field']    = 'slug';
        $type['terms']    = $_GET['type'];
        $combined[]       = $type;
    }
    if ( isset( $_GET['where'] ) ) {
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
        <?php while($query->have_posts()):$query->the_post();?>
            <?php the_title();?>
        <?php endwhile;?>
    <?php endif;?>
</article><!-- #post-## -->
