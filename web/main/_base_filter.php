<form action="?example">
<div class="base-filter -can-overflow">
    <div class="block margin active">
        Активные фильтры <a class="dashed" href="#">Сброс</a>
    </div>

    <div class="block">
        <h4>Рисунок</h4>
        <div class="row">
            <!-- Пример текстового блока -->
            <div class="double">
                <input name="input1" class="maxi -box -input" type="text" value="Горох">
            </div>
            <!-- Конец примера текстового блока -->
        </div>
    </div>

    <div class="block">
        <h4>Рисунок</h4>
        <div class="row">
            <!-- Пример текстового блока -->
            <div class="double">
                <input name="input2" class="maxi -box -input" type="text" value="Горох">
            </div>
            <!-- Конец примера текстового блока -->

            <!-- Пример блока с одним флажком -->
            <div class="double">
                <p class="checkboxes">
                    <input name="checkbox" class="-checkbox" type="checkbox" id="UniqueID1" checked="checked"><label for="UniqueID1">С водителем</label><br>
                </p>
            </div>
            <!-- Конец примера блока с одним флажком -->
        </div>
    </div>

    <div class="block">
        <h4>Цена, руб.</h4>
        <div class="row">
            <!-- Пример блока со слайдером -->
            <div class="double">
                <table class="slider -small">
                    <tr>
                        <td>от <input name="costFrom" class="mini js-slider-selected-min -box -input" type="text" value="100">
                        <td>до <input name="costTo" class="mini js-slider-selected-max -box -input" type="text" value="500">
                    <tr>
                        <td colspan="2" class="range">
                            <div class="js-slider" data-min="0" data-max="900" data-step="100"></div>
                </table>
            </div>
            <!-- Конец примера блока со слайдером -->

            <!-- Пример блока со списком -->
            <div class="double">
                <select name="time" class="-box -input">
                    <option>Время работы</option>
                    <option>9:00 – 18:00</option>
                    <option>10:00 – 20:00</option>
                </select>
            </div>
            <!-- Конец примера блока со списком -->

            <!-- Пример блока со списком -->
            <div class="double">
                <select name="direction" class="-box -input">
                    <option>Ориентир</option>
                    <option>Кладбище</option>
                    <option>Камень встреч</option>
                </select>
            </div>
            <!-- Конец примера блока со списком -->
        </div>
    </div>

    <div class="block">
        <div class="row -small">
            <!-- Пример блока со ссылками -->
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
            <!-- Конец примера блока со ссылками -->

            <!-- Пример блока со ссылками-кнопками -->
            <div class="double">
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
            <!-- Конец примера блока со ссылками-кнопками -->

            <!-- Пример блока с флажками -->
            <div class="double">
                <h4 class="no-hide">Размер дисплея</h4>
                <p class="checkboxes">
                    <input name="checkbox1" class="-checkbox" type="checkbox" id="UniqueID1" checked="checked"><label for="UniqueID1">Дизайн</label><br>
                    <input name="checkbox2" class="-checkbox" type="checkbox" id="UniqueID2"><label for="UniqueID2">Уход</label><br>
                    <input name="checkbox3" class="-checkbox" type="checkbox" id="UniqueID3"><label for="UniqueID3">Маникюр-педикюр</label><br>
                </p>
            </div>
            <!-- Конец примера блока с флажками -->
        </div>
    </div>


    <?php for($ii = 0; $ii <= 3; $ii++): ?>
    <!-- Пример блока с линиями на всю / половину ширины, управляющий класс half для блока .links -->
    <div class="block">
        <h4>Виды маникюра</h4>
        <div class="links <?= $ii % 2 ? 'half' : '' ?>">
        <?php foreach(range(1, 8) as $i): ?>
            <a href="#">
                <div>
                    <?= str_repeat('СПА-маникюр ', $ii > 1 ? rand(1, 10) : 1) ?>
                </div>
                <div>от 1<?= str_repeat('0', rand(1, 9)) ?> руб.</div>
            </a>
        <?php endforeach; ?>
        </div>
    </div>
    <!-- Конец примера блока с линиями на половину ширины -->
    <?php endfor; ?>

    <!-- Пример блока с картинками -->
    <div class="block margin">
        <h4>Выберите класс автомобиля</h4>
        <div class="row no-margin-bottom">
            <?php foreach(range(1, 6) as $i): ?>
                <a href="#" class="image double" style="background-image: url('/images/_DELME_example_<?= $i ?>.jpg')">
                    <p class="-center">VIP-класс</p>
                    <p class="-center">от 1 200 руб.</p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Конец примера блока с картинками -->

    <div class="block">
        <h4>Простой список</h4>

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

    <div class="block -can-overflow">
        <h4>Примеры сложных списков</h4>

        <div class="row -can-overflow">

            <!-- Пример блока со сложным списком -->
            <div class="double">
                <select class="-hide" name="example-selector-1" multiple="multiple"></select>
                <div class="selector">
                    Сделайте выбор
                </div>
                <div> <!-- wrapper -->
                    <div>   <!-- window -->
                        <div class="selector-options"> <!-- options -->
                            <?php foreach(range(1, 10) as $i): ?>
                                <div data-value="Значение линии <?= $i ?>"> <!-- option -->
                                    <div> <!-- name -->
                                        Комедия <?= $i ?>
                                    </div>
                                    <div> <!-- ad.info -->
                                        (123)
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец примера блока со сложным списком -->

            <!-- Пример блока со сложным списком, содержащий цветные элементы (кружки) -->
            <!-- Это такой же блок как и предыдущий, просто содержит чуть-чуть html-украшашек в блоке name -->
            <div class="double">
                <select class="-hide" name="example-selector-2" multiple="multiple"></select>
                <div class="selector">
                    Сделайте выбор
                </div>
                <div> <!-- wrapper -->
                    <div>   <!-- window -->
                        <div class="selector-options"> <!-- options -->
                            <?php foreach(range(1, 10) as $i): ?>
                                <div data-value="<?= $i ?>"> <!-- option -->
                                    <div> <!-- name -->
                                        <div class="selector-color" style="background-color: lightgreen"></div> Комедия <?= $i ?>
                                    </div>
                                    <div> <!-- ad.info -->
                                       от 123 руб.
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец примера блока со сложным списком, содержащий цветные элементы (кружки) -->

            <!-- Пример блока со сложным списком и возможностью выбрать несколько элементов -->
            <div class="double">
                <select class="-hide" name="example-selector-3" multiple="multiple"></select>
                <div class="selector multi">
                    Сделайте выбор
                </div>
                <div> <!-- wrapper -->
                    <div>   <!-- window -->
                        <div class="selector-header">
                            <h3>Выберите район</h3>
                            <p>
                                <input placeholder="Поиск района" class="-box">
                            </p>
                            <ul>
