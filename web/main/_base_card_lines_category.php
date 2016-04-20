<!--
    Если блок .lines расположен непосредственно после .line,
    то он будет скрыт и его видимостью будет управлять ссылка .js-lines
-->

<div class="lines">
    <? foreach(range(1, 10)as $i): ?>
        <div class="line">
            <div class="name">
                <? if(rand(0,1)): ?>
                    <a href="#">Кафе и <?= str_repeat('бар ', rand(1, 6)) ?></a>
                <? else: ?>
                    Кафе и бар
                <? endif; ?>
            </div>
            <div class="more -box">
                <?= rand(10, 1000) ?> предложений
            </div>
            <div class="price -aright">
                <span>от <?= rand(10, 1000) ?> руб./час</span>
                <a class="button -green" href="#">Подробнее</a>
            </div>
        </div>
    <? endforeach; ?>
</div>
