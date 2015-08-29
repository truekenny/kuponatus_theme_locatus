Locatus.Functions = (function ($) {
    function rand(min, max) {
        return (Math.random() * (max - min) + min).toFixed(4);
    }

    function init() {

    }

    return {
        init: init,
        rand: rand
    }
})(jQuery);
