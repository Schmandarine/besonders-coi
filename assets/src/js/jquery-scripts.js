
export const jqueryCustomScripts = () => {

    (function ($) {

        var SimpleLightbox = require('../../../node_modules/simple-lightbox/dist/simpleLightbox');
        SimpleLightbox.registerAsJqueryPlugin($);

        // Initialize each block on page load (front end).
        $(document).ready(function () {

            console.log("jquery-scripts readyly");

            $('figure > a').simpleLightbox();

            var icon_color = '#FFFFFF';

            $('.anrufen-cta-tracking-wrapper').find('a.btn')
                .attr('id', 'cta-tracking-id-anrufen')
                .prepend('<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path fill="' + icon_color + '" d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>&nbsp;&nbsp;&nbsp;');

            //$("body").fadeIn();
            $('.fixed-scroll-top').on('click', function () {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });

            $(document).on('scroll', function () {

                console.log("scrolled");

                if ($(this).scrollTop() >= 1) {
                    //$('.site-navigation-wrapper').stop().addClass('scroll-smaller');
                }
                if ($(this).scrollTop() <= 1) {
                    //$('.site-navigation-wrapper').stop().removeClass('scroll-smaller');
                }

                if ($(this).scrollTop() >= $('.site-main, .site-modules').position().top) {
                    $('.fixed-scroll-top').stop().fadeIn();
                    $('.fixed-meta-contact').stop().animate({
                        right: '15px'
                    }, 250);
                    $('.fixed-mobile-meta-contact').stop().animate({
                        bottom: '0'
                    }, 250);
                }
                if ($(this).scrollTop() <= $('.site-main, .site-modules').position().top) {
                    $('.fixed-scroll-top').stop().fadeOut();
                    $('.fixed-meta-contact').stop().animate({
                        right: '-100px'
                    }, 250);
                    $('.fixed-mobile-meta-contact').stop().animate({
                        bottom: '-100px'
                    }, 250);
                }
            })


        });



        if ($(window).width() < 960) {
            var anchorOffset = 90;
        }
        else {
            var anchorOffset = 300;
        }
        $('a[href*="#"]:not([href="#"])').click(function () {

            var target = $(this.hash);


            $('html,body').stop().animate({
                scrollTop: target.offset().top - anchorOffset
            }, 'linear');
        });


        if (location.hash) {

            var id = $(location.hash);
        }

        $(window).load(function () {
            if (location.hash) {

                setTimeout(function () {

                    $('html,body').animate({
                        scrollTop: id.offset().top - anchorOffset
                    }, 'linear')

                }, 800);

            };


        });




    })(jQuery);

}