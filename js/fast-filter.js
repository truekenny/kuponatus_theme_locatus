/**
 * Отображение для мобильной версии
 * @returns {boolean}
 */
function isMobile() {
    return $('.content .fast-filter .type-3').width() < 500;
}

/**
 * Сбрасывает фильтр
 */
function resetFastFilter() {
    $('.content .fast-filter .type-3 .others div').removeClass('selected');
    $('.content .fast-filter .type-3 .others div.other-1').addClass('selected');

    $('.content .fast-filter .blocks > div').css('display', 'none').removeClass('border-right');
    $('.content .fast-filter .blocks > div.block-1').css('display', 'block');
    freshBorder(1);
}

/**
 * Устанавливает для элементов закладки id границу (border)
 * @param id
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
 * @param other
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
 * @param other
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
 */
function hideFastFilterValues() {
    $('.content .fast-filter .lines > p').css('display', 'none');
    $('.content .fast-filter .blocks > div').css('display', 'none');
}

/**
 * Выбирает указанную страницу быстрых фильтров
 * @param num
 */
function selectFastFilterPage(num) {
    $('.other-' + num).mouseup();
}

/**
 * В зависимости от размера прокручиваемого блока устанавливает бордюр
 */
function layoutFastFilterBorders() {
    if ($('.content .fast-filter .type-3 .others').width() >= niceFastFiler.getContentSize().w) {
        $('.content .fast-filter .type-3').addClass('border');
    }
}

/**
 * Устанавливает для значения быстрого фильтра необходимый отступ, чтобы текст был вертикально центрирован
 */
function calcFastFilterValuesVerticalAlign() {
    $('.content .fast-filter .blocks > .wrap').each(function () {
        $(this).css('padding-top', 0);

        console.log($(this).height());
        console.log($(this).find('a').height());
        var padding = parseInt(($(this).height() - $(this).find('a').height()) / 2);

        padding = Math.max(8, padding);
        $(this).css('padding-top', padding + 'px');
    });
}

var pageX = -1;

$(document).ready(function () {
    $('.content .fast-filter .type-3 [class*="other-"]').mousedown(function (e) {
        pageX = e.pageX;
    })
        .mouseup(function (e) {
            if ((Math.abs(pageX - e.pageX) > 5) && (pageX != -1)) {

                return;
            }

            $('.content .fast-filter .type-3 [class*="other-"]').removeClass('selected');
            $(this).addClass('selected');

            hideFastFilterValues();

            var id = $(this).data('id');
            $('.content .fast-filter .lines > p.line-' + id).css('display', 'block');
            $('.content .fast-filter .blocks > div.block-' + id).css('display', 'block');

            scrollTo($(this));

            freshBorder(id);

            calcFastFilterValuesVerticalAlign();
        });


    $(window).resize(function () {
        var id = $('.content .fast-filter .type-3 .selected[class*="other-"]').data('id');
        freshBorder(id);
    });

    resetFastFilter();
    enableFastFilterScroll();
    layoutFastFilterBorders();
    calcFastFilterValuesVerticalAlign();
});
