<!--
    Если блок .lines расположен непосредственно после .line,
    то он будет скрыт и его видимостью будет управлять ссылка .js-lines
-->

<div class="lines">
    <? foreach(range(1, 2)as $i): ?>
        <div class="line">
            <div class="name">
                Кафе и бар
            </div>
            <div class="more -box">
                <a href="#">Меню</a>
            </div>
            <div class="price -aright">
                <span>от 400 руб./час</span>
                <a class="button -green" href="#">Забронировать</a>
            </div>
        </div>
    <? endforeach; ?>

    <div class="line no-more">
        <div class="name">
            <? foreach(range(1, 10)as $i): ?>
                <a href="#">Кафе и бар <?= str_repeat('а', rand(0, 8)) ?></a>
            <? endforeach; ?>
        </div>
        <div class="more">
            <a href="#">Подробнее</a>
        </div>
        <div class="price -aright">
            <span>от 400 руб.</span>
            <a class="button" href="#">Подробнее</a>
        </div>
    </div>
</div>
