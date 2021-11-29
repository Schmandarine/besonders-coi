(function ($) {

    /**
     * Magic Slider
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
        console.log("magic slider init");
        var count_class = $block.find('.panel-magic').length;
        //alert(count_class);
    }

    // Initialize each block on page load (front end).
    $(document).ready(function () {
        console.log("magic slider init");
        var jsWipeAnimation = new TimelineMax();

        var panel_slides = $('.panel-magic').length;
        var slide_duration = panel_slides / 2.5 * 100;
        var panel_width = 100 / panel_slides;

        var i = 1;
        while (i <= panel_slides) {
            if (i == 1) {
                jsWipeAnimation.to("#slideContainer", 0.5, { z: -150, delay: 0.5 });
                jsWipeAnimation.to("#slideContainer", 1, { x: "-" + panel_width + "%" });
                jsWipeAnimation.to("#slideContainer", 0.5, { z: 0 });
            } if (i > 1 && i < panel_slides) {
                jsWipeAnimation.to("#slideContainer", 0.5, { z: -150, delay: 0.5 });
                jsWipeAnimation.to("#slideContainer", 1, { x: "-" + i * panel_width + "%" });
                jsWipeAnimation.to("#slideContainer", 0.5, { z: 0 });
            }
            i++;
        }

        new ScrollMagic.Scene({
            triggerElement: "#pinContainer",
            triggerHook: "onLeave",
            duration: slide_duration + "%"//"100%"
        })
            .setPin("#pinContainer")
            .setTween(jsWipeAnimation)
            //.addIndicators() // add indicators (requires plugin)
            .addTo(controller);
    });

    // Initialize dynamic block preview (editor).
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=magic_slider', initializeBlock);
    }

})(jQuery);