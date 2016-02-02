<!--
    Пример Яндекс-формы, код которой перенесен в _header.php .search-wrapper
-->

<div class="ya-site-form ya-site-form_inited_no"
     onclick="return {'action':'https://yandex.ru/search/site/','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Locatus','suggest':true,'target':'_self','tld':'ru','type':3,'usebigdictionary':true,'searchid':2250973,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}">
    <form action="https://yandex.ru/search/site/" method="get" target="_self">

        <!-- Здесь надо вставить ID, который Яндекс выдаёт при регистрации формы -->
        <input type="hidden" name="searchid" value="0"/>
        <input type="hidden" name="l10n" value="ru"/>
        <input type="hidden" name="reqenc" value=""/>
        <input type="search" name="text" value=""/>
        <input type="submit" value="Найти"/>
    </form>
</div>
