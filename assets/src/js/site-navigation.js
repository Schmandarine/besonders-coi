export const siteNavigationComponent = () => {

    console.log("site-navigation init");

    var item_with_child = $('.menu-item-has-children > a');
    var site_navi_wrapper = $('.site-navigation-wrapper');
    var sub_menu_wrapper = $(".site-navigation-sub-wrapper");


    item_with_child.click(function (e) {

        var clicked_item = $(this);
        var rel_sub_menu = $(this).parent().find('.sub-menu');
        var sub_menu_height = rel_sub_menu.height() + 40;

        console.log(sub_menu_height);

        e.preventDefault();
        console.log("Link has Submenu");

        if (site_navi_wrapper.attr('data-visibility') == 'hidden') {
            console.log("show the submenu");
            // Show the Submenu
            site_navi_wrapper.attr('data-visibility', 'visible');
            sub_menu_wrapper.animate({
                'height': sub_menu_height,
            }, 80);

            rel_sub_menu.addClass("active");
            clicked_item.addClass("active");

        } else {

            if (clicked_item.is(".active")) {

                console.log("hide the submenu");
                // Hide the Submenus
                site_navi_wrapper.attr('data-visibility', 'hidden');
                sub_menu_wrapper.animate({
                    'height': '0',
                }, 250);
                rel_sub_menu.removeClass("active");
                clicked_item.removeClass("active");


            } else {

                console.log("update the submenu height");
                // Update the Submenu
                site_navi_wrapper.attr('data-visibility', 'visible');
                sub_menu_wrapper.animate({
                    'height': sub_menu_height,
                }, 100);

                $('.sub-menu').removeClass("active");
                $('.menu-item-has-children > a').removeClass("active");

                rel_sub_menu.addClass("active");
                clicked_item.addClass("active");

            }

        }
    })

    $(".site-main, .hero-wrapper, .site-modules").on('click', function () {
        console.log("body document" + $(this));

        // Hide the Submenus
        site_navi_wrapper.attr('data-visibility', 'hidden');
        sub_menu_wrapper.animate({
            'height': '0',
        }, 250);
        $('.sub-menu').removeClass("active");
        $('.menu-item-has-children > a').removeClass("active");


    })



    var toggle_button = document.querySelector('.menu-toggle');
    var main_navigation = document.querySelector('.main-navigation');

    toggle_button.onclick = function () {
        main_navigation.classList.toggle('active');
    }

    var btn_span = $('#button-text');
    var btn_wrapper = $('.button-wrapper');
    var video_wrapper = $('.video-wrapper');
    var hamburger = $('.button-wrapper button');

    btn_wrapper.on('click', function () {

        if (btn_span.is('.active')) {
            btn_span.removeClass('active');
            hamburger.removeClass('is-active');
            btn_span.text("menu");

        } else {
            btn_span.addClass('active');
            hamburger.addClass('is-active');
            btn_span.text("schließen");
        }

    })


    $(document).on('scroll', function () {

        if ($(this).scrollTop() >= 1) {
            $('.site-header').stop().addClass('site-header-smaller');
            console.log("add-class when scroll");
        }
        if ($(this).scrollTop() <= 1) {
            $('.site-header').stop().removeClass('site-header-smaller');
        }
    })


}
