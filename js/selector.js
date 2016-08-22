Locatus.Selector = (function ($) {
    function init() {
        $('.selector').on('click', function () {
            if ($(this).hasClass('show')) {
                $('.selector').removeClass('show');
            }
            else {
                $('.selector').removeClass('show');

                $(this).addClass('show');
            }
        });

        $('.selector + div > div > div').niceScroll({
            cursorcolor: '#dddddd',
            horizrailenabled: false
        });

        // Обработка выбора
        $('.selector + div > div > div.selector-options > div').on('click', function () {
            var selector = $(this).parents().eq(2).prev();
            var data = $(this).find('div:first-child').html();

            if (selector.hasClass('multi')) {
                var option = $(this);
                var list = selector.next().find('ul');

                if (option.hasClass('on')) {
                    list.find("li[data-id=" + option.data("id") + "]").remove();
                }
                else {
                    var element = $("<li>").append(data);
                    element.attr("data-id", option.data("id"));
                    list.append(element);
                }
                option.toggleClass('on');
            }
            else {
                selector.html(data);
                selector.removeClass('show');
            }
        });

        // Удалить из списка выбранных
        $('.selector + div > div > div.selector-header ul').on('click', 'li', function () {
            var selector = $(this).parents().eq(3).prev();
            var option = selector.next().find("div[data-id=" + $(this).data("id") + "]");

            option.click();
        });

        // Фильтрация списка
        $('.selector + div > div > div.selector-header input').on('keyup change', function () {
            var text = $(this).val();
            var selector = $(this).parents().eq(3).prev();
            var options = selector.next().find("div.selector-options > div");

            options.removeClass('hide');
            options.each(function () {
                if (text != '' && $(this).html().indexOf(text) == -1) {
                    $(this).addClass('hide');
                }
            });
        });

        // Кнопка Выбрать
        $('.selector + div > div > div.selector-footer a').on('click', function (e) {
            e.preventDefault();

            var selector = $(this).parents().eq(2).prev();
            var list = selector.next().find('ul li');
            var result = [];

            list.each(function () {
                result.push($.trim($(this).html()));
            });

            selector.html(result.join("; "));
            selector.removeClass("show");
        });
    }

    return {
        init: init
    }
})(jQuery);
