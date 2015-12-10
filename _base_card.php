<div id="card">
    <div class="header">
        <img src="images/_DELME_card_1.jpg" alt="" align="right">
        <h2>Бильярдный клуб "Империя"</h2>
        <a href="#">imperia-club.xom</a>
        <p>г.Москва, 1-й Боткинский пр., д. 7</p>
    </div>

    <? foreach(range(1, 2)as $i): ?>
    <div class="line">
        <div class="name">
            Кафе и бар
        </div>
        <div class="more">
            <a href="#">Меню</a>
        </div>
        <div class="price -aright">
            <span>от 400 руб./час</span>
            <span class="button -green">Забронировать</span>
        </div>
    </div>
    <? endforeach; ?>

    <div class="line">
        <div class="name">
            Кафе и бар
        </div>
        <div class="more">
            <a href="#">Подробнее</a>
        </div>
        <div class="price -aright">
            <span>от 400 руб.</span>
            <span class="button">Подробнее</span>
        </div>
    </div>
</div>
