<?php get_header(); ?>

	<?php get_template_part('filter' ); ?>

	<main id="feed" role="main" class="feed wrapper">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() ); ?>

			<? endwhile; ?>

			<?php get_template_part( 'pagination'); ?>

		<?php else : ?>

			<?php get_template_part( 'no-posts'); ?>

		<?php endif; ?>

	</main>

	<?php get_template_part( 'mailing-list-popup'); ?>

<?php get_footer(); ?>