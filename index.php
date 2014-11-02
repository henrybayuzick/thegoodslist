<?php get_header(); ?>

	<?php get_template_part('filter' ); ?>

	<main id="feed" role="main" class="feed wrapper">

<!-- 		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() ); 

		endwhile; else : ?>

		<div class="callout wrapper">
			<h3>Uh oh. That's not here.</h3>
			<p>Help us improve our site by telling us what you want to see.<br/>
			Email us at <a href="#">feedback@goodslist.co</a></p>
		</div>

		<?php endif; ?> -->

	</main>

	<div data-mailinglist class="mailinglist">

        <div class="wrapper">
            <p>Sign up for our newsletter and get curated content each week.</p>
            <?php get_template_part('mailchimp-form'); ?>
            <a data-mailinglist-close href="#" class="no-thanks">No thanks</a>
        </div>

    </div>

<?php get_footer(); ?>