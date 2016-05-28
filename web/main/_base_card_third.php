<!-- Отображение base-card-third карточек не предусмотрено на телефоне -->
<div class="base-card-third">

    <? foreach(range(1, rand(1, 9))as $i): ?>
        <div class="card">
            <div class="image -box" style="background-image: url('images/_DELME_card_third_<?= $i % 3 + 1 ?>.jpg');">
                <? if($i == 2): ?>
                    <div class="super -super -center">Суперцена</div>
                <? endif; ?>
            </div>
            <div class="text -box">
                <h2>Ботинки 6<? if($i != 2): ?> in Premium Boot<? endif; ?></h2>
                <p>
                    Ботинки Timberland, выполнены в стандартном жёлтом цвете. Подошва у ботинок жёлто-белая, верх ботинок и
                    шнурки более тёмного цвета, чем сами ботинки. У обуви имеется подворот, который можно убрать.
                </p>
            </div>

            <div class="lower">
                <div class="break -box"></div>
                <? if($i == 2): ?>
                    <div class="red">3 257 руб.</div>
                <? endif; ?>
                <div class="cost">
                    16 190 руб.
                </div>
                <? if($i == 2): ?>
                    <p class="-small">Бесплатная доставка</p>
                <? endif; ?>
                <div class="buttons">
                    <? if(in_array($i, [1, 2])): ?>
                        <a class="-green" href="#">Забронировать</a>
                    <? endif; ?>
                    <? if(in_array($i, [2, 3])): ?>
                        <a href="#">Подробнее</a>
                    <? endif; ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>

</div>
