Locatus.Map = (function ($) {
    var map;
    if(!Locatus.Demo.isDevelop()) {
        ymaps.ready(initMap);
    }

    /**
     * Инициализирует карту
     */
    function initMap() {
        var mapInit = {
            center: [55.76, 37.64],
            zoom: 11,
            controls: ['zoomControl', 'geolocationControl', 'fullscreenControl']
        };

        map = new ymaps.Map("map", mapInit);
    }

    function init() {
    }

    return {
        init: init
    }
})(jQuery);