<!--
                                <li>Аэропорт</li>
                                <li>Аэропорт</li>
-->
                            </ul>
                        </div>
                        <div class="selector-options"> <!-- options -->
                            <?php foreach(range(1, 10) as $i): ?>
                                <div data-value="<?= $i ?>"> <!-- option -->
                                    <div> <!-- name -->
                                        Комедия <?= $i ?>
                                    </div>
                                    <?php /*
                                    <div> <!-- ad.info -->
                                        от 123 руб.
                                    </div>
                                    */ ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="selector-footer">
                            <a href="#" class="no-demo -green">Выбрать</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец примера блока со сложным списком и возможностью выбрать несколько элементов -->
        </div>
        <div class="-clear"></div>
    </div>

    <!--
        Чтобы список доп. фильтров был распахнутым надо следующему блоку добавить класс show
    -->
    <div class="block applied padding show-EXAMPLE">
        <div class="row">
            <span data-name="important-1">Производитель: Apple</span>
            <span data-name="important-2">Игра: The Game</span>
        </div>
    </div>

    <!-- Скрытые дополнительные блоки фильтров имеют класс important -->
    <?php foreach (range(1, 3) as $i): ?>
    <div class="block important">
        <div class="row">
            <div class="double">
                <select name="important-1" class="-box -input">
                    <option>Производитель</option>
                    <option>Sony</option>
                    <option>Samsung</option>
                    <option>Nike</option>
                </select>
            </div>
            <div class="double">
                <select name="important-2" class="-box -input">
                    <option>Производитель</option>
                    <option>Sony</option>
                    <option>Samsung</option>
                    <option>Nike</option>
                </select>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="base-filter -can-overflow">
    <div class="block buttons">
        <div class="row">
            <button type="submit" class="apply">
                Применить
            </button>
            <button type="reset" class="cancel">
                Отмена
            </button>
        </div>
    </div>
</div>
</form>
