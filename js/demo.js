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

    /**
     * Страница отображается в режиме разработки
     * @returns {boolean}
     */
    function isDevelop() {
        return (location.hostname.indexOf('.loc') != -1);
    }

    function init() {
        disableLinks();
    }

    return {
        init: init,
        isDevelop: isDevelop
    }
})(jQuery);
