<?php
/**
 * Template Register Custom Taxonomy
 *
 * @see https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function function_prefix_register_taxonomy() {
	$args = array(
		// Because of the many possibilities use wp-taxonomy-args to display arguments snippets
		'label'                 => _x( 'Plural Name', 'Context Plural Name', 'text_domain' ),
		'labels'                => array(
			'name'                       => _x( 'Plural Name', 'Context Plural Name', 'text_domain' ),
			'singular_name'              => _x( 'Singular Name', 'Context Singular Name', 'text_domain' ),
			'menu_name'                  => _x( 'Plural Name', 'Context Menu Name', 'text_domain' ),
			'all_items'                  => __( 'All Plural Name', 'text_domain' ),
			'edit_item'                  => __( 'Edit Singular Name', 'text_domain' ),
			'view_item'                  => __( 'View Singular Name', 'text_domain' ),
			'update_item'                => __( 'Update Singular Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New Singular Name', 'text_domain' ),
			'new_item_name'              => __( 'New Singular Name Name', 'text_domain' ),
			'parent_item'                => __( 'Parent Singular Name', 'text_domain' ),
			'parent_item_colon'          => __( 'Parent Singular Name:', 'text_domain' ),
			'search_items'               => __( 'Search Singular Name', 'text_domain' ),
			'popular_items'              => __( 'Popular Singular Name', 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate plural name with commas', 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove plural name', 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used plural name', 'text_domain' ),
			'not_found'                  => __( 'Not plural name found', 'text_domain' ),
		),
		'public'                => true,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'show_tagcloud'         => true,
		'show_in_quick_edit'    => true,
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'hierarchical'          => false,
		'update_count_callback' => '',
		'query_var'             => true,
		'rewrite'               => array(
			'slug'         => 'taxonomy',
			'with_front'   => true,
			'hierarchical' => false,
			'ep_mask'      => EP_NONE
		),
		'capabilities'          => array(),
	);

	if ( ! taxonomy_exists( 'taxonomy' ) ) {
		register_taxonomy( 'taxonomy', array( 'post_type_name' ), \$args );
		/**
		 * Optional. Better be safe than sorry when registering custom taxonomies for custom post types.
		 */
		register_taxonomy_for_object_type( 'taxonomy', 'post_type_name' );
	}
}
add_action( 'init', 'function_prefix_register_taxonomy', 10 );