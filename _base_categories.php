<div class="base-categories">
    <? foreach (range(1, 5) as $i): ?>
        <a href="#" class="<?= ($i == 1) ? "-green" : "" ?>">Авто</a>
        <a href="#">Всё для дома</a>
        <a href="#">Для детей</a>
        <a href="#">Еда</a>
        <a href="#">Здоровье</a>
    <? endforeach; ?>
</div>
