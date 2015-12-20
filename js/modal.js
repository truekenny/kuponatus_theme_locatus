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
     * @param _class
     */
    function marginModal(_class) {
        var form = $('.' + _class).find('form');
        var heightForm = form.height();
        var heightWindow = $(window).height();

        var marginTop = parseInt((heightWindow - heightForm) / 2);
        marginTop = Math.max(marginTop, 0);

        form.css('margin-top', marginTop + 'px');
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

        $(".modal form").niceScroll({cursorcolor: '#dddddd'});

        $(window).resize(function () {
            marginModal('modal.show');
        });
    }

    return {
        init: init
    }
})(jQuery);
