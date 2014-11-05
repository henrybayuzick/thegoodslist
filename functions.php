<?php
register_nav_menus( array(
	'main' => 'Main Menu',
	'filter' => 'Filter'
));

function html5_insert_image($html, $id, $caption, $title, $align, $url) {
	$html5 = "<figure id='post-$id media-$id' class='align-$align'>";
	$html5 .= "<img src='$url' alt='$title' />";
	if ($caption) {
		$html5 .= "<figcaption>$caption</figcaption>";
	}
	$html5 .= "</figure>";
	return $html5;
}
add_filter( 'image_send_to_editor', 'html5_insert_image', 10, 9 );

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn"';
}
?>