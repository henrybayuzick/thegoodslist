<?php
/*
Template Name: Videos
*/
get_header(); ?>

	<?php get_template_part('filter' ); ?>

	<main id="feed" role="main" class="feed wrapper">

		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$wp_query = new WP_Query('cat=5&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged);
		?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() ); ?>

			<? endwhile; ?>

			<?php get_template_part( 'pagination'); ?>

		<?php else : ?>

			<?php get_template_part( 'no-posts'); ?>

		<?php wp_reset_postdata(); endif; ?>

	</main>

	<?php get_template_part( 'mailing-list-popup'); ?>

<?php get_footer(); ?>