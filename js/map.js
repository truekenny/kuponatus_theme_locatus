Locatus.Map = (function ($) {
    var map;

    var points = [];

    ymaps.ready(initMap);

    /**
     * Ищет точки для карты
     */
    function browsePoints() {
        $('.point').each(function () {
            var id = addPoint(
                [$(this).data('x'), $(this).data('y')],
                $(this).data('name'),
                $(this).data('url'),
                $(this).data('cluster'),
                $(this).data('caption'),
                $(this).data('body')
            );

            $(this).attr('data-id', id);
            $(this).parent('div').addClass('id-' + id).addClass('js-supplier');
        });
    }

    /**
     * Добавляет точку на карты
     * @param {Array} coords Координаты
     * @param {string} hint Подсказка
     * @param {string} url Ссылка
     * @param {string} cluster Название кластера
     * @param {string} clusterCaption Краткое название точки во всплывающем окне кластера
     * @param {string} clusterBalloonContentBody Описание точки во всплывающем окне кластера
     * @returns {Number} Индекс точки
     *
     * @see Всплывающее окно: https://yastatic.net/doccenter/images/tech-ru/maps/doc/freeze/S66wiqr3L7kQMQRrk8hTvp3iKUM.png
     */
    function addPoint(coords, hint, url, cluster, clusterCaption, clusterBalloonContentBody) {
        clusterBalloonContentBody = clusterBalloonContentBody || '';
        var escapeUrl = Locatus.Functions.escapeHtml(url);

        $([[map, points]]).each(function () {
            var placemark = new ymaps.Placemark(coords, {
                hintContent: hint,
                clusterCaption: clusterCaption ? clusterCaption : hint,
                balloonContentBody: clusterBalloonContentBody + "<br><a href='" + escapeUrl + "'>" + escapeUrl + "</a>"
            }, {iconColor: 'red'});

            this[0].geoObjects.add(placemark);
            this[1].push(placemark);

            // Сохраняю для точки ID
            placemark.options.set({id: this[1].length});
            // Сохраняю для точки cluster
            placemark.options.set({cluster: cluster});
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
                $('.js-supplier.id-' + id).addClass('hover');
            });

            placemark.events.add(['mouseleave'], function (e) {
                var id = placemark.options.get('id');

                setColorPoint(id, 'red');
                $('.js-supplier.id-' + id).removeClass('hover');
            });

        });

        return points.length;
    }

    /**
     * Добавляет точку на карты
     * @param {Array} coords Координаты
     * @param {string} hint Подсказка
     * @param {string} url Ссылка
     */
    function addPointAsynchronous(coords, hint, url) {
        ymaps.ready(function() {
            addPoint(coords, hint, url);
        });
    }

    /**
     * Определяет для точек кластеры
     */
    function browseClusters() {
        $([[map, points]]).each(function () {
            var clusters = {};

            var map = this[0];
            var points = this[1];

            $(points).each(function () {
                var cluster = this.options.get('cluster');

                if(typeof cluster == "undefined" || cluster == '') {
                    return;
                }

                if (typeof clusters[cluster] == "undefined") {
                    clusters[cluster] = new ymaps.Clusterer();
                }

                clusters[cluster].add(this);
            });

            for(var key in clusters) {
                map.geoObjects.add(clusters[key]);
            }
        });
    }

    /**
     * Устанавливает новый цвет для точки
     * @param {Number} index Индекс точки
     * @param {string} color Цвет
     */
    function setColorPoint(index, color) {
        $([points]).each(function () {
            if(typeof this[index-1] == "undefined") {
                return;
            }

            this[index - 1].options.set({iconColor: color});
        });
    }

    /**
     * Инициализирует карту
     */
    function initMap() {
        var mapConfig = $('.map-config');

        var mapInit = {
            center: [mapConfig.data('x'), mapConfig.data('y')],
            zoom: mapConfig.data('zoom'),
            controls: ['zoomControl', 'geolocationControl', 'fullscreenControl']
        };

        map = new ymaps.Map("map", mapInit);

        // Пример
        /*
         addPoint([55.7512200, 37.6155600], '1 ПРИМЕР: Автомойка «ГарЭкс»', 'http://ya.ru', 'cluster1');
         addPoint([55.7522200, 37.6155600], '2 ПРИМЕР: Автомойка «ГарЭкс»', 'http://ya.ru', 'cluster1');
         addPoint([55.7532200, 37.6155600], '3 ПРИМЕР: Автомойка «ГарЭкс»', 'http://ya.ru', 'cluster1');
         */

        browsePoints();
        browseClusters();
    }

    function init() {
    }

    return {
        init: init,
        setColorPoint: setColorPoint,
        addPoint: addPointAsynchronous
    }
})(jQuery);
