/**
 * Управляет отображением предложений и карт
 */
function onClickExpandOffers() {
    $('.content .offers div.expand div').click(function () {
        $('body').removeClass('hide-offers-maps');

        $(this).parents('div.expand').hide();
    });
}

$(document).ready(function () {
    var expand = $('.content .offers div.expand');

    if (expand) {
        $('body').addClass('hide-offers-maps');
    }

    onClickExpandOffers();
});
