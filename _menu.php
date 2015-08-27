<div class="header-wrapper">
    <div class="header-scroll">
        <div class="text">
            <p>
                Медиа портал предназначен главным образом для представителей средств массовой информации.
                Данный сайт дает возможность получить доступ к полной базе актуальной информации о марке.
            </p>

            <p>
                Если Вы являетесь журналистом, пройдите регистрацию, чтобы регулярно получать новости,
                пресс-релизы и оповещения по электронной почте, а также скачивать фотографии и видео.
            </p>
        </div>

        <div class="persona">
            <table>
                <tr>
                    <td width="40%">
                        <img src="images/_DELME_banner.png">
                    </td>
                    <td>
                        <div class="voice">
                            <div class="zero"><img src="images/voice.png"></div>
                            Существуют две основные <b>трактовки</b> понятия «текст»: «имманентная» (расширенная,
                            философски нагруженная) и «репрезентативная» (более частная). Имманентный подход
                            <!-- <img align="bottom | left | middle | right | top"> -->
                            <img src="images/_DELME_image.jpg" align="right">
                            подразумевает отношение к тексту как к автономной реальности, нацеленность на выявление его
                            внутренней структуры. Репрезентативный — рассмотрение текста как особой формы представления
                            знаний о внешней тексту действительности.
                        </div>

                    </td>
                </tr>
            </table>
        </div>

        <div class="fast-filter">
            <? $type = 3; //rand(1, 3); ?>
            <? if ($type == 1): ?>

                <p>Выберите класс Вашего автомобиля</p>
                <ul>
                    <? foreach (['Мото', 'Внедорожник', 'Легковой', 'Минивен', 'Микроавтобус'] as $text): ?>
                        <li><a href=".">

                                <!-- Если картинка не нужна, то убрать теги img и br -->
                                <img src="images/_DELME_image.jpg" alt=""><br>
                                <?= $text ?> <span>от 100 рублей</span>

                            </a></li>
                    <? endforeach; ?>
                </ul>

            <? elseif ($type == 2): ?>

                <p>Выберите класс Вашего автомобиля</p>
                <!-- Три ячейки на строку выглядят наиболее приемлемо -->
                <table>
                    <? foreach ([['Мото', 'Внедорожник', 'Легковой'], ['Минивен', 'Микроавтобус']] as $texts): ?>
                        <tr>
                            <? foreach ($texts as $text): ?>
                                <td><a href=".">

                                        <!-- Если картинка не нужна, то убрать теги img и br -->
                                        <img src="images/_DELME_image.jpg" alt=""><br>
                                        <?= $text ?> <span>от 100 рублей</span>

                                    </a></td>
                            <? endforeach; ?>
                        </tr>
                    <? endforeach; ?>
                </table>

            <?
            elseif ($type == 3): ?>


                <? $countFilters = rand(2, 9); ?>


                <script type="text/javascript">
                    $(document).ready(function () {
                        /**
                         * В следующей строке указать класс блока, который нужно выбрать после загрузке.
                         * Удалить строку или закомментировать, если надо оставить выбранным первый блок.
                         */
                        // selectFastFilterPage(2);

                        /**
                         * Следущая строка скрывает значения быстрых фильтров
                         */
                        // hideFastFilterValues();
                    });
                </script>

                <div class="type-3">
                    <div class="lines">
                        <? for ($i = 1; $i <= $countFilters; $i++): ?>
                            <p class="line-<?= $i ?>">Выберите класс Вашего автомобиля (<?= $i ?>)</p>
                        <? endfor; ?>
                    </div>
                    <div class="blocks">
                        <? for ($i = 1; $i <= $countFilters; $i++): ?>
                        <? foreach (['Мото', 'Внедорожник Внедорожник', 'Легковой', 'Минивен', 'Микроавтобус'] as $text): ?>
                            <div class="block-<?= $i ?>"><a href=".">

                                <? if (rand(1, 2) == 1): ?>
                                    <!-- Если картинка не нужна, то убрать теги img и br -->
                                    <img src="images/_DELME_image.jpg" alt=""><br>
                                <? endif; ?>
                                <?= $text ?> (<?= $i ?>) <span>от 100 рублей</span>

                                </a></div>
                        <? endforeach; ?>
                        <? endfor; ?>
                    </div>
                    <div class="choise">
                        <p>Подбор по другим параметрам:</p>
                    </div>
                    <div class="others-wrapper">
                        <div class="others">
                            <? for ($i = 1; $i <= $countFilters - 1; $i++): ?><div data-id="<?= $i ?>" class="other-<?= $i ?>"><img src="images/_DELME_32.gif"> Пример <?= $i ?></div><? endfor; ?>
                        </div>
                        <div data-id="<?= $i ?>" class="other-last other-<?= $i ?>">
                            <img src="images/_DELME_32.gif"> Цена
                        </div>
                    </div>
                </div>

            <? endif; ?>
        </div>
    </div>
</div>

<div class="menu-wrapper">
    <ul class="menu scroll">
        <? foreach (range(1, rand(7, 7)) as $i): ?><li>
            Сложность <?= $i ?>
            <ul>
                <li><a href="?menu">Эконом <?= $i ?></a></li>
                <li class="enable"><a href="?menu">Эконом</a></li>
            </ul>
            </li><? endforeach; ?>
    </ul>
    <ul class="menu">
        <li>
            Цена
            <ul>
                <li><a href="?menu">Эконом L</a></li>
                <li class="enable"><a href="?menu">Эконом</a></li>
            </ul>
        </li>
    </ul>
    <div class="clear"></div>
</div>
