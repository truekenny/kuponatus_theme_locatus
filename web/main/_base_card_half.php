<div class="base-card-half">

    <? foreach(range(1, rand(1, 6))as $i): ?>
    <div class="card">
        <div class="image -box" style="background-image: url('images/_DELME_card_half_<?= $i % 2 + 1 ?>.jpg');">

        </div>
        <div class="text -box">
            <h2>Ботинки 6 in Premium Boot</h2>
            <p>
                Ботинки Timberland, выполнены в стандартном жёлтом цвете. Подошва у ботинок жёлто-белая, верх ботинок и
                шнурки более тёмного цвета, чем сами ботинки. У обуви имеется подворот, который можно убрать.
            </p>
        </div>

        <div class="lower">
            <div class="break -box"></div>
            <div class="cost">
                16 190 руб.
            </div>
            <div class="buttons">
                <a class="-green" href="#">Забронировать</a>
                <a href="#">Подробнее</a>
            </div>
        </div>
    </div>
    <? endforeach; ?>

</div>
