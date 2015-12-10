<div id="card_high">
    <div class="header">
        <img src="images/_DELME_card.jpg" alt="" align="right">
        <h2>Эконом класс от <span>149 руб.</span></h2>
        <p>Renault Logan, Kia Rio, Hyundai Solar</p>
    </div>

    <? foreach(range(1, 2)as $i): ?>
    <div class="line">
        <div class="info">
            <p class="name">
                Компания "Аренда Авто"
            </p>
            <p class="link -small">
                <a href="#">imperia-club.xom</a>
            </p>
            <p class="phone">
                +7 (495) 995-000-5
            </p>
            <p class="address -small">
                Москва, 1-й Красногвардейский пр., д. 12, стр. 2
            </p>
        </div>
        <div class="more">
            <a href="#">Цены</a>
        </div>
        <div class="price -aright">
            <span>от 400 руб./час</span>
            <span class="button -green">Забронировать</span>
        </div>
    </div>
    <? endforeach; ?>

</div>
