<?php 

function feat_image(){
	add_theme_support('post-thumbnails');
}
function editor_style(){
	add_editor_style();
}
function navigation(){
	register_nav_menu( 'principale', 'Menu principale' );
}
function js_handling(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_bloginfo('template_url') . "/js/jquery-2.1.0.min.js", false, "2.1.0", true);
	wp_register_script('app', get_bloginfo('template_url') . "/js/appsterdam.js", array('jquery'), "1.0.0", true);
	wp_enqueue_script('app');	
}
function defineSidebars(){
	register_sidebar(array(
		'name' => 'Credits',
		'description' => 'Appears below main navigation and/or footer',
		'before_widget' => '<div class="widget credits">',
		'after_widget' => '</div>'
	));
}

add_action('init','feat_image');
add_action('init','editor_style');
add_action('init','navigation');
add_action('widgets_init','defineSidebars');
add_action('wp_enqueue_scripts','js_handling');


?>