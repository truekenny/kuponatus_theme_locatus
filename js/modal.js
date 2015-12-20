Locatus.Modal = (function ($) {
    /**
     * Показывает/скрывает модальное окно по классу
     * @param _class
     */
    function handlerShowModal(_class) {
        $('.' + _class).toggle();
        marginModal(_class);
    }

    /**
     * Скрывает модальное окно по элементу внутри него
     * @param blockInside
     */
    function handlerHideModal(blockInside) {
        $(blockInside).parents('.modal').hide();
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

    function init() {
        $('#modal-demo span').click(function () {
            handlerShowModal($(this).data('class'));
        });

        $('.modal .close').click(function () {
            handlerHideModal(this);
        });
    }

    return {
        init: init
    }
})(jQuery);
