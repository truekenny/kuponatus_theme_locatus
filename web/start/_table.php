<div class="table">
    <? foreach (range(1, 15) as $i): ?>
    <div class="cell">
        <div class="head">
            <h3 style="background-image: url('images/start_cell.png');">
                <a href="#">Медцентры<?= (rand(1, 2) == 1) ? " и ночные рестораны" : ""; ?></a>
            </h3>
        </div>
        <p>
            <? foreach (range(1, rand(1, 3)) as $j): ?>
            <a href="#">Больницы</a>
            <a href="#">Наращивание ногтей</a>
            <a href="#">Банкеты</a>
            <a href="#">Залы</a>
            <? endforeach; ?>
        </p>
    </div>
    <? endforeach; ?>
</div>
