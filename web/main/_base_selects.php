<div class="base-selects">
    <? foreach (range(1, 4) as $i): ?>
        <div class="<?= ($i == -1) ? 'open' : '' ?>">
            <span>Шоссе</span>
            <div>
                <? foreach (range(1, rand(1, 6)) as $j): ?>
                    <a href="#">
                        ЭнтузиастовЭнтузиастов
                    </a>
                    <a href="#">
                        Асфальтовое
                    </a>
                    <a href="#">
                        Варшавское
                    </a>
                    <a href="#">
                        Ленинградское
                    </a>
                <? endforeach; ?>
            </div>
        </div>
    <? endforeach; ?>
</div>
<div class="-clear"></div>
