<!-- Отображение modal окон не предусмотрено на телефоне -->
<div class="modal js-modal-city">
    <form class="window -effect8" action="#">
        <div class="close" title="Закрыть клавишей ESC"></div>
        <div class="top">
            <h1>Выбор города</h1>

            <div class="row">
                <div class="name -box">
                    Город
                </div>
                <div class="field -box">
                    <input class="-input -box" type="text" placeholder="Начинайте вводить название города">
                    <span>
                        <? foreach(range(1, 10) as $i): ?>
                        <a href="#">Москва</a>,
                        <? endforeach; ?>
                        <a href="#">Люберцы</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="bottom">
            <a href="#" class="-green -box">Выбрать</a>
        </div>
    </form>
</div>

