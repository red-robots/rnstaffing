<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Job', 'post type general name'),
    'singular_name' => _x('Job', 'post type singular name'),
    'add_new' => _x('Add New', 'Job'),
    'add_new_item' => __('Add New Job'),
    'edit_item' => __('Edit Job'),
    'new_item' => __('New Job'),
    'view_item' => __('View Job'),
    'search_items' => __('Search Jobs'),
    'not_found' =>  __('No Jobs found'),
    'not_found_in_trash' => __('No Jobs found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Jobs'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('job',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type

/*##############################################
Custom Taxonomies     */
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
// custom tax
	register_taxonomy( 'position', 'job',
		array(
			'hierarchical' => true, // true = acts like categories false = acts like tags
			'label' => 'Position',
			'query_var' => true,
			'show_admin_column' => true,
			'public' => true,
			'rewrite' => array( 'slug' => 'position' ),
			'_builtin' => true
		) );

	register_taxonomy( 'location', 'job',
		array(
			'hierarchical' => true, // true = acts like categories false = acts like tags
			'label' => 'Location',
			'query_var' => true,
			'show_admin_column' => true,
			'public' => true,
			'rewrite' => array( 'slug' => 'location' ),
			'_builtin' => true
		) );

} // End build taxonomies