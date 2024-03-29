<figure class="hero">
	<img src="<?php the_field('hero_image'); ?>">
	<figcaption><?php the_field('hero_caption'); ?></figcaption>
</figure>

<div class="wrapper article-body">

	<hgroup>
		<h1><?php the_title(); ?></h1>
		<h2><?php the_field('subtitle'); ?></h2>
		<h4><em>Written by</em> <?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?> <em>on</em> <?php the_date(); ?></h4>
	</hgroup>

	<?php the_content() ?>

</div>