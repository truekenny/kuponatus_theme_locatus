<!-- Отображение modal окон не предусмотрено на телефоне -->
<div class="modal show js-modal-list">
    <div class="window -effect8">
        <div class="close" title="Закрыть клавишей ESC"></div>

        <div class="header">
            <img align="right" src="images/_DELME_card_1.jpg" alt="">
            <h1>Бильярдный клуб «Империя»</h1>
            <p class="link"><a href="#">gold-shar.ru</a></p>
            <p class="address">г. Москва, ул. Онежская, д. 34, корп. 1</p>
            <p class="time">Ежедневно с 8:00 до 18:30</p>
            <p class="phone">+7 (495) 444-58-48</p>
        </div>

        <? foreach(range(1, 5) as $i): ?>
        <div class="list">
            <div class="header">
                Биоламинирование
            </div>
            <div class="line">
                <div class="name -box">
                    Биоламинирование L`OREAL короткие волосы
                </div>
                <div class="price -box">
                    от 1050 руб.
                </div>
                <div class="buttons -box">
                    <a class="-green" href="#">Записаться</a>
                </div>
            </div>
            <div class="line">
                <div class="name -box">
                    Биоламинирование L`OREAL средние волосы
                </div>
                <div class="price -box">
                    от 1050 руб.
                </div>
                <div class="buttons -box">
                    <a class="-green" href="#">Записаться</a>
                </div>
            </div>
            <div class="line">
                <div class="name -box">
                    Биоламинирование L`OREAL длинные волосы
                </div>
                <div class="price -box">
                    от 1050 руб.
                </div>
                <div class="buttons -box">
                    <a class="-green" href="#">Записаться</a>
                </div>
            </div>
        </div>
        <? endforeach; ?>

    </div>
</div>

