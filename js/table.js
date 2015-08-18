/**
 * Обновляет размеры ячеек таблицы
 */
function refreshTable() {
    var offerWidth = $('.offers').width() - 50; // 50 – за счёт отступов

    $('.offers table').each(function () {
        var that = $(this);

        if (!that.data('width')) {
            return;
        }

        var width = that.data('width').split(' ');
        $(width).each(function (i) {
            width[i] = (offerWidth * parseInt(this) / 100) + 'px';
        });

        $(['max-width', 'min-width']).each(function () {
            if (that.hasClass('simple')) {
                that.find('tr.line td:first-child').css(this, width[0]);
                that.find('tr.line td:first-child + td').css(this, width[1]);
                that.find('tr.line td:first-child + td + td').css(this, width[2]);
            }
            else {
                that.find('tr.line td[rowspan]').css(this, width[0]);

                that.find('tr.line td[rowspan] + td').css(this, width[1]);
                that.find('tr.line td:first-child:not([rowspan])').css(this, width[1]);

                that.find('tr.line td[rowspan] + td + td').css(this, width[2]);
                that.find('tr.line td:first-child:not([rowspan]) + td').css(this, width[2]);
            }
        });
    });
}

/**
 * Управляет видимостью строк в таблице
 */
function onClickExpandTable() {
    $('table.expand a').click(function (e) {
        e.preventDefault();

        $(this).parents('table.expand').css('display', 'none');
        $(this).parents('table.expand').next().css('display', 'table');
    });
}

$(document).ready(function () {
    $(window).resize(function () {
        refreshTable();
    });

    refreshTable();
    onClickExpandTable();
});
