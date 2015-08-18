/** @type {number} Скорость прокрутки/скрытия шапки (1 – 100%, 2 – 200%, …) */
const speed = 1;


/**
 * Обновляет размер правой части сайта
 */
function refreshMapWidth() {
    var map = $('.header .header-map .wrapper-map #map');
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var leftSideWidth = $('.content .offers').width();

    if (windowWidth > 990) { // @see adaptive.css @media (max-width: 990px)
        map.css('width', (windowWidth - leftSideWidth - 0) + 'px');
        map.css('height', (windowHeight - 40) + 'px');
        $('.city').css('width', map.css('width'));
    }
    else {
        $('.city').attr('style', '');
    }
}

/**
 * Устанавливает позицию меню
 * @param scroll
 */
function fixMenu() {
    var offers = $('.offers');

    if (
        $(window).scrollTop() - $('.header-wrapper').height() > -22
    ) { // -22 – высота header + отступы
        offers.addClass('fix-menu');
    }
    else {
        offers.removeClass('fix-menu');
    }
}

$(document).ready(function () {
    $(window).resize(function () {
        refreshMapWidth();
    });
    refreshMapWidth();

    $(window).scroll(function () {
        fixMenu();
    });
    fixMenu();
});
