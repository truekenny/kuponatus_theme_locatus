Locatus.Modal = (function ($) {
    /**
     * Показывает/скрывает модальное окно по классу
     * @param _class
     */
    function handlerToggleModal(_class) {
        $('.' + _class).toggleClass('show');
        marginModal(_class);
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
        marginTop = Math.max(marginTop, 0);

        _window.css('margin-top', marginTop + 'px');
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

        $('.modal .window .list .header').click(function () {
            $(this).toggleClass('show');
            marginModal($(this).parents('.modal'));


        });
    }

    return {
        init: init
    }
})(jQuery);
