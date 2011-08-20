<?php

function childtheme_content($content) {
	if (is_category()) {
		$content= 'full';}
	return $content;
}
add_filter('thematic_content', 'childtheme_content');

function child_content() {
    return 'Full';
}
add_filter('thematic_content', 'child_content');

// change Thematic #access menu for a Wordpress 3.0 menu
function child_access_menu() {
	$menu_sys = 'wp_nav_menu';
	return $menu_sys;
}
add_filter('thematic_menu_type', 'child_access_menu');

?>