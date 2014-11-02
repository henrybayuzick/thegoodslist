<?php
    $shortlink = wp_get_shortlink();
    $description = get_field('share_title') . " on The Goods List";
    if (get_field('video_type') == 'vimeo') { 
        $vimeoid = get_field('vimeo_video_id');
        $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$vimeoid.php"));
        $thumbnail = $hash[0]['thumbnail_medium'];
        $shareurl = "https://pinterest.com/pin/create/button/?url=$shortlink&media=$thumbnail&description=$description";

    } else if (get_field('video_type') == 'youtube') {
        $youtubeid = get_field('youtube_video_id');
        $thumbnail = "http://img.youtube.com/vi/$youtubeid/default.jpg";
        $shareurl = "https://pinterest.com/pin/create/button/?url=$shortlink&media=$thumbnail&description=$description";
    } else if (get_field('add_photos')) {
        $photos = get_field('add_photos' );
        $description = get_the_title() . " on The Goods List";
        $thumbnail = $photos[0]['photo']; 
        $shareurl = "https://pinterest.com/pin/create/button/?url=$shortlink&media=$thumbnail&description=$description";
    } else {
        $description = get_the_title() . " on The Goods List";
        $thumbnail = get_field('hero_image');
        $shareurl = "https://pinterest.com/pin/create/button/?url=$shortlink&media=$thumbnail&description=$description";
    }
?>

<div data-nav-placeholder></div>

<nav data-sticky-nav>
    <div class="wrapper cf">
        <a href="<?php echo home_url(); ?>" class="btn btn-back">&larr; Back to the list</a>
        <ul class="share desktop">
            <li>Share</li>
            <li><a href="https://twitter.com/intent/tweet?via=thegoodslist&url=<?php echo wp_get_shortlink(); ?>&text=<?php the_title(); ?> on The Goods List" class="btn icon-twitter" target="_blank"></a></li>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink(); ?>" class="btn icon-facebook" target="_blank"></a></li>
            <li><a href="<?php echo $shareurl ?>" class="btn icon-pinterest" target="_blank"></a></li>
        </ul>
        <ul class="share mobile">
            <li><a data-popover-open class="btn btn-nohover">Share this</a></li>
        </ul>
    </div>
</nav>

<nav data-popover class="share popover">
    <ul>
        <li><a href="https://twitter.com/intent/tweet?via=thegoodslist&url=<?php echo wp_get_shortlink(); ?>&text=<?php the_title(); ?> on The Goods List" target="_blank"><span class="icon-twitter"></span> Share on Twitter</a></li>
        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink(); ?>" target="_blank"><span class="icon-facebook" target="_blank"></span> Share on Facebook</a></li>
        <li><a href="<?php echo $shareurl ?>" target="_blank"><span class="icon-pinterest"></span> Share on Pinterest</a></li>
        <li><a data-popover-close href="#" target="_blank"><span class="icon-cancel"></span> Close</a></li>
    </ul>
</nav>