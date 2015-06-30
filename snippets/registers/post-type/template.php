<?php
/**
 * Template Custom Post Type
 * Complete List of arguments
 *
 * @see https://codex.wordpress.org/Function_Reference/register_post_type
 */
function function_prefix_register_post_type() {

	$args = array(
		// Because of the many possibilities use wp-post-type-args to display arguments snippets
		'label'                => _x( 'Plural Name', 'Context Plural Name', 'text_domain' ),
		'labels'               => array(
			'name'               => _x( 'Plural Name', 'Context Plural Name', 'text_domain' ),
			'singular_name'      => _x( 'Singular Name', 'Context Singular Name', 'text_domain' ),
			'menu_name'          => _x( 'Plural Name', 'Context Menu Name', 'text_domain' ),
			'name_admin_bar'     => _x( 'Plural Name', 'Context Admin Bar Name', 'text_domain' ),
			'add_new'            => _x( 'Add New', 'Context Add New', 'text_domain' ),
			'add_new_item'       => __( 'Add New Singular Name', 'text_domain' ),
			'new_item'           => __( 'New Singular Name', 'text_domain' ),
			'edit_item'          => __( 'Edit Singular Name', 'text_domain' ),
			'view_item'          => __( 'View Singular Name', 'text_domain' ),
			'all_items'          => __( 'All Plural Name', 'text_domain' ),
			'search_items'       => __( 'Search Singular Name', 'text_domain' ),
			'not_found'          => __( 'Not plural name found', 'text_domain' ),
			'not_found_in_trash' => __( 'Not plural name found in Trash', 'text_domain' ),
			'parent_item_colon'  => __( 'Parent Singular Name:', 'text_domain' ),
		),
		'description'          => __( 'Post Type Description', 'text_domain' ),
		'public'               => true,
		'exclude_from_search'  => false,
		'publicly_queryable'   => true,
		'show_ui'              => true,
		'show_in_nav_menus'    => true,
		'show_in_menu'         => true,
		'show_in_admin_bar'    => true,
		'menu_position'        => 5,
		'menu_icon'            => 'dashicons-admin-post',
		'capability_type'      => 'post',
		'capabilities'         => array(),
		'map_meta_cap'         => null,
		'hierarchical'         => false,
		'supports'             => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'register_meta_box_cb' => '',
		'taxonomies'           => array( 'category', 'post_tag' ),
		'has_archive'          => true,
		'permalink_epmask'     => EP_PERMALINK,
		'rewrite'              => array(
			'slug'       => 'post_type',
			'with_front' => true,
			'feeds'      => true,
			'pages'      => true,
			'ep_mask'    => EP_PERMALINK
		),
		'query_var'            => true,
		'can_export'           => true,
	);

	if ( ! post_type_exists( 'post_type' ) ) {
		register_post_type( 'post_type', $args );
	}
}
add_action( 'init', 'function_prefix_register_post_type', 10 );