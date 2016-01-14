<? foreach(range(1, 4)as $j): ?>
<div class="base-card-high base-card-lines">

    <!-- По следующему блоку создаётся точка на карте, которая зависит от текущего поставщика -->
    <div class='point'
         data-x='<?= NumberHelper::rand(55.7522 - .1, 55.7522 + .1) ?>'
         data-y='<?= NumberHelper::rand(37.6155 - .1, 37.6155 + .1) ?>'
         data-name='Все прокаты автомобилей'
         data-url="http://ya.ru/"
         data-cluster="moscow"
        ></div>

    <script type="text/javascript">
        /**
         *  Пример добавления точки без зависомости от поставщика
         */
        // Locatus.Map.addPoint([55.75, 37.61], 'TEST', './?url');
    </script>


    <div class="header">
        <a href="#"><img src="images/_DELME_card_2.jpg" alt="" align="right"></a>
        <h2><a href="#">Эконом класс от <span>149 руб.</span></a></h2>
        <p>Renault Logan, Kia Rio, Hyundai Solar</p>
    </div>

    <? foreach(range(1, 2)as $i): ?>
    <div class="line">
        <div class="info">
            <p class="name">
                <a href="#">Компания "Аренда Авто"</a>
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
            <a class="js-lines no-demo" href="#">Цены</a>
        </div>
        <div class="price -aright">
            <span>от 400 руб./час</span>
            <a class="button -green" href="#">Забронировать</a>
        </div>
    </div>

    <? require '_base_card_lines.php'; ?>

    <? endforeach; ?>

</div>
<? endforeach; ?>
