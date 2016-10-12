<div style="display: none;">
    <!--
      Если нет описания data-caption, то оно берется из data-name.
      В конец полного описания data-body вставляется ссылка data-url.

        data-icon-index/data-cluster-icon-index может принимать значения 0 и 1,
        0 – зеленый цвет, 1 – фиолетовый.
        Значение по умолчанию – 0
    -->

    <!-- Кластер 1: тестирует кластер с одной точкой -->

    <div class='point'
         data-x='55.7522'
         data-y='37.6455'
         data-name='Точка из кластера example-1'
         data-url="http://ya.ru/"
         data-cluster="example-1"
         data-icon-index="1"
        ></div>

    <!-- Кластер 500: тестирует кластер с 500 точками и полным описанием -->
    <? foreach (range(1, 50) as $i): ?>
        <div class='point'
             data-x='<?= NumberHelper::rand(55.7722 - .001, 55.7722 + .001) ?>'
             data-y='<?= NumberHelper::rand(37.6155 - .001, 37.6155 + .001) ?>'
             data-name='Точка из кластера example-50'
             data-url="http://ya.ru/"
             data-cluster="example-50"
             data-icon-index="1"
             data-cluster-icon-index="1"
             data-caption="Кратко №<?= $i ?>"
             data-body="Полное описание №<?= $i ?>, ссылка <a href='http://ya.ru'>ya.ru</a>"
            ></div>
    <? endforeach; ?>

    <!--
        Кластер 10: тестирует кластер с точками с одинаковыми координатами, без описания.
        Тестируется всплывающее окно.
        Тестируется обработка специальных html символов в url.
    -->
    <? foreach (range(1, 10) as $i): ?>
        <div class='point'
             data-x='55.7922'
             data-y='37.6355'
             data-name='Точка из кластера example-10 №<?= $i ?>'
             data-url="https://yandex.ru/images/search?text=тест&isize=small"
             data-cluster="example-10"
            ></div>
    <? endforeach; ?>
</div>
