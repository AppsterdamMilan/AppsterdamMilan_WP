<?php 


function video_init() {
	$labels = array(
		'name'               => _x( 'Video', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Video', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Videos', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Video', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New Video', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Video', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Video', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Video', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Video', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Videos', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Videos', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Videos:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Video found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No elements found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon' 		 => 'dashicons-video-alt',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'video' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'comments' )
	);

	register_post_type( 'video', $args );
}

function talklab_init() {
	$labels = array(
		'name'               => _x( 'Talklabs', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Talklab', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Talklabs', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Talklab', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New Talklab', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Talklab', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Talklab', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Talklab', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Talklab', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Talklabs', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Talklabs', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Talklabs:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Talklab found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No elements found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon' 		 => 'dashicons-megaphone',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'talklab' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'comments', 'thumbnail' )
	);

	register_post_type( 'talklab', $args );
}

add_action( 'init', 'talklab_init' );
add_action( 'init', 'video_init' );

?>