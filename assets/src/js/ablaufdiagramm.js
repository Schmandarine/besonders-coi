export const ablaufdiagramm = () => {


    (function ($) {

        console.log("diagramm animaiton start");

        $('.ablaufdiagramm-animation-wrapper').each(function () {

            $(this).find(".animate-content:first-of-type").fadeIn();
            $(this).find(".grafikitem:first-of-type").addClass("active_item");

            $(this).find(".grafikitem").click(function (e) {

                if ($(this).hasClass("active_item")) {

                } else {
                    $(".grafikitem").removeClass("active_item");

                    var trigger_for = $(this).attr('data-diagram');
                    $(this).addClass("active_item");

                    $(".animate-content:not([data-diagram='" + trigger_for + "'])").fadeOut("fast");
                    setTimeout(function () {
                        $(".animate-content[data-diagram='" + trigger_for + "']").fadeIn();
                    }, 800);
                };
            });
        });
    })(jQuery);



}