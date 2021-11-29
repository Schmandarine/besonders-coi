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

        console.log("posts filter init");

        $block.find('.filter_form select').change(function () {

            var filter = $('.filter_form');
            var ajax_return_wrapper = $('.posttype_filter_ajax_return');

            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST

                beforeSend: function (xhr) {
                    ajax_return_wrapper.animate({
                        opacity: 0
                    }, 120);
                    $('.loader').css("display", "block");
                },
                success: function (data) {
                    $('.loader').css("display", "none");
                    ajax_return_wrapper.animate({
                        opacity: 1
                    }, 250);
                    ajax_return_wrapper.html(data);
                }
            });
            return false;
        });

    }

    // Initialize each block on page load (front end).
    $(document).ready(function () {
        $('.posts_filter_wrapper').each(function () {
            initializeBlock($(this));
        });
    });

    // Initialize dynamic block preview (editor).
    if (window.acf) {
        window.acf.addAction('render_block_preview/type=posts_filter', initializeBlock);
    }

})(jQuery);