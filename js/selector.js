Locatus.Lines = (function ($) {
    function init() {
        $('.selector').on('click', function () {
            if($(this).hasClass('show')) {
                $('.selector').removeClass('show');
            }
            else {
                $('.selector').removeClass('show');

                $(this).addClass('show');
            }
        });

        $('.selector + div > div').niceScroll({
            cursorcolor: '#dddddd',
            horizrailenabled: false
        });
        $('.selector + div > div > div').on('click', function () {
            var data = $(this).find('div:first-child').html();

            var selector = $(this).parent().parent().prev();
            selector.html(data);
            selector.removeClass('show');
        });
    }

    return {
        init: init
    }
})(jQuery);
