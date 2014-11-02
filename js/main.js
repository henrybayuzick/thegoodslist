$(document).ready(function() {
    $(function() {
        FastClick.attach(document.body);
    });

    // Sticky nav
    var navPosition = $('[data-sticky-nav]').offset();
    var navHeight = $('[data-sticky-nav]').outerHeight();

    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > navPosition.top) {
            $('[data-sticky-nav]').addClass('fixed');
            $('[data-nav-placeholder]').height(navHeight);
        }
        else {
            $('[data-sticky-nav]').removeClass('fixed');
            $('[data-nav-placeholder]').height(0);
        }
    });

    // Mailing list popover
    var mailinglistOpened = "false";
    if ($.cookie('mailinglist-popup') == undefined) {
        $(window).bind('scroll', function() {
            if (($(window).scrollTop() > 1000) && (mailinglistOpened == "false")) {
                $('[data-mailinglist]').addClass('open');
                mailinglistOpened = "true";
            }
        });
    }

    $('[data-mailinglist-signup]').click(function(e){
        $('[data-mailinglist]').removeClass('open');
        $.cookie('mailinglist-popup', 'signed-up', { expires: 365, path: '/'  });
        e.preventDefault();
    });

    $('[data-mailinglist-close]').click(function(e){
        $('[data-mailinglist]').removeClass('open');
        $.cookie('mailinglist-popup', 'closed', { expires: 3, path: '/'  });
        e.preventDefault();
    });

    // Dropcap
    var dropcaps = document.querySelectorAll("span.dropcap");
    window.Dropcap.layout(dropcaps, 3);

    // Popover
    $('[data-popover-open]').click(function(e){
        $('[data-popover]').addClass('open');

        var docHeight = $(document).height();
        $("body").append("<div class='overlay'></div>");
        $(".overlay").css({'height': docHeight});

        e.preventDefault();
    });

    $('[data-popover-close]').click(function(e){
        e.preventDefault();
        $(".overlay").remove();
        $('[data-popover]').removeClass('open');
    });

    function closePopover() {
        $(".overlay").remove();
        $('[data-popover]').removeClass('open');
    }

    $('html').on('touchstart', function(e) {
        $(".overlay").remove();
        $('[data-popover]').removeClass('open');
    })
    $("[data-popover]").on('touchstart',function(e) {
        e.stopPropagation();
    });

    // Search
    $('[data-open-search]').click(function(e){
        $('[data-search]').addClass('open');
        $('[data-filter-desktop]').addClass('hidden');
        $('[data-filter-mobile]').addClass('hidden');
        e.preventDefault();
    });

    $('[data-close-search]').click(function(e){
        $('[data-search]').removeClass('open');

           setTimeout(
              function() {
                    $('[data-filter-desktop]').removeClass('hidden');
                    $('[data-filter-mobile]').removeClass('hidden');
              }, 200);
        e.preventDefault();
    });

    // Tooltips
    $('[data-tooltip-toggle]').each(function(){
        $(this).click(function(e){
            e.preventDefault();
            if ($(this).parent().find('[data-tooltip]').hasClass('open')) {
                $(this).parent().find('[data-tooltip]').removeClass('open');
            }
            else {
                $('[data-tooltip]').removeClass('open');
                $(this).parent().find('[data-tooltip]').addClass('open');
            }
        });
    });

    $(document).mouseup(function (e) {
        var container = $('[data-options]');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('[data-tooltip]').removeClass('open');
        }
    });

    $(document).on('touchstart', function (e) {
        var container = $('[data-options]');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('[data-tooltip]').removeClass('open');
        }
    });


    // Filter categories

    // All
    if (($.cookie('filter') == undefined) || ($.cookie('filter') == 'all')) {
        showAll();
    }

    $('[data-all]').click(function(){
        showAll();
        closePopover();
    })

    function showAll() {
        $('.active').removeClass('active');
        $('[data-all]').each(function(){
            $(this).addClass('active');
        });
        $('.not-shown').each(function(){
            $(this).removeClass('fade-out not-shown'); 
            $(this).addClass('fade-in');
        });
        $.cookie('filter', 'all');
    }

    // Articles

    $('[data-articles]').click(function(){
        showArticles();
        closePopover();
    })

    function showArticles() {
        $('.active').removeClass('active');
        $('[data-articles]').each(function(){
            $(this).addClass('active');
        });
        $('[data-type="article"]').each(function(){
            $(this).addClass('fade-in');
            $(this).removeClass('fade-out not-shown');
        });
        $('[data-type="photo"], [data-type="video"]').each(function(){
            $(this).removeClass('fade-in')
            $(this).addClass('fade-out');
            setTimeout(function() {        
                $('[data-type="photo"], [data-type="video"]').addClass('not-shown');
            }, 300);
        });

        $.cookie('filter', 'articles');
    }

    if ($.cookie('filter') == 'articles') {
       showArticles();
    }

    // Photos

    $('[data-photos]').click(function(){
        showPhotos();
        closePopover();
    })

    function showPhotos() {
        $('.active').removeClass('active');
        $('[data-photos]').each(function(){
            $(this).addClass('active');
        });
        $('[data-type="photo"]').each(function(){
            $(this).addClass('fade-in');
            $(this).removeClass('fade-out not-shown');
        });
        $('[data-type="article"], [data-type="video"]').each(function(){
            $(this).removeClass('fade-in')
            $(this).addClass('fade-out');
            setTimeout(function() {        
                $('[data-type="article"], [data-type="video"]').addClass('not-shown');
            }, 300);
        });

        $.cookie('filter', 'photos');
    }

    if ($.cookie('filter') == 'photos') {
       showPhotos();
    }

    // Videos
    
    $('[data-videos]').click(function(){
        showVideos();
        closePopover();
    })

    function showVideos() {
        $('.active').removeClass('active');
        $('[data-videos]').each(function(){
            $(this).addClass('active');
        });
        $('[data-type="video"]').each(function(){
            $(this).addClass('fade-in');
            $(this).removeClass('fade-out not-shown');
        });
        $('[data-type="article"], [data-type="photo"]').each(function(){
            $(this).removeClass('fade-in')
            $(this).addClass('fade-out');
            setTimeout(function() {        
                $('[data-type="article"], [data-type="photo"]').addClass('not-shown');
            }, 300);
        });

        $.cookie('filter', 'videos');
    }

    if ($.cookie('filter') == 'videos') {
       showVideos();
    }

    $('[data-search]').submit(function() {
        $.cookie('filter', 'all');
    });

    (function($) {
        $(document.body).on( 'post-load', function () {
            if ($.cookie('filter') == 'photos') { showPhotos(); }
            if ($.cookie('filter') == 'videos') { showVideos(); }
            if ($.cookie('filter') == 'articles') { showArticles(); }
            if (($.cookie('filter') == undefined) || ($.cookie('filter') == 'all')) { showAll(); }
        });
    })(jQuery);
});