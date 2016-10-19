<?php


// Register Custom Post Type
function nyle_hair() {
	$labels = array(
		'name'                  => _x( 'Hair Needs', 'Post Type General Name', 'nyle' ),
		'singular_name'         => _x( 'Hair Need', 'Post Type Singular Name', 'nyle' ),
		'menu_name'             => __( 'Hair Need', 'nyle' ),
		'name_admin_bar'        => __( 'Hair Need', 'nyle' ),
		'archives'              => __( 'Hair Need Archives', 'nyle' ),
		'parent_item_colon'     => __( 'Parent Hair Need:', 'nyle' ),
		'all_items'             => __( 'All Hair Need', 'nyle' ),
		'add_new_item'          => __( 'Add New Hair Need', 'nyle' ),
		'add_new'               => __( 'Add New Hair Need', 'nyle' ),
		'new_item'              => __( 'New Hair Need', 'nyle' ),
		'edit_item'             => __( 'Edit Hair Need', 'nyle' ),
		'update_item'           => __( 'Update Hair Need', 'nyle' ),
		'view_item'             => __( 'View Hair Need', 'nyle' ),
		'search_items'          => __( 'Search Hair Need', 'nyle' ),
		'not_found'             => __( 'Not found', 'nyle' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nyle' ),
		'featured_image'        => __( 'Featured Image', 'nyle' ),
		'set_featured_image'    => __( 'Set featured image', 'nyle' ),
		'remove_featured_image' => __( 'Remove featured image', 'nyle' ),
		'use_featured_image'    => __( 'Use as featured image', 'nyle' ),
		'insert_into_item'      => __( 'Insert into Hair Need', 'nyle' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Hair Need', 'nyle' ),
		'items_list'            => __( 'Hair Need list', 'nyle' ),
		'items_list_navigation' => __( 'Hair Need list navigation', 'nyle' ),
		'filter_items_list'     => __( 'Filter Hair Need list', 'nyle' ),
	);
 $rewrite = array(
		'slug'                  => 'hairneeds',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Hair Need', 'nyle' ),
		'description'           => __( 'List of hair needs', 'nyle' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
  'rewrite'               => $rewrite,
  'capability_type'       => 'post',
	);
 register_post_type( 'hairneeds', $args );

  //test
add_action( 'init', 'hair_needstype' );
function hair_needstype() {
	register_taxonomy(
		'hairneeds',
		'hairneeds',
		array(
   'label'                 => __( 'Hair Need', 'nyle' ),
			'rewrite' => array( 'slug' => 'hair-needs' ),
			'hierarchical' => true,
		)
	);
}
	// url re-wright for getting template file
		flush_rewrite_rules( true );
	//test


}
add_action( 'init', 'nyle_hair', 0 );


//slider
// Register Custom Post Type
function nyle_slider() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'nyle' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'nyle' ),
		'menu_name'             => __( 'Slider', 'nyle' ),
		'name_admin_bar'        => __( 'Slider', 'nyle' ),
		'archives'              => __( 'Slider Archives', 'nyle' ),
		'parent_item_colon'     => __( 'Parent Slider:', 'nyle' ),
		'all_items'             => __( 'All Sliders', 'nyle' ),
		'add_new_item'          => __( 'Add New Slider', 'nyle' ),
		'add_new'               => __( 'Add New Slider', 'nyle' ),
		'new_item'              => __( 'New Hair Slider', 'nyle' ),
		'edit_item'             => __( 'Edit Hair Slider', 'nyle' ),
		'update_item'           => __( 'Update Slider', 'nyle' ),
		'view_item'             => __( 'View Slider', 'nyle' ),
		'search_items'          => __( 'Search Slider', 'nyle' ),
		'not_found'             => __( 'Not found', 'nyle' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nyle' ),
		'featured_image'        => __( 'Featured Image', 'nyle' ),
		'set_featured_image'    => __( 'Set featured image', 'nyle' ),
		'remove_featured_image' => __( 'Remove featured image', 'nyle' ),
		'use_featured_image'    => __( 'Use as featured image', 'nyle' ),
		'insert_into_item'      => __( 'Insert into Slider', 'nyle' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'nyle' ),
		'items_list'            => __( 'Slider list', 'nyle' ),
		'items_list_navigation' => __( 'Slider list navigation', 'nyle' ),
		'filter_items_list'     => __( 'Filter Slider list', 'nyle' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'nyle' ),
		'description'           => __( 'Home page slider', 'nyle' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'home_slider', $args );

}
add_action( 'init', 'nyle_slider', 0 );

// Register Custom Taxonomy
function nyle_producttype() {
//test
add_action( 'init', 'hair_producttype' );
function hair_producttype() {
register_taxonomy(
'type',
'product',
array(
	'label'                 => __( 'Type', 'nyle' ),
	'hierarchical' => true,
)
);
}
}
add_action( 'init', 'nyle_producttype', 0 );



 ?>
