<!--
    Если блок .lines расположен непосредственно после .line,
    то он будет скрыт и его видимостью будет управлять ссылка .js-lines
-->

<div class="lines">
    <? foreach(range(1, 10)as $i): ?>
        <div class="line">
            <div class="name">
                Кафе и бар
            </div>
            <div class="more">
                <?= rand(10, 1000) ?> предложений
            </div>
            <div class="price -aright">
                <span>от <?= rand(10, 1000) ?> руб./час</span>
                <a class="button -green" href="#">Подробнее</a>
            </div>
        </div>
    <? endforeach; ?>
</div>
