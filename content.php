<?php 
if (in_category('links')) { 
	get_template_part('link');
} else if (in_category('photos')) {
	get_template_part('photo' );
} else if (in_category('videos')) {
	get_template_part('video' );
} else if (in_category('articles')) {
	get_template_part('article', 'feed' );
}
?>