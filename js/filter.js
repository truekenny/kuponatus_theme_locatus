Locatus.Filter = (function ($) {
    /**
     * Скрывает/распахивает «доп. фильтры»
     */
    function visibilityHandler() {
        $('.base-filter .block.applied').on('click', function (e) {
            e.preventDefault();

            if (e.target !== this && !$(e.target).hasClass('row')) {
                return;
            }

            $(this).toggleClass('show');
        });
    }

    function init() {
        visibilityHandler();
    }

    return {
        init: init
    }
})(jQuery);

$(document).ready(function () {
    Locatus.Filter.init();
});
