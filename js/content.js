Locatus.Content = (function ($) {
    /**
     * Управляет видимостью предложений и карт
     */
    function onClickExpandOffers() {
        $('.content .offers div.expand div').click(function () {
            $('body').removeClass('hide-offers-maps');

            $('.content .offers div.expand').hide();
        });
    }

    function init() {
        var expand = $('.content .offers div.expand');

        if (expand) {
            $('body').addClass('hide-offers-maps');
        }

        onClickExpandOffers();
    }

    return {
        init: init
    }
})(jQuery);
