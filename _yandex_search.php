<style type="text/css">
    .ya-page_js_yes .ya-site-form_inited_no {
        display: none;
    }

    #ya-site-form0 .ya-site-form__search-input {
        padding: 0;
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
            Ya.Site.Form.init();

            setTimeout(function() {
                $('.ya-site-form__search-input-layout-r').html(
                    '<button class="-box -green" type="submit"></button>'
                );
            }, 100);
        })
    })(window, document, 'yandex_site_callbacks');
</script>
