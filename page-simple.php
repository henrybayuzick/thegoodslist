<?php
/*
Template Name: Simple Page
*/
?>

<?php get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div data-nav-placeholder></div>

	<nav data-sticky-nav>
	    <div class="wrapper cf">
	        <a href="<?php echo home_url(); ?>" class="btn btn-back">&larr; Back to the list</a>
	    </div>
	</nav>

	<main role="main">

		<article>

			<div class="wrapper article-body">

				<?php the_content() ?>

			</div>

		</article>

	</main>

<?php endwhile; else : ?>
	<p><?php _e( 'Hmm. Something might have gone wrong. No matches.' ); ?></p>
<?php endif;

get_footer(); ?>