Locatus.Lines = (function ($) {
    function init() {
        $('.js-lines').click(function(e) {
            $(this).parents('.line').toggleClass('js-expanded');

            e.preventDefault();
        });
    }

    return {
        init: init
    }
})(jQuery);
