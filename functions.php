<?php 

// Actions/filters definitions
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
	wp_register_script('jquery', get_bloginfo('template_url') . "/bower_components/jquery/dist/jquery.min.js", false, "2.1.3", true);
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
function apps_login(){
	?>
	
	<style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php bloginfo('template_url'); ?>/img/logo_mi.svg);
            width: 210px;
            height: 174px;
            background-size: 210px 174px;
        }
        body.login div#login{
        	padding: 4.5% 0 0;
        }
    </style>
	
	<?php
}
function apps_favicon(){
	$favicon_url = get_bloginfo('template_url') . '/img/logo_mi.png';
	echo '<link rel="icon" type="image/png" href="' . $favicon_url . '" >';
}

// Actions/filters calls
add_action('init','feat_image');
add_action('init','editor_style');
add_action('init','navigation');
add_action('widgets_init','defineSidebars');
add_action('wp_enqueue_scripts','js_handling');
add_action('login_head', 'apps_login');
add_action('admin_head', 'apps_favicon');

// Includes
include('functions/post-types.php');

?>