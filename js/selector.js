Locatus.Selector = (function ($) {
    /**
     * Инициализиует селекторы
     */
    function initSelectors() {
        // Дополняет варианты выбора порядковым номером, требуется для селекторов с множественным выбором
        $('.selector.multi').each(function () {
            var i = 0;
            $(this).next().find('.selector-options > div').each(function () {
                i++;
                $(this).attr('data-id', i);
            });
        });
    }

    /**
     * Возвращает блок options с указанным значением
     * @param value
     * @returns {HTMLElement}
     */
    function getOption(value) {
        var _option = $('<option />');
        _option.attr('selected', 'selected');
        _option.val(value);

        return _option;
    }

    /**
     * Обрабатывает видимость селекторов, при клике по основному полю
     */
    function visibilityHandler() {
        $('.selector').on('click', function () {
            if ($(this).hasClass('show')) {
                $('.selector').removeClass('show');
            }
            else {
                $('.selector').removeClass('show');

                $(this).addClass('show');
            }
        });

        // Сворачивать селекторы, если скроллим не над ними
        $(window).scroll(function () {
            if ($('.selector + div:hover').size() == 0) {
                $('.selector').removeClass('show');
            }
        });

        // Сворачивать селекторы, если кликаем за их пределами
        $(document).mouseup(function (e) {
            var container = $(".selector.show + div, .selector.show, .selector-scroll");

            if (!container.is(e.target) // Кликаем не по цели
                && container.has(e.target).length === 0) // Селектор не содержит цели
            {
                container.removeClass('show');
            }
        });
    }

    /**
     * Обрабатывает клики по содержимому селектора
     */
    function selectHandler() {
        $('.selector + div > div > div.selector-options > div').on('click', function () {
            var selector = $(this).parents().eq(2).prev();
            var data = $(this).find('div:first-child').html();
            var formSelect = selector.prev();

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

                $(this).parent().find('.selected').removeClass('selected');
                $(this).addClass('selected');

                formSelect.empty();
                formSelect.append(getOption($(this).data('value')));
            }
        });
    }

    function removeSelectedHandler() {
        $('.selector + div > div > div.selector-header ul').on('click', 'li', function () {
            var selector = $(this).parents().eq(3).prev();
            var option = selector.next().find("div[data-id=" + $(this).data("id") + "]");

            option.click();
        });
    }

    function acceptHandler() {
        $('.selector + div > div > div.selector-footer a.selector-submit').on('click', function (e) {
            e.preventDefault();

            var selector = $(this).parents().eq(2).prev();
            var list = selector.next().find('ul li');

            var result = [];

            list.each(function () {
                result.push($.trim($(this).html()));
            });

            selector.html(result.join("; "));
            selector.removeClass("show");

            // Заполнение селектора формы
            var formSelect = selector.prev();
            formSelect.empty();
            selector.next().find('.on').each(function () {
                formSelect.append(getOption($(this).data('value')));
            });
        });
    }

    /**
     * Фильтрация содержимого селектора
     */
    function filterHandler() {
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
    }

    function init() {
        var scrolls = $('.selector + div .selector-options').niceScroll({
            cursorcolor: '#B0B0B0',
            horizrailenabled: false,
            autohidemode: false,
            cursorwidth: "20px",
            cursorborderradius: "0",
            cursorborder: "0",
            railpadding: {
                top: 20,
                right: 0,
                left: 0,
                bottom: 20
            }
        });
        $(scrolls).each(function(){
            $("#" + this.id).addClass('selector-scroll');
        });

        initSelectors();

        visibilityHandler();

        selectHandler();

        removeSelectedHandler();

        filterHandler();

        acceptHandler();
    }

    return {
        init: init
    }
})(jQuery);
