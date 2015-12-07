Locatus.Functions = (function ($) {
    function rand(min, max) {
        return (Math.random() * (max - min) + min).toFixed(4);
    }

    function escapeHtml(text) {
        var map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };

        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }

    function init() {

    }

    return {
        init: init,
        rand: rand,
        escapeHtml: escapeHtml
    }
})(jQuery);
