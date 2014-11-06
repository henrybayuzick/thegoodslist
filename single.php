<?php get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php get_template_part('back-and-share'); ?>

	<main role="main single">

		<article>
		
			<?php if (in_category('articles')) {
				get_template_part('article', 'single');
			}
			else { ?>
				<div class="wrapper article-body">
					<?php if (in_category('links')) { 
						get_template_part('link');
					} else if (in_category('photos')) {
						get_template_part('photo' );
					} else if (in_category('videos')) {
						get_template_part('video' );
					} ?>
				</div>
			<?php } ?>

			<footer class="wrapper article-body">
				<h3>Want more like this?</h3>
				<p>Sign up for our newsletter and get curated content each week.</p>
				<?php get_template_part('mailchimp-form'); ?>
			</footer>

		</article>

	</main>

<?php endwhile; else : ?>
	<p><?php _e( 'Hmm. Something might have gone wrong. No matches.' ); ?></p>
<?php endif;

get_footer(); ?>