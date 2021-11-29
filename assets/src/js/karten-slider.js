export const cardSliderComponent = () => {

    (function ($) {

        /**
         * Karten Slider
         *
         * Adds custom JavaScript to the block HTML.
         *
         * @date    15/4/19
         * @since   1.0.0
         *
         * @param   object $block The block jQuery element.
         * @param   object attributes The block attributes (only available when editing).
         * @return  void
         */
        var initializeBlock = function ($block) {
            console.log("slick karten slider init");
            $block.find('.row').slick({
                touchThreshold: 10,
                dots: true,
                arrows: false,
                lazyLoad: 'ondemand',
                responsive: [{
                    breakpoint: 992,
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
        }

        // Initialize each block on page load (front end).
        $(document).ready(function () {
            $('.karte-slider').each(function () {
                initializeBlock($(this));
            });
        });

        // Initialize dynamic block preview (editor).
        if (window.acf) {
            window.acf.addAction('render_block_preview/type=karten', initializeBlock);
        }

    })(jQuery);

}