Locatus.Menu = (function ($) {
    /**
     * Инициализирует меню
     */
    function init() {
        $('.menu > li').click(function () {
            // Хак включает li:hover в iOS; в iOS не работает li:hover в данном конкретном случае.

            return true;
        });

        var nice = $('.menu.scroll').niceScroll({
            touchbehavior: true, // передвигать левой кнопкой мыши
            cursorcolor: '#999999',
            cursorwidth: '1px',
            cursoropacitymax: 0.0,
            autohidemode: "leave", // скролл видим, если курсок внутри меню
            railvalign: "top"
        });

        var isFF = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

        if (!isFF) {
            // Хак смещает подменю при скролле меню; в FF смещение подменю происходит само.
            nice.scrollend(function (e) {
                $(".menu.scroll ul").css('margin-left', (-e.current.x - 11) + 'px'); // .header .menu ul margin-left
            });
        }

        // Хак отключает вертикальную прокрутку меню
        var _super = nice.getContentSize;
        nice.getContentSize = function () {
            var page = _super.call(nice);
            page.h = nice.win.height();

            return page;
        }
    }

    return {
        init: init
    }
})(jQuery);
