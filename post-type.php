<?php
// Register Custom Post Type
function test_posts() {
  $labels = array(
		'name'                => _x( 'Test', 'Post Type General Name', 'pradesga' ),
		'singular_name'       => _x( 'Test', 'Post Type Singular Name', 'pradesga' ),
		'menu_name'           => __( 'Test', 'pradesga' ),
		'parent_item_colon'   => __( 'Parent test:', 'pradesga' ),
		'all_items'           => __( 'All Test', 'pradesga' ),
		'view_item'           => __( 'View Test', 'pradesga' ),
		'add_new_item'        => __( 'Add New Test', 'pradesga' ),
		'add_new'             => __( 'New Test', 'pradesga' ),
		'edit_item'           => __( 'Edit Test', 'pradesga' ),
		'update_item'         => __( 'Update Test', 'pradesga' ),
		'search_items'        => __( 'Search Test', 'pradesga' ),
		'not_found'           => __( 'No cases found', 'pradesga' ),
		'not_found_in_trash'  => __( 'No cases found in Trash', 'pradesga' ),
	);

	$args = array(
		'label'               => __( 'test', 'pradesga' ),
		'description'         => __( 'Test Bimbel Information', 'pradesga' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'test',
		'capability_type'     => 'post',
	);

	register_post_type( 'test', $args );
}

// Hook into the 'init' action
add_action( 'init', 'test_posts', 0 );
