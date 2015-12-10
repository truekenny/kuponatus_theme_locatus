Locatus.Demo = (function ($) {
    /**
     * Отключает ссылки в макете
     */
    function disableLinks() {
        $('a').click(function(e) {
            alert('Это ссылка, но в макете она никуда не ведет');
            e.preventDefault();
        });
    }

    function init() {
        disableLinks();
    }

    return {
        init: init
    }
})(jQuery);
