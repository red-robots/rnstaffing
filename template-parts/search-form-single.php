<?php $post = get_post( 13 );
setup_postdata( $post );
$row_1_search_text = get_field("row_1_search_text");
wp_reset_postdata();?>
<form role="search" action="<?php echo esc_url( home_url( '/' ) );?>" method="get" id="searchformsingle" autocomplete="off">
    <label>
        <span class="screen-reader-text" aria-hidden="true">' . _x( 'Search for:', 'label' ) . '</span>
        <input type="search" class="search-field" placeholder="<?php if($row_1_search_text) echo $row_1_search_text;?>" value="" name="s" />
    </label>
</form>
