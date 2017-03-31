<?php
/**
 * Created by PhpStorm.
 * User: fritz
 * Date: 3/30/17
 * Time: 3:30 PM
 */
$post = get_post(5);
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
	<form role="search" action="<?php echo get_the_permalink(); ?>" method="get" id="searchform">
		<?php if(!is_wp_error($position_terms)&&is_array($position_terms)&&!empty($position_terms)):?>
            <div class="wrapper">
                <input type="text" name="type-holder" value="" class="search-input">
                <input type="hidden" name="type" value="" class="search-input-hidden">
                <div class="selector">
                    <?php foreach($position_terms as $term):?>
                        <div style="display: none;" class="option value-<?php echo $term->slug;?>"><?php echo $term->name;?></div>
                    <?php endforeach;?>
                </div><!--.selector-->
            </div><!--.wrapper-->
		<?php endif;?>
		<?php if(!is_wp_error($location_terms)&&is_array($location_terms)&&!empty($location_terms)):?>
            <div class="wrapper">
                <input type="text" name="where-holder" value="" class="search-input">
                <input type="hidden" name="where" value="" class="search-input-hidden">
                <div class="selector">
                    <?php foreach($location_terms as $term):?>
                        <div style="display: none;" class="option value-<?php echo $term->slug;?>"><?php echo $term->name;?></div>
                    <?php endforeach;?>
                </div><!--.selector-->
            </div>
		<?php endif;?>
		<input type="submit" alt="Search" value="Search Jobs" />
	</form>
</div><!--.search-form-->
<?php wp_reset_postdata();?>
