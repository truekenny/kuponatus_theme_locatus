<? foreach (['понедельник-пятница понедельник-пятница понедельник-пятница', '', 'пн-пт'] as $days): ?>
    <table data-width="35% 45% 20%">

        <tr class="line">
            <td rowspan="1"><a href=".">Пейнтбол 1500 шаров</a>
            </td>
            <td><?= $days ?></td>
            <td><a href="." target="_blank">1 333 руб.</a></td>
        </tr>

        <tr>
            <td colspan="3">
                <hr class="clear">
            </td>
        </tr>

    </table>
<? endforeach; ?>