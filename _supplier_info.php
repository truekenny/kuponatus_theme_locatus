<div class="supplier">

    <!-- По следующему блоку создаётся точка на карте -->
    <div class='point'
         data-point-x='<?= NumberHelper::rand(55.7522 - .1, 55.7522 + .1) ?>'
         data-point-y='<?= NumberHelper::rand(37.6155 - .1, 37.6155 + .1) ?>'
         data-point-name='Все прокаты автомобилей'
         data-point-url="http://ya.ru/"
        ></div>

    <a href="." class="top">
        <img src="images/_DELME_image.jpg" alt="" align="right">

        <h1>
            <? foreach (range(1, rand(1, 3)) as $i): ?>
                Все прокаты автомобилей
            <? endforeach; ?>
        </h1>

        <p class="grey">
            +7 (925) 111-22-33<br>
            пн-пт 20:00-23:00, пн-пт 20:00-23:00, пн-пт 20:00-23:00<br>
            м. Выхино<br>
            г. Москва, Красная Площадь, д. 1
        </p>
    </a>

    <? foreach ([1, 2, 3] as $i): ?>
        <? if (rand(1, 2) == 1) continue; // Возможность не выдавать на вывод .black ?>

        <p class="black" style="font-size: 13px;">
            Услуги: <a class="comma" href=".">кафе</a> <a class="padding comma" href=".">кафе</a> <a href=".">кафе</a>.
        </p>

        <p class="black" style="font-size: 13px;">
            Входит в стоимость: заправка газом, заправка газом, заправка газом, заправка газом.
        </p>
    <? endforeach; ?>
</div>