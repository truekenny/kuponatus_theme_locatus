Locatus.Header = (function ($) {
    /**
     * Устанавливает позицию fixed меню
     */
    function fixMenu() {
        if(!$('.menu-wrapper ul').size()) {

            return;
        }

        var offers = $('.offers');

        if (
            $(window).scrollTop() - $('.header-wrapper').height() > -22
        ) { // -22 – высота header + отступы
            offers.addClass('fix-menu');
        }
        else {
            offers.removeClass('fix-menu');
        }
    }

    function init() {
        $(window).scroll(function () {
            fixMenu();
        });
        fixMenu();
    }

    return {
        init: init
    }
})(jQuery);
