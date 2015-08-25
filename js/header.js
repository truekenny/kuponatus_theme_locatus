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
    $(window).scroll(function () {
        fixMenu();
    });
    fixMenu();
});
