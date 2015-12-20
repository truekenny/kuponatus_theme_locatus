<? foreach(range(1, 5) as $i): ?>
    <div class="list">
        <div class="header <?= ($i == 1) ? 'show' : '' ?>">
            Биоламинирование
        </div>
        <div class="line">
            <div class="name -box">
                Биоламинирование L`OREAL короткие волосы
            </div>
            <div class="price -box">
                от 105 руб.
            </div>
            <div class="buttons -box">
                <a class="-green" href="#">Связаться</a>
            </div>
        </div>
        <div class="line">
            <div class="name -box">
                Биоламинирование L`OREAL средние волосы
            </div>
            <div class="price -box">
                от 10250 руб.
            </div>
            <div class="buttons -box">
                <a class="-green" href="#">Записаться</a>
            </div>
        </div>
        <div class="line">
            <div class="name -box">
                Биоламинирование L`OREAL длинные длинные волосы
            </div>
            <div class="price -box">
                от 10 руб.
            </div>
            <div class="buttons -box">
                <a class="-green" href="#">Купить</a>
            </div>
        </div>
    </div>
<? endforeach; ?>
