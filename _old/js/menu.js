Locatus.Menu = (function ($) {
    var nice;

    /**
     * Скрывает рамку, если меню пустое
     */
    function hideEmpty() {
        if(!$('.menu-wrapper ul').size()) {
            $('.menu-wrapper').hide();
        }
    }

    /**
     * Скрывает вертикальную прокрутку в блоке меню
     */
    function hideVerticalScroll() {
        // Хак отключает вертикальную прокрутку меню
        var _super = nice.getContentSize;
        nice.getContentSize = function () {
            var page = _super.call(nice);
            page.h = nice.win.height();

            return page;
        }
    }

    /**
     * Двигает подменю при скроле меню
     * Для браузеров, которые не могут это сделать автоматически
     */
    function moveSubmenu() {
        var isFF = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

        if (!isFF) {
            // Хак смещает подменю при скролле меню; в FF смещение подменю происходит само.
            nice.scrollend(function (e) {
                $(".menu.scroll ul").css('margin-left', (-e.current.x - 11) + 'px'); // .header .menu ul margin-left
            });
        }
    }

    /**
     * Инициализирует меню
     */
    function init() {
        $('.menu > li').click(function () {
            // Хак включает li:hover в iOS; в iOS не работает li:hover в данном конкретном случае.

            return true;
        });

        nice = $('.menu.scroll').niceScroll({
            touchbehavior: true, // передвигать левой кнопкой мыши
            cursorcolor: '#999999',
            cursorwidth: '1px',
            cursoropacitymax: 0.0,
            autohidemode: "leave", // скролл видим, если курсок внутри меню
            railvalign: "top"
        });

        if(typeof nice.getContentSize != "undefined") {
            moveSubmenu();
            hideVerticalScroll();
        }

        hideEmpty();
    }

    return {
        init: init
    }
})(jQuery);
