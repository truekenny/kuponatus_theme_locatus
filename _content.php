<div class="content">
    <div class="offers">
        <? require '_menu.php'; ?>

        <div class="delta-margin"></div>

        <div id="content-map"></div>

        <!-- Если выдавать следующий блок, то предложения и карты будут скрыты -->
        <div class="expand">
            <h3>Показать все 453 автомойки:</h3>

            <div>
                <img src="images/icon_list.png"> Списком
            </div>

            <div>
                <img src="images/icon_marker.png"> На карте
            </div>
        </div>

        <? if (!isset($_GET['offer'])): ?>
            <? foreach(range(1, 4) as $i): ?>
                <? require '_offer.php'; ?>
            <?  endforeach; ?>

            <a class="more-offers" href="?more">
                Показать ещё
            </a>
        <? else: ?>
            <? require '_offer.php'; ?>
        <? endif; ?>
    </div>

    <div class="right">
    </div>
</div>