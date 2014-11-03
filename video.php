<section data-type="video" class="card video">
	<?php
	$shortlink = wp_get_shortlink();
	$description = "Watch " . get_field('share_title') . " on The Goods List";
	if (get_field('video_type') == 'vimeo') { 
		$vimeoid = get_field('vimeo_video_id');
		$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$vimeoid.php"));
		$thumbnail = $hash[0]['thumbnail_medium'];
		$shareurl = "https://pinterest.com/pin/create/button/?url=$shortlink&media=$thumbnail&description=$description";
		$videourl = "//player.vimeo.com/video/$vimeoid?title=0&amp;byline=0&amp;portrait=0&amp;color=F67926";

	} else if (get_field('video_type') == 'youtube') {
		$youtubeid = get_field('youtube_video_id');
		$thumbnail = "http://img.youtube.com/vi/$youtubeid/default.jpg";
		$shareurl = "https://pinterest.com/pin/create/button/?url=$shortlink&media=$thumbnail&description=$description";
		$videourl = "https://www.youtube.com/embed/$youtubeid";
	} ?>
	<div data-options class="card-options">
		<a href="#" data-tooltip-toggle class="icon-dot-3"></a>
		<div data-tooltip class="tooltip">
			<ul>
				<li><a target="_blank" href="https://twitter.com/intent/tweet?via=thegoodslist&url=<?php echo wp_get_shortlink(); ?>&text=<?php the_sub_field('share_title'); ?> on The Goods List"><span class="icon-twitter"></span> Share</a></li>
				<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink(); ?>"><span class="icon-facebook"></span> Share</a></li>
				<li><a target="_blank" href="<?php echo $shareurl; ?>"><span class="icon-pinterest"></span> Share</a></li>
			</ul>
		</div>
	</div>
	<div class="card-video">
		<iframe src="<?php echo $videourl; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
	<div class="card-details cf">
		<ul>
			<?php $firstProduct = true; ?>
			<?php while ( have_rows('link_to_products') ) : the_row(); ?>
				<?php if ((get_field('products_subhead')) && ($firstProduct) ) { ?>
					<li><h4><?php the_field('products_subhead'); ?></h4></li>
				<?php } ?>
				<li>
					<div class="title">
						<?php if (get_sub_field('subheader')) { ?>
						<h4><?php the_sub_field('subheader'); ?></h4>
						<?php } ?>
						<a target="_blank" target="_blank" href="<?php the_sub_field('product_url') ?>"><?php the_sub_field('product_title') ?></a>
					</div>
					<a target="_blank" href="<?php the_sub_field('product_url') ?>" class="btn btn-orange"><?php the_sub_field('button_text') ?></a>
				</li>
			<?php $firstProduct = false; endwhile; ?>
		</ul>
	</div>
</section>