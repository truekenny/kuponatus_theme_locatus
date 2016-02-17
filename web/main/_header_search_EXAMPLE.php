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

<!--
    Форма для для выдачи на странице сайта
-->

<div class="ya-site-form ya-site-form_inited_no"
     onclick="return {'action':'http://locatus.loc/','arrow':false,'bg':'transparent','fontsize':12,'fg':'#000000','language':'ru','logo':'rb','publicname':'Locatus','suggest':true,'target':'_blank','tld':'ru','type':3,'usebigdictionary':true,'searchid':2250973,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#7f9db9'}">
    <form action="https://yandex.ru/search/site/" method="get" target="_blank">
        <input type="hidden" name="searchid" value="2250973"/>
        <input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value="utf-8"/>
        <input type="search" name="text" value=""/>
        <input type="submit" value="Найти"/></form>
</div>

<style type="text/css">
    .ya-page_js_yes .ya-site-form_inited_no {
        display: none;
    }
</style>

<script type="text/javascript">
    (function (w, d, c) {
        var s = d.createElement('script'), h = d.getElementsByTagName('script')[0], e = d.documentElement;
        if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
            e.className += ' ya-page_js_yes';
        }
        s.type = 'text/javascript';
        s.async = true;
        s.charset = 'utf-8';
        s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
        h.parentNode.insertBefore(s, h);
        (w[c] || (w[c] = [])).push(function () {
            Ya.Site.Form.init()
        })
    })(window, document, 'yandex_site_callbacks');
</script>

<!--
    Результат выдачи
-->

<div id="ya-site-results" onclick="return {'tld': 'ru','language': 'ru','encoding': 'utf-8','htmlcss': '1.x','updatehash': true}">

</div>
<script type="text/javascript">
    (function (w, d, c) {
        var s = d.createElement('script'), h = d.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.charset = 'utf-8';
        s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
        h.parentNode.insertBefore(s, h);
        (w[c] || (w[c] = [])).push(function () {
            Ya.Site.Results.init();
        })
    })(window, document, 'yandex_site_callbacks');
</script>

