<div class="header-image" style="background-image: url('images/_DELME_start_header.jpg');"></div>
<div class="header">
    <div class="user">
        <a href="#">Войти</a>
        <a class="border" href="#">Регистрация</a>
    </div>

    <div class="logo">
        <a href="#">Л<img src="images/start_logo.png">катус</a>
    </div>

    <div class="title">
        <h1>Поиск организаций и услуг в <a href="#">Москве</a></h1>
    </div>

    <div class="subtitle">
        <h2>Среди 10&thinsp;200 организаций и 57&thinsp;000 услуг</h2>
    </div>

    <div class="search ya-site-form ya-site-form_inited_no"
         onclick="return {'action':'http://<?= htmlspecialchars($_SERVER["HTTP_HOST"] . dirname($_SERVER["SCRIPT_NAME"])) ?>','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Locatus','suggest':true,'target':'_self','tld':'ru','type':3,'usebigdictionary':true,'searchid':2250973,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}">
        <form action="https://yandex.ru/search/site/" method="get" target="_self">
            <input type="hidden" name="searchid" value="2250973"/>
            <input type="hidden" name="l10n" value="ru"/>
            <input type="hidden" name="reqenc" value=""/>
            <input type="text" name="text" placeholder="Что нужно найти? Например, нигерийский массаж"><!--
            --><input type="submit" value="">

            <div class="results">
                <? foreach (range(1, 4) as $i): ?>
                <a href="#" class="line">
                    <div class="text">
                        <b>Ниге</b>рийский массаж <span>Массаж</span>
                    </div>
                    <div class="count">
                        Найдено: <?= str_repeat('5', rand(1, 4)); ?>
                    </div>
                </a>
                <? endforeach; ?>
            </div>
        </form>
    </div>
</div>

<? include '_yandex_search.php'; ?>
