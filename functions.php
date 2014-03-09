<?php 

function immEvidenza(){
	add_theme_support('post-thumbnails');
}
function stiliEditor(){
	add_editor_style();
}

add_action('init','immEvidenza');
add_action('init','stiliEditor');



?>