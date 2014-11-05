<div data-nav-placeholder></div>

<nav data-sticky-nav>
    <div class="wrapper cf">
        <ul data-filter-desktop class="filter desktop">
            <a href="<?php echo get_page_link(214); ?>" class="btn <?php if(is_page(214) || is_front_page()) echo 'active' ?>">All</a>
            <a href="<?php echo get_page_link(212); ?>" class="btn <?php if(is_page(212)) echo 'active' ?>">Articles</a>
            <a href="<?php echo get_page_link(216); ?>" class="btn <?php if(is_page(216)) echo 'active' ?>">Photos</a>
            <a href="<?php echo get_page_link(218); ?>" class="btn <?php if(is_page(218)) echo 'active' ?>">Videos</a>
        </ul>
        <ul data-filter-mobile class="filter mobile">
            <li data-popover-open class="btn">Filter</li>
        </ul>
        <div data-search class="search">
            <a data-open-search class="open-search btn icon-search"></a>
            <a data-close-search href="#" class="close-search btn icon-cancel"></a>
            <form data-search role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <input data-search-input type="search" value="<?php echo get_search_query() ?>" name="s" placeholder="Search">
                <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;">
            </form>
        </div>
    </div>
</nav>

<nav data-popover class="popover">
    <ul>
        <li><a href="<?php echo get_page_link(214); ?>" class="<?php if(is_page(214) || is_front_page()) echo 'active' ?>"><span class="icon-ok"></span> All</a></li>
        <li><a href="<?php echo get_page_link(212); ?>" class="<?php if(is_page(212)) echo 'active' ?>"><span class="icon-doc"></span> Articles</a></li>
        <li><a href="<?php echo get_page_link(216); ?>" class="<?php if(is_page(216)) echo 'active' ?>"><span class="icon-picture"></span> Photos</a></li>
        <li><a href="<?php echo get_page_link(218); ?>" class="<?php if(is_page(218)) echo 'active' ?>"><span class="icon-video"></span> Videos</a></li>
        <li><a data-popover-close href="#"><span class="icon-cancel"></span> Close</a></li>
    </ul>
</nav>