/**
 * @see http://refreshless.com/nouislider/
 */

Locatus.Slider = (function ($) {
    function init() {

        $('.js-slider').each(function () {
            noUiSlider.create(this, {
                start: [
                    $(this).parents('.block').find('.js-slider-selected-min').val(),
                    $(this).parents('.block').find('.js-slider-selected-max').val()
                ],
                range: {
                    'min': $(this).data('min'),
                    'max': $(this).data('max')
                },
                connect: true,
                behaviour: 'tap-drag',
                step: 100
            });

            var that = this;

            this.noUiSlider.on('update', function( values, handle ) {
                $(that).parents('.block').find('.js-slider-selected-min').val(parseInt(values[0]));
                $(that).parents('.block').find('.js-slider-selected-max').val(parseInt(values[1]));
            });
        });
    }

    return {
        init: init
    }
})(jQuery);
