<?php

/**
 * This file registers the Timeline Events custom post type
 *
 * @package    	Sydney_Toolbox
 * @link        http://athemes.com
 * Author:      aThemes
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Register the Timeline Events custom post type
function sydney_toolbox_register_timeline_events() {

	$slug = apply_filters( 'sydney_timeline_events_rewrite_slug', 'timeline-events' );	

	$theme  = wp_get_theme();
	$parent = wp_get_theme()->parent();
	if ( ($theme != 'Sydney Pro' ) && ($parent != 'Sydney Pro') )
	    return;

	$labels = array(
		'name'                  => _x( 'Timeline Events', 'Post Type General Name', 'sydney_toolbox' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'sydney_toolbox' ),
		'menu_name'             => __( 'Timeline Events', 'sydney_toolbox' ),
		'name_admin_bar'        => __( 'Timeline Events', 'sydney_toolbox' ),
		'archives'              => __( 'Item Archives', 'sydney_toolbox' ),
		'parent_item_colon'     => __( 'Parent Item:', 'sydney_toolbox' ),
		'all_items'             => __( 'All Timeline Events', 'sydney_toolbox' ),
		'add_new_item'          => __( 'Add New Event', 'sydney_toolbox' ),
		'add_new'               => __( 'Add New Event', 'sydney_toolbox' ),
		'new_item'              => __( 'New Event', 'sydney_toolbox' ),
		'edit_item'             => __( 'Edit Event', 'sydney_toolbox' ),
		'update_item'           => __( 'Update Event', 'sydney_toolbox' ),
		'view_item'             => __( 'View Event', 'sydney_toolbox' ),
		'search_items'          => __( 'Search Event', 'sydney_toolbox' ),
		'not_found'             => __( 'Not found', 'sydney_toolbox' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sydney_toolbox' ),
		'featured_image'        => __( 'Featured Image', 'sydney_toolbox' ),
		'set_featured_image'    => __( 'Set featured image', 'sydney_toolbox' ),
		'remove_featured_image' => __( 'Remove featured image', 'sydney_toolbox' ),
		'use_featured_image'    => __( 'Use as featured image', 'sydney_toolbox' ),
		'insert_into_item'      => __( 'Insert into item', 'sydney_toolbox' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sydney_toolbox' ),
		'items_list'            => __( 'Items list', 'sydney_toolbox' ),
		'items_list_navigation' => __( 'Items list navigation', 'sydney_toolbox' ),
		'filter_items_list'     => __( 'Filter items list', 'sydney_toolbox' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'sydney_toolbox' ),
		'description'           => __( 'A post type for your timeline events', 'sydney_toolbox' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 26,
		'menu_icon'             => 'dashicons-layout',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' 				=> array( 'slug' => $slug ),		
	);
	register_post_type( 'timeline-events', $args );

}
add_action( 'init', 'sydney_toolbox_register_timeline_events', 0 );