import $ from '../../../node_modules/jquery/dist/jquery';
import { slick } from '../../../node_modules/slick-carousel/slick/slick';

export const blogpostSliderComponent = () => {


    console.log("slick blog post slider init");


    $('.blog_posts_block').each(function () {
        $(this).find('.slick_init').slick({
            dots: true,
            lazyLoad: 'ondemand',
            prevArrow: $('.prev-slick'),
            nextArrow: $('.next-slick'),
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                },
            }
            ]
        });
    });


}