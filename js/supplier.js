$(document).ready(function () {
    var suppliers = $('div.supplier');

    suppliers.mouseenter(function () {
        var point = $(this).find('.point');

        setColorPoint($(point).data('point-id'), 'green');
    });

    suppliers.mouseleave(function () {
        var point = $(this).find('.point');

        setColorPoint($(point).data('point-id'), 'red');
    });
});
