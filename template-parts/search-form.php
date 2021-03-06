<?php
/**
 * Created by PhpStorm.
 * User: fritz
 * Date: 3/30/17
 * Time: 3:30 PM
 */
$post = get_post(7);
if($post) setup_postdata($post);
$location_args = array(
	'taxonomy'      => 'location',
	'hide_empty'=>0,
    'orderby'=>'name',
    'order'=>'ASC'
);
$location_terms  = get_terms( $location_args );
$position_args = array(
	'taxonomy'      => 'position',
	'hide_empty'=>0,
    'orderby'=>'name',
    'order'=>'ASC'
);
$position_terms  = get_terms( $position_args );
	?>
<div class="search-form clear-bottom">
	<form role="search" action="<?php echo get_the_permalink(); ?>" method="get" id="searchform" autocomplete="off">
        <div class="wrapper">
            <input type="text" name="type-holder" placeholder="Type?" value="" class="search-input">
            <input type="hidden" name="type" value="" class="search-input-hidden">
            <?php if(!is_wp_error($position_terms)&&is_array($position_terms)&&!empty($position_terms)):?>
                <div class="selector">
                    <?php foreach($position_terms as $term):?>
                        <div style="display: none;" class="option value;<?php echo $term->slug;?>"><?php echo $term->name;?></div>
                    <?php endforeach;?>
                </div><!--.selector-->
            <?php endif;?>
        </div><!--.wrapper-->
        <div class="wrapper">
            <input type="text" name="where-holder" placeholder="Where?" value="" class="search-input">
            <input type="hidden" name="where" value="" class="search-input-hidden">
            <?php if(!is_wp_error($location_terms)&&is_array($location_terms)&&!empty($location_terms)):?>
                <div class="selector">
                    <?php foreach($location_terms as $term):?>
                        <div style="display: none;" class="option value;<?php echo $term->slug;?>"><?php echo $term->name;?></div>
                    <?php endforeach;?>
                </div><!--.selector-->
            <?php endif;?>
        </div>
		<div class="submit" onclick="return document.getElementById('searchform').submit();">
            Search Jobs <i class="fa fa-long-arrow-right"></i>
        </div>
	</form>
</div><!--.search-form-->
<?php wp_reset_postdata();?>
