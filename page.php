<?php get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php get_template_part('back-and-share'); ?>

	<main role="main">

		<article>

			<div class="wrapper article-body">

				<hgroup>
					<h1><?php the_title(); ?></h1>
				</hgroup>

				<?php the_content() ?>

			</div>

		</article>

	</main>

<?php endwhile; else : ?>
	<p><?php _e( 'Hmm. Something might have gone wrong. No matches.' ); ?></p>
<?php endif;

get_footer(); ?>