<?php 

function immEvidenza(){
	add_theme_support('post-thumbnails');
}
function stiliEditor(){
	add_editor_style();
}
function navigazione(){
	register_nav_menu( 'principale', 'Menu principale' );
}

add_action('init','immEvidenza');
add_action('init','stiliEditor');
add_action('init','navigazione');



?>