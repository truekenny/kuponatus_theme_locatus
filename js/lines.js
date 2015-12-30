Locatus.Lines = (function ($) {
    function init() {
        $('.js-lines').click(function(e) {
            $(this).parents('.line').next().slideToggle(300); // 300 ms

            e.preventDefault();
        });
    }

    return {
        init: init
    }
})(jQuery);
