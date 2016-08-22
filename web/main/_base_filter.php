<div class="base-filter">
    <div class="block margin active">
        Активные фильтры <a class="dashed" href="#">Сброс</a>
    </div>
    <div class="block">
        <h4>Рисунок</h4>
        <div class="row">
            <div class="double">
                <input class="maxi -box -input" type="text" value="Горох">
            </div>
        </div>
    </div>

    <div class="block">
        <h4>Цена, руб.</h4>
        <div class="row -small">
            <div>от <input class="mini js-slider-selected-min -box -input" type="text" value="100"></div>
            <div class="margin -aright">до <input class="mini js-slider-selected-max -box -input" type="text" value="500"></div>

            <div class="double margin">
                <select class="-box -input">
                    <option>Время работы</option>
                    <option>9:00 – 18:00</option>
                    <option>10:00 – 20:00</option>
                </select>
            </div>
            <div class="double margin">
                <select class="-box -input">
                    <option>Ориентир</option>
                    <option>Кладбище</option>
                    <option>Камень встреч</option>
                </select>
            </div>

            <div class="range double margin -box" >
                <div class="js-slider" data-min="0" data-max="900" data-step="100">
                </div>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="row -small">
            <div class="double">
                <h4 class="no-hide">Цена, руб.</h4>
                <p class="list of-texts line">
                    <a class="-small" href="#">Холст <span>(663)</span></a>
                    <a class="checked -small" href="#">Шифон <span>(100450)</span></a>
                    <a class="-small" href="#">Креп <span>(23)</span></a>
                    <a class="-small" href="#">Деним <span>(23432)</span></a>
                </p>
                <p class="dashed">
                    <a href="#">Больше</a>
                </p>
            </div>
            <div class="double margin">
                <h4 class="no-hide">Размер дисплея</h4>
                <p class="list of-buttons">
                    <a class="-small" href="#">2.5 дюйма</a>
                    <a class="-small" href="#">3.5 дюйма</a>
                    <a class="-small" href="#">4 дюйма</a>
                    <a class="checked -green -small" href="#">6 дюймов</a>
                    <a class="-small" href="#">7 дюймов</a>
                    <a class="-small" href="#">8 дюймов</a>
                </p>
            </div>
            <div class="double margin">
                <h4 class="no-hide">Размер дисплея</h4>
                <p>
                    <input class="-checkbox" type="checkbox" id="UniqueID1" checked="checked"><label for="UniqueID1">Дизайн</label><br>
                    <input class="-checkbox" type="checkbox" id="UniqueID2"><label for="UniqueID2">Уход</label><br>
                    <input class="-checkbox" type="checkbox" id="UniqueID3"><label for="UniqueID3">Маникюр-педикюр</label><br>
                </p>
            </div>
        </div>
    </div>

    <div class="block">
        <h4>Виды маникюра</h4>
        <div class="wide-line">
            <a href="#">СПА-маникюр</a>
            <a class="-right" href="#">от 300 до 4 500 руб.</a>
        </div>
        <div class="wide-line">
            <a href="#">Горячий маникюр</a>
            <a class="-right" href="#">от 30 до 4 500 руб.</a>
        </div>
        <div class="wide-line">
            <a href="#">Аппаратный маникюр</a>
            <a class="-right" href="#">от 3 000 до 4 500 руб.</a>
        </div>
        <div class="wide-line">
            <a href="#">Увропейский маникюр</a>
            <a class="-right" href="#">от 3 до 500 руб.</a>
        </div>
    </div>

    <div class="block">
        <h4>Виды маникюра</h4>
        <div>
        <? foreach(range(1, 8) as $i): ?>
            <div class="wide-line half-line no-dots">
                <a href="#">СПА-маникюр</a>
                <a class="-right" href="#">от 300 руб.</a>
            </div>
        <? endforeach; ?>
        </div>
    </div>

    <div class="block margin">
        <h4>Выберите класс автомобиля</h4>
        <div class="row no-margin-bottom">
            <? foreach(range(1, 6) as $i): ?>
                <a href="#" class="image double" style="background-image: url('images/_DELME_example_<?= $i ?>.jpg')">
                    <p class="-center">VIP-класс</p>
                    <p class="-center">от 1 200 руб.</p>
                </a>
            <? endforeach; ?>
        </div>
    </div>

    <div class="block">
        <h4>Рисунок</h4>

        <div class="row">
            <div class="double">
                <select class="-box -input">
                    <option>Производитель</option>
                    <option>Sony</option>
                    <option>Samsung</option>
                    <option>Nike</option>
                </select>
            </div>
        </div>
    </div>
</div>