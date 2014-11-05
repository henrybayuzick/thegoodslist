<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="2dycYCuAd37ax40wNFbrLjUU9yhCM-kUMS-R4C53qSE" />

        <script src="//use.typekit.net/agb4mpd.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">

        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />

        <!-- TODO: Add HTML5 Shiv --> 
    </head>

    <?php wp_head() ?>
    <body class="<?php if(is_front_page()) { ?>home<?php } ?>">

    <header role="banner" class="wrapper">
        <a alt="The Goods List - Home" href="<?php echo home_url(); ?>">
            <img alt="The Goods List" class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
        </a>

        <h1>Things for the design-centric fellow.</h1>
        <ul>
            <?php wp_nav_menu( array('theme_location'  => 'main','container' => false, 'items_wrap' => '%3$s' )); ?>
        </ul>
    </header>