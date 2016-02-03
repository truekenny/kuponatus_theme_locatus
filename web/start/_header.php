<div class="header-image" style="background-image: url('../images/start_header.png');"></div>
<div class="header">
    <div class="user">
        <a href="#">Войти</a>
        <a class="border" href="#">Регистрация</a>
    </div>

    <div class="logo">
        <a href="#">Л<img src="images/start_logo.png">катус</a>
    </div>

    <div class="title">
        <h1>Поиск организаций и услуг в <a href="#">Москве</a></h1>
    </div>

    <div class="subtitle">
        <h2>Среди 10&thinsp;200 организаций и 57&thinsp;000 услуг</h2>
    </div>

    <div class="search">
        <form action="#">
            <input type="text" placeholder="Что нужно найти? Например, нигерийский массаж"><!--
            --><input type="submit" value="">

            <div class="results">
                <? foreach (range(1, 4) as $i): ?>
                <a href="#" class="line">
                    <div class="text">
                        <b>Ниге</b>рийский массаж <span>Массаж</span>
                    </div>
                    <div class="count">
                        Найдено: <?= str_repeat('5', rand(1, 4)); ?>
                    </div>
                </a>
                <? endforeach; ?>
            </div>
        </form>
    </div>
</div>
