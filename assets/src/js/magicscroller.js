import * as ScrollMagic from "../../../node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic";
import { TweenMax, TimelineMax } from "../../../node_modules/gsap/dist/gsap";
import { ScrollMagicPluginGsap } from "../../../node_modules/scrollmagic-plugin-gsap";
ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

var controller = new ScrollMagic.Controller();

export const magicscroller = () => {

    (function ($) {

        var controller = new ScrollMagic.Controller();

        console.log("magicscroller init");



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


    })(jQuery);



}