<div data-nav-placeholder></div>

<nav data-sticky-nav>
    <div class="wrapper cf">
        <ul data-filter-desktop class="filter desktop">
            <li data-all class="btn">All</li>
            <li data-articles class="btn">Articles</li>
            <li data-photos class="btn">Photos</li>
            <li data-videos class="btn">Videos</li>
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
        <li><a data-all href="#"><span class="icon-ok"></span> All</a></li>
        <li><a data-articles href="#"><span class="icon-doc"></span> Articles</a></li>
        <li><a data-photos href="#"><span class="icon-picture"></span> Photos</a></li>
        <li><a data-videos href="#"><span class="icon-video"></span> Videos</a></li>
        <li><a data-popover-close href="#"><span class="icon-cancel"></span> Close</a></li>
    </ul>
</nav>