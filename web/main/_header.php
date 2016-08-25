<div id="header">
    <a class="menu-switcher -center" href="#">
        <img src="images/menu.png" alt="">
    </a>
    <a class="logo no-demo" href=".">
        <img src="images/logo_full.png" alt="Локатус">
    </a>

    <div class="search-wrapper ya-site-form ya-site-form_inited_no"
         onclick="return {'action':'http://<?= htmlspecialchars($_SERVER["HTTP_HOST"] . dirname($_SERVER["SCRIPT_NAME"])) ?>','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Locatus','suggest':true,'target':'_self','tld':'ru','type':3,'usebigdictionary':true,'searchid':2250973,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}">
        <form class="search -box" action="https://yandex.ru/search/site/" method="get" target="_self">

            <!-- Здесь надо вставить ID, который Яндекс выдаёт при регистрации формы -->
            <input type="hidden" name="searchid" value="2250973"/>
            <input type="hidden" name="l10n" value="ru"/>
            <input type="hidden" name="reqenc" value=""/>
            <input type="search" name="text" class="-box" placeholder="Найти">
            <button class="-box -green" type="submit"></button>
        </form>
    </div>

    <? // include '_header_search.php'; ?>

    <a class="coop -right" href="#">
        Сотрудничество
    </a>
    <a class="login -right" href="#">
        Войти
    </a>
    <a class="city -right" href="#">
        <span class="-green">Санкт-Петербург</span>
    </a>
</div>

<? include '_yandex_search.php'; ?>
