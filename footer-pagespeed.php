<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package besonders-coi
 */

?>



</div><!-- #page -->	

<?php wp_footer(); ?>

<script type="text/javascript">
    (function ($) {

        $(document).ready(function() {
            //console.log("jquery ready");
        })
    })(jQuery);


    document.getElementById("search-trigger").addEventListener("click", toggleSearch);
    function toggleSearch() {
        document.getElementById("search-form-wrapper").classList.toggle("visible");
        document.querySelector("#search").focus();
    }
</script>

</body>
</html>
