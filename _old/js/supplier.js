Locatus.Supplier = (function ($) {
    /**
     * Обеспечиает подсетку маркера, который соответствует поставщику, на карте
     */
    function init() {
        var suppliers = $('div.supplier');

        suppliers.mouseenter(function () {
            var point = $(this).find('.point');

            Locatus.Map.setColorPoint($(point).data('id'), 'green');
        });

        suppliers.mouseleave(function () {
            var point = $(this).find('.point');

            Locatus.Map.setColorPoint($(point).data('id'), 'red');
        });
    }

    return {
        init: init
    }
})(jQuery);
