<div id="base_pages">
    <ul>
        <!-- Пробельные символы между <li> добавят лишний отступ -->
        <li><a href="#">Назад</a></li><?
        foreach(range(1, 6) as $i):
            ?><li><a href="#"><?= $i ?></a></li><?
        endforeach;
        ?>...<?
        ?><li class="active"><a href="#">345</a></li><?
        ?><li><a href="#">Далее</a></li>
    </ul>
</div>
