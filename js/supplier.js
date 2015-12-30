Locatus.Supplier = (function ($) {
    /**
     * Обеспечиает подсетку маркера, который соответствует поставщику, на карте
     */
    function init() {
        var body = $('body');

        body.on('mouseenter', '.js-supplier', function () {
            var point = $(this).find('.point');

            Locatus.Map.setColorPoint($(point).data('id'), 'green');
        });

        body.on('mouseleave', '.js-supplier', function () {
            var point = $(this).find('.point');

            Locatus.Map.setColorPoint($(point).data('id'), 'red');
        });
    }

    return {
        init: init
    }
})(jQuery);
