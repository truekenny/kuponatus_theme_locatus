Locatus.Selects = (function ($) {
    /** @type {number} Максимальная длина текста на кнопке */
    var maxButtonText = 9;

    /** @type {number} Максимальная высота меню от высоты браузера, от 0 до 1 */
    var maxMenuHeight = 1 / 2;

    function init() {
        var buttons = $('.base-selects > div');

        // Обрезаение текста кнопки, не могу у кнопки сделать overflow:hidden, потому что внутри неё меню
        buttons.find('span').each(function () {
            $(this).text(
                ($(this).text().length > maxButtonText)
                    ? ($(this).text().substring(0, maxButtonText) + "…")
                    : $(this).text()
            );
        });

        // Обработка клика по кнопке
        buttons.on('click', function () {
            $(this).toggleClass('open');

            $(this).find('div').scrollTop(0);
        });

        // Обработка лива кнопки/меню
        buttons.on('mouseleave', function () {
            $(this).removeClass('open');
        });

        // Изменение максимальной высоты меню
        $(window).resize(function () {
            buttons.find('div').each(function () {
                var maxHeight = Math.round($(window).height() * maxMenuHeight) + 'px';
                $(this).css('max-height', maxHeight);
            });
        });
        $(window).resize();

        // Вертикальный скролл для меню
        buttons.find('div').niceScroll({
            cursorcolor: '#dddddd',
            horizrailenabled: false
        });

    }

    return {
        init: init
    }
})(jQuery);
