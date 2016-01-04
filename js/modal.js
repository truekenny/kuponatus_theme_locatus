Locatus.Modal = (function ($) {
    /** @type {number} Минимальный отступ модального окна от верхней и нижней части страницы, пх */
    var minMargin = 10;

    /**
     * Показывает/скрывает модальное окно по классу
     * @param _class
     */
    function handlerToggleModal(_class) {
        $('.' + _class).toggleClass('show');

        marginModal(_class);
        // Для тех браузеров, которые не могут вычислить высоту сразу
        setTimeout(function(){
            marginModal(_class);
        }, 100);
    }

    /**
     * Скрывает модальное окно по элементу внутри него
     * @param blockInside
     */
    function handlerHideModal(blockInside) {
        $(blockInside).parents('.modal').removeClass('show');
    }

    /**
     * Вычисляет выравнивание модального окна
     * @param element
     */
    function marginModal(element) {
        var _window;

        if(typeof element == 'string') {
            _window = $('.' + element).find('.window');
        }
        else {
            _window = $(element).find('.window');
        }

        var height_Window = _window.height();
        var heightWindow = $(window).height();

        var marginTop = parseInt((heightWindow - height_Window) / 2);
        marginTop = Math.max(marginTop, minMargin);

        _window.css('margin-top', marginTop + 'px');

        _window.css('max-height', (heightWindow - minMargin * 2) + 'px');
    }

    /**
     *  Скрыть все модальные окна
     */
    function hideAll() {
        $('.modal').removeClass('show');
    }

    function init() {
        $('#modal-demo span').click(function () {
            handlerToggleModal($(this).data('class'));
        });

        $('.modal .close').click(function () {
            handlerHideModal(this);
        });

        $(document).keydown(function (e) {
            e.keyCode == 27 && hideAll();
        });

        $(".modal .window").niceScroll({
            cursorcolor: '#dddddd',
            horizrailenabled: false
        });

        $(window).resize(function () {
            marginModal('modal.show');
        });

        // Распахнуть/свернуть одну линию предложений
        $('.modal .window .list .header').click(function () {
            $(this).toggleClass('show');
            marginModal($(this).parents('.modal'));
        });

        $('.modal').click(function (e) {
            // Обрабытывать клик только непосредственно по .modal
            if (e.target !== this) {
                return;
            }

            hideAll();
        });
    }

    return {
        init: init
    }
})(jQuery);
