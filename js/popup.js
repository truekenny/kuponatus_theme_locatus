Locatus.Popup = (function ($) {
    function init() {
        var popupButton = $(".popup > div");

        popupButton.on('click', function (e) {
            if ($(e.target).hasClass('button')) {
                $('.popup').removeClass('show hide');
                $(this).parent().addClass('show');
            }
        });

        popupButton.on('mousemove', function (e) {
            if ($(e.target).hasClass('button')) {
                $('.popup').removeClass('hide');
            }
        });

        $(".popup").on('click', ".close", function () {
            var popup = $(this).closest(".popup");
            popup.removeClass('show');

            // Настильно скрываю элемент, который под :hover виден
            popup.addClass("hide");
        });

        $(".popup .popup-window").niceScroll({
            cursorcolor: '#dddddd',
            horizrailenabled: false
        });

        // Закрываю все попапы, если есть клик вне их пределах
        $("body").click(function (e) {
            if ($(e.target).closest(".popup").length == 0) {
                $('.popup').removeClass('show');
            }
        });

        $(document).keydown(function (e) {
            e.keyCode == 27 && $('.popup .close').click();
        });

    }

    return {
        init: init
    }
})(jQuery);
