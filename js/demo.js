Locatus.Demo = (function ($) {
    /**
     * Отключает ссылки в макете
     */
    function disableLinks() {
        $('a').click(function(e) {
            if($(this).hasClass('no-demo')) {

                return;
            }

            alert('Это ссылка, но в макете она никуда не ведёт');
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
