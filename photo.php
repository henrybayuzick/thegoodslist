<?php $photos = get_field('add_photos' ); $numberOfPhotos = count($photos); $firstPicture = true; ?>
<section data-type="photo" class="card<?php if ($numberOfPhotos == 1) { ?> one-image<?php } else if ($numberOfPhotos == 2) { ?> two-images<?php } else if ($numberOfPhotos == 3) { ?> three-images <?php } ?>">
	<?php while ( have_rows('add_photos') ) : the_row(); ?>
		<?php if ($firstPicture) { ?>
			<div data-options class="card-options">
				<a href="#" data-tooltip-toggle class="icon-dot-3"></a>
				<div data-tooltip class="tooltip">
					<ul>
						<li><a target="_blank" href="https://twitter.com/intent/tweet?via=thegoodslist&url=<?php echo wp_get_shortlink(); ?>&text=<?php the_sub_field('photo_title'); ?> on The Goods List"><span class="icon-twitter"></span> Share</a></li>
						<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink(); ?>"><span class="icon-facebook"></span> Share</a></li>
						<li><a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo wp_get_shortlink(); ?>&media=<?php the_sub_field('photo'); ?>&description=<?php the_sub_field('photo_title'); ?> on The Goods List"><span class="icon-pinterest"></span> Share</a></li>
					</ul>
				</div>
			</div>
		<?php } ?>
		<div class="card-image">
			<a target="_blank" href="<?php the_sub_field('photo_url'); ?>">
				<img alt="<?php the_sub_field('photo_title'); ?>" src="<?php the_sub_field('photo'); ?>">
			</a>
		</div>
		<?php $firstPicture = false; ?>
	<?php endwhile; $firstProduct = true; ?>
	<div class="card-details cf">
		<ul>
			<?php while ( have_rows('link_to_products') ) : the_row(); ?>
				<?php if ((get_field('products_subhead')) && ($firstProduct) ) { ?>
					<li><h4><?php the_field('products_subhead'); ?></h4></li>
				<?php } ?>
				<li>
					<div class="title">
						<?php if (get_sub_field('subheader')) { ?>
						<h4><?php the_sub_field('subheader'); ?></h4>
						<?php } ?>
						<a target="_blank" href="<?php the_sub_field('product_url') ?>"><?php the_sub_field('product_title') ?></a>
					</div>
					<a target="_blank" href="<?php the_sub_field('product_url') ?>" class="btn btn-orange"><?php the_sub_field('button_text') ?></a>
				</li>
			<?php $firstProduct = false; endwhile; ?>
		</ul>
	</div>
</section>