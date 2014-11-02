<?php 
if (in_category('link')) { 
	get_template_part('link');
} else if (in_category('photo')) {
	get_template_part('photo' );
} else if (in_category('video')) {
	get_template_part('video' );
} else if (in_category('article')) {
	get_template_part('article', 'feed' );
}
?>