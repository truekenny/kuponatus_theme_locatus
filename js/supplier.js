Locatus.Supplier = (function ($) {
    /**
     * Обеспечиает подсетку маркера, который соответствует поставщику, на карте
     */
    function init() {
        var body = $('body');

        body.on('mouseenter', '.js-supplier', function () {
            var point = $(this).find('.point');

            Locatus.Map.selectPoint($(point).data('id'), true);
        });

        body.on('mouseleave', '.js-supplier', function () {
            var point = $(this).find('.point');

            Locatus.Map.selectPoint($(point).data('id'), false);
        });
    }

    return {
        init: init
    }
})(jQuery);
