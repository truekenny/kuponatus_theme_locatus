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
