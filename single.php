<?php get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php get_template_part('back-and-share'); ?>

	<main role="main">

		<article>
		
			<?php if (in_category('article')) {
				get_template_part('article', 'single');
			}
			else { ?>
				<div class="wrapper article-body">
					<?php if (in_category('link')) { 
						get_template_part('link');
					} else if (in_category('photo')) {
						get_template_part('photo' );
					} else if (in_category('video')) {
						get_template_part('video' );
					} ?>
				</div>
			<?php } ?>

		</article>

	</main>

<?php endwhile; else : ?>
	<p><?php _e( 'Hmm. Something might have gone wrong. No matches.' ); ?></p>
<?php endif;

get_footer(); ?>