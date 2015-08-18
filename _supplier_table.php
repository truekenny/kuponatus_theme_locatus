<!-- Перед таблицей, которую надо скрыть (раскрыть цены), надо поместить таблицу с классом expand следующего вида -->
<table class="expand" data-width="35% 45% 20%">
    <tr class="line">
        <!-- rowspan = 1! -->
        <td rowspan="1" class="wrap"><a href=".">Пейнтбол 1500 шаров Пейнтбол 1500 шаров Пейнтбол 1500 шаров</a>
        </td>
        <td><a href="#">раскрыть цены</a></td>
        <td><a href="#">1 111 - 1 333 руб.</a></td>
    </tr>
    <tr>
        <td colspan="3">
            <hr class="clear">
        </td>
    </tr>
</table>

<table data-width="35% 45% 20%">

    <tr class="line">
        <!-- rowspan="4" – здесь указывается кол-во строк в блоке -->
        <td rowspan="4" class="wrap"><a href=".">Пейнтбол 1500 шаров Пейнтбол 1500 шаров Пейнтбол 1500
                шаров</a>
        </td>
        <td>понедельник-пятница понедельник-пятница понедельник-пятница</td>
        <td><a href="." target="_blank">1 333 руб.</a></td>
    </tr>

    <tr class="line">
        <td>понедельник-пятница понедельник-пятница понедельник-пятница</td>
        <td><a href="." target="_blank">1 555 руб.</a></td>
    </tr>

    <tr class="line">
        <td>понедельник-пятница</td>
        <td><a href="." target="_blank">1 440 руб.</a></td>
    </tr>

    <tr class="line">
        <td>понедельник-пятница</td>
        <td><a class="red" href="." target="_blank">1 440 руб.</a></td>
    </tr>

    <tr>
        <td colspan="3">
            <hr class="clear">
        </td>
    </tr>

</table>