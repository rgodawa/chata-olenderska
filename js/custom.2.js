jQuery(document).ready(function($) {
    "use strict";
    $(".big-cta").hover(function() {
        $('.cta a').addClass("animated shake");
    }, function() {
        $('.cta a').removeClass("animated shake");
    });
    $(".box").hover(function() {
        $(this).find('.icon').addClass("animated fadeInDown");
        $(this).find('p').addClass("animated fadeInUp");
    }, function() {
        $(this).find('.icon').removeClass("animated fadeInDown");
        $(this).find('p').removeClass("animated fadeInUp");
    });
    $('.accordion').on('show', function(e) {
        $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
        $(e.target).prev('.accordion-heading').find('.accordion-toggle i').removeClass('icon-plus');
        $(e.target).prev('.accordion-heading').find('.accordion-toggle i').addClass('icon-minus');
    });
    $('.accordion').on('hide', function(e) {
        $(this).find('.accordion-toggle').not($(e.target)).removeClass('active');
        $(this).find('.accordion-toggle i').not($(e.target)).removeClass('icon-minus');
        $(this).find('.accordion-toggle i').not($(e.target)).addClass('icon-plus');
    });
    jQuery('.social-network li a, .options_box .color a').tooltip();
    $(".fancybox").fancybox({
        padding: 0,
        autoResize: true,
        beforeShow: function() {
            this.title = $(this.element).attr('title');
            this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
        },
        helpers: {
            title: {
                type: 'inside'
            },
        }
    });
    $(".fancybox_gallery").fancybox({
        padding: 0,
        autoResize: true,
        beforeShow: function() {
            this.title = $(this.element).parent().find('img').attr('alt');
            this.title = '<h4>' + this.title + '</h4>';
        },
        helpers: {
            title: {
                type: 'inside'
            },
        }
    });
    $('.google_iframe').fancybox({
        width: '95%',
        height: '95%',
        autoSize: false,
        openEffect: 'none',
        closeEffect: 'none',
        type: "iframe",
        iframe: {
            preload: false
        }
    });
    $(".fancybox_calendar").fancybox({
        padding: 0,
        autoResize: true,
        beforeShow: function() {
            this.title = $(this.element).attr('title');
            this.title = '<h4>' + this.title + '</h4>';
        },
        helpers: {
            title: {
                type: 'inside'
            },
        }
    });
    $('.google_calendar').fancybox({
        width: '95%',
        height: '95%',
        autoSize: false,
        openEffect: 'none',
        closeEffect: 'none',
        type: "iframe"
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
});