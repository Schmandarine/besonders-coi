export const hexagonSliderComponent = () => {

    $('.hexagon_logos').each(function () {
        console.log("slick hexagon slider init");
        $(this).find('.hexagon-slider').slick({
            swipeToSlide: true,
            touchThreshold: 8,
            dots: true,
            lazyLoad: 'ondemand',
            arrows: false,
            autoplay: true,
            responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                },
            }
            ]
        });
    });

}