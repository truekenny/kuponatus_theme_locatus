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
                step: $(this).data('step')
            });

            var that = this;
            this.noUiSlider.on('update', function( values, handle ) {
                $(that).parents('.block').find('.js-slider-selected-min').val(parseInt(values[0]));
                $(that).parents('.block').find('.js-slider-selected-max').val(parseInt(values[1]));
            });

            $('.js-slider-selected-min').on('change', function(){
                // null обозначает «не менять значение»
                $(this).parents('.block').find('.js-slider').get(0).noUiSlider.set([this.value, null]);
            });
            $('.js-slider-selected-max').on('change', function(){
                $(this).parents('.block').find('.js-slider').get(0).noUiSlider.set([null, this.value]);
            });
        });
    }

    return {
        init: init
    }
})(jQuery);
