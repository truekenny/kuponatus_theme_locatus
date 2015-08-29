Locatus.Map = (function ($) {
    var map;
    var contentMap;

    var points = [];
    var contentPoints = [];

    /**
     * Ищет точки для карты
     */
    function browsePoints() {
        $('.point').each(function () {
            var id = addPoint([$(this).data('point-x'), $(this).data('point-y')], $(this).data('point-name'), $(this).data('point-url'));

            $(this).attr('data-point-id', id);
            $(this).parent('div.supplier').addClass('point-id-' + id);
        });
    }

    /**
     * Добавляет точку на карты
     * @param {Array} coords Координаты
     * @param {string} hint Подсказка
     * @param {string} url Ссылка
     * @returns {Number} Индекс точки
     */
    function addPoint(coords, hint, url) {
        $([[map, points], [contentMap, contentPoints]]).each(function (index) {
            var placemark = new ymaps.Placemark(coords, {hintContent: hint}, {iconColor: 'red'});

            this[0].geoObjects.add(placemark);
            this[1].push(placemark);

            // Сохраняю для точки ID
            placemark.options.set({id: this[1].length});
            // Сохраняю для точки url
            placemark.options.set({url: url});

            placemark.events.add(['click'], function (e) {
                var url = placemark.options.get('url');

                if (url) {
                    location = url;
                }
            });

            placemark.events.add(['mouseenter'], function (e) {
                var id = placemark.options.get('id');

                setColorPoint(id, 'green');
                $('.supplier.point-id-' + id).addClass('hover');
            });

            placemark.events.add(['mouseleave'], function (e) {
                var id = placemark.options.get('id');

                setColorPoint(id, 'red');
                $('.supplier.point-id-' + id).removeClass('hover');
            });

        });

        return points.length;
    }

    /**
     * Устанавливает новый цвет для точки
     * @param {Number} index Индекс точки
     * @param {string} color Цвет
     */
    function setColorPoint(index, color) {
        $([points, contentPoints]).each(function () {
            this[index - 1].options.set({iconColor: color});
        });
    }

    /**
     * Инициализирует карту
     */
    function initMap() {
        var mapInit = {
            center: [55.76, 37.64],
            zoom: 9,
            controls: ['zoomControl', 'geolocationControl', 'fullscreenControl']
        };

        map = new ymaps.Map("map", mapInit);
        contentMap = new ymaps.Map("content-map", mapInit);

        // Пример
        //addPoint([55.7522200, 37.6155600], 'ПРИМЕР: Автомойка «ГарЭкс»', 'http://ya.ru');

        browsePoints();
    }

    function init() {
        ymaps.ready(initMap);
    }

    return {
        init: init,
        setColorPoint: setColorPoint
    }
})(jQuery);
