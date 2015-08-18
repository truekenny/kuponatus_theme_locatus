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

$(document).ready(function () {
    $('.content .fast-filter .type-3 .others div').click(function () {
        $('.content .fast-filter .type-3 .others div').removeClass('selected');
        $(this).addClass('selected');

        var id = $(this).data('id');

        $('.content .fast-filter .lines > p').css('display', 'none');
        $('.content .fast-filter .lines > p.line-' + id).css('display', 'block');

        $('.content .fast-filter .blocks > div').css('display', 'none');
        $('.content .fast-filter .blocks > div.block-' + id).css('display', 'block');

        freshBorder(id);
    });


    $(window).resize(function () {
        var id = $('.content .fast-filter .type-3 .others div.selected').data('id');
        freshBorder(id);
    });

    resetFastFilter();
});
