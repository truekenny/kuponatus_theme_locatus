Locatus.Filter = (function ($) {
    /**
     * Скрывает/распахивает «доп. фильтры»
     */
    function visibilityHandler() {
        $('.base-filter .block.applied table td + td').on('click', function (e) {
            $(this).parents('.applied').toggleClass('show');
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
