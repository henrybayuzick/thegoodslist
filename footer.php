    <footer class="wrapper">
    	<div class="callout wrapper">
	    	<?php if (in_category('articles')) { ?>
	    	<h3>Want more like this?</h3>
	    	<?php } else { ?>
	    	<h3>Get the Goods</h3>
	    	<?php } ?>
	    	<p>Sign up for our newsletter and get our best content each week.</p>
	    	<?php get_template_part('mailchimp-form'); ?>
    	</div>
    	<hr/>
    	<h4>© 2014 The Goods List—All Rights Reserved</h4>
    </footer>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/all.min.js"></script>
    <?php wp_footer(); ?>
    </body>
</html>
