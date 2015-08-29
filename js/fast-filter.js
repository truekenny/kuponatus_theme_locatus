Locatus.FastFilter = (function ($) {
    /**
     }
     * @returns {boolean} Мобильная вёрстка
     */
    function isMobile() {
        return $('.content .fast-filter .type-3').width() < 500;
    }

    /**
     * Сбрасывает быстрый фильтр
     */
    function resetFastFilter() {
        $('.content .fast-filter .type-3 .others div').removeClass('selected');
        $('.content .fast-filter .type-3 .others div.other-1').addClass('selected');

        $('.content .fast-filter .blocks > div').css('display', 'none').removeClass('border-right');
        $('.content .fast-filter .blocks > div.block-1').css('display', 'block');
        freshBorder(1);
    }

    /**
     * Устанавливает для элементов закладки правые границы (border)
     * @param {Number} id Номер закладки
     */
    function freshBorder(id) {
        var _isMobile = isMobile();

        $('.content .fast-filter .blocks > div').removeClass('border-right');
        $('.content .fast-filter .blocks > div.block-' + id).each(function (index) {
            if (

                ((index % 3 == 0 || index % 3 == 1) && !_isMobile)
                || (index % 2 == 0 && _isMobile)

            ) {
                $(this).addClass('border-right')
            }
        });
    }

    var niceFastFiler;

    /**
     * Включает прокрутку для быстрого фильтра
     */
    function enableFastFilterScroll() {
        niceFastFiler = $('.content .fast-filter .type-3 .others').niceScroll({
            touchbehavior: true, // передвигать левой кнопкой мыши
            cursorcolor: '#999999',
            cursorwidth: '1px',
            cursoropacitymax: 0.0,
            autohidemode: "leave", // скролл видим, если курсок внутри меню
            railvalign: "top"
        });
    }

    var timerMoving;

    /**
     * Инициализирует перемещение линии меню к выбранному фильтру
     * @param {object} other jQuery элемент
     */
    function scrollTo(other) {
        if (!other.parent().hasClass('others')) {

            return;
        }

        clearTimeout(timerMoving);
        moveTo(other);
    }

    /**
     * Перемещает линию фильтра к выбранному меню
     * @param {object} other jQuery элемент
     */
    function moveTo(other) {
        timerMoving = null;
        var sleep = 10;
        var offset = other.offset().left;
        var step = offset / 5 + ((offset > 0) ? 1 : -1);

        if (Math.abs(offset - step) < 1) {
            niceFastFiler.scrollLeft(niceFastFiler.scrollLeft() + offset);

            return;
        }

        niceFastFiler.scrollLeft(niceFastFiler.scrollLeft() + step);

        if (offset != other.offset().left) {
            timerMoving = setTimeout(function () {
                moveTo(other)
            }, sleep);
        }
    }

    /**
     * Скрывает значения фильтров
     * @param {boolean} withTimer
     */
    function hideFastFilterValues(withoutTimer) {
        if(withoutTimer === true) {
            $('.content .fast-filter .lines > p').css('display', 'none');
            $('.content .fast-filter .blocks > div').css('display', 'none');
        }
        else{
            setTimeout(function () {
                $('.content .fast-filter .lines > p').css('display', 'none');
                $('.content .fast-filter .blocks > div').css('display', 'none');
            }, 1);
        }
    }

    /**
     * Выбирает указанную закладку быстрых фильтров
     * @param {Number} num Номер закладки
     */
    function selectFastFilterPage(num) {
        setTimeout(function () {
            $('.other-' + num).mouseup();
        }, 1);
    }

    /**
     * В зависимости от размера прокручиваемого блока устанавливает бордюр
     */
    function layoutFastFilterBorders() {
        setTimeout(function () {
            if ($('.content .fast-filter .type-3 .others').width() >= niceFastFiler.getContentSize().w) {
                $('.content .fast-filter .type-3').addClass('border');
            }
        }, 1); // Без задержки не успевает отработать niceScroll (niceFastFiler.getContentSize().w даёт неверное значение)
    }

    /**
     * Разделяет блоки быстрого фильтра на «с картинкой» и «без картинки»
     */
    function fastFilterValuesWithoutImage() {
        $('.content .fast-filter .blocks > div').each(function () {
            if (!$(this).find('img').size()) {
                $(this).addClass('wrap');
            }
        });
    }

    /**
     * Устанавливает для значения быстрого фильтра необходимый отступ, чтобы текст был вертикально центрирован
     */
    function calcFastFilterValuesVerticalAlign() {
        $('.content .fast-filter .blocks > .wrap').each(function () {
            $(this).css('padding-top', 0);

            var padding = parseInt(($(this).height() - $(this).find('a').height()) / 2);

            padding = Math.max(8, padding);
            $(this).css('padding-top', padding + 'px');
        });
    }

    var pageX = -1;

    /**
     * Переключает страницы быстрого фильтра
     */
    function changePageFastFilter() {
        $('.content .fast-filter .type-3 [class*="other-"]').mousedown(function (e) {
            pageX = e.pageX;
        })
            .mouseup(function (e) {
                if ((Math.abs(pageX - e.pageX) > 5) && (pageX != -1)) {

                    return;
                }

                $('.content .fast-filter .type-3 [class*="other-"]').removeClass('selected');
                $(this).addClass('selected');

                hideFastFilterValues(true);

                var id = $(this).data('id');
                $('.content .fast-filter .lines > p.line-' + id).css('display', 'block');
                $('.content .fast-filter .blocks > div.block-' + id).css('display', 'block');

                scrollTo($(this));

                freshBorder(id);

                calcFastFilterValuesVerticalAlign();
            });
    }

    function init() {
        changePageFastFilter();

        $(window).resize(function () {
            var id = $('.content .fast-filter .type-3 .selected[class*="other-"]').data('id');
            freshBorder(id);
        });

        resetFastFilter();
        enableFastFilterScroll();
        layoutFastFilterBorders();
        fastFilterValuesWithoutImage();
        calcFastFilterValuesVerticalAlign();
    }

    return {
        init: init,
        selectFastFilterPage: selectFastFilterPage,
        hideFastFilterValues: hideFastFilterValues
    }
})(jQuery);
