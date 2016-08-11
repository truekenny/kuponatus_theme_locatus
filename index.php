<!DOCTYPE HTML>
<?
    require_once 'components/HelperDeveloper.php';
    require_once 'components/MobileDetect.php';
    require_once 'components/NumberHelper.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Locatus</title>

    <? $detect = new MobileDetect; ?>

    <? if ($detect->isTablet()): ?>
        <meta name="viewport" content="width=700">
    <? else: ?>
        <meta name="viewport" content="width=470">
    <? endif; ?>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/-global.css">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/_header.css">
    <link rel="stylesheet" type="text/css" href="css/_menu.css">

    <link rel="stylesheet" type="text/css" href="css/_base.css">
    <link rel="stylesheet" type="text/css" href="css/_base_title.css">
    <link rel="stylesheet" type="text/css" href="css/_base_yandex_result.css">
    <link rel="stylesheet" type="text/css" href="css/_base_selects.css">
    <link rel="stylesheet" type="text/css" href="css/_base_categories.css">
    <link rel="stylesheet" type="text/css" href="css/_base_filter.css">
    <link rel="stylesheet" type="text/css" href="css/_base_h1.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_lines.css">
    <link rel="stylesheet" type="text/css" href="css/_base_yellow.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_high.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_full.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_half.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_third.css">
    <link rel="stylesheet" type="text/css" href="css/_base_more.css">
    <link rel="stylesheet" type="text/css" href="css/_base_pages.css">
    <link rel="stylesheet" type="text/css" href="css/_base_footer.css">
    <link rel="stylesheet" type="text/css" href="css/_base_company.css">

    <link rel="stylesheet" type="text/css" href="css/_popup.css">

    <link rel="stylesheet" type="text/css" href="css/_modal.css">
    <link rel="stylesheet" type="text/css" href="css/_modal_form.css">
    <link rel="stylesheet" type="text/css" href="css/_modal_list.css">

    <link rel="stylesheet" type="text/css" href="css/_map.css">
    <link rel="stylesheet" type="text/css" href="css/adaptive.css">

    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css">

    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.nice-scroll.min.js"></script>
    <script type="text/javascript" src="js/vendor/nouislider.min.js"></script>
    <script type="text/javascript" src="js/vendor/browserclass.js"></script>

    <? if(!HelperDeveloper::isDevelop()): ?>
        <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <? endif; ?>

    <script type="text/javascript">var Locatus = {};</script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/modal.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>
    <script src="js/lines.js" type="text/javascript"></script>
    <script src="js/selects.js" type="text/javascript"></script>
    <script src="js/popup.js" type="text/javascript"></script>
    <? if(!HelperDeveloper::isDevelop()): ?>
        <script src="js/supplier.js" type="text/javascript"></script>
        <script src="js/map.js" type="text/javascript"></script>
    <? endif; ?>
    <script type="text/javascript">
        $(document).ready(function () {
            // Чтобы отключить режим Демо надо закомментировать следуюшую строку, также можно удалить ссылку на js/demo.js
            Locatus.Demo.init();
            Locatus.Functions.init();
            Locatus.Modal.init();
            Locatus.Slider.init();
            Locatus.Lines.init();
            Locatus.Selects.init();
            Locatus.Popup.init();
            <? if(!HelperDeveloper::isDevelop()): ?>
                Locatus.Supplier.init();
                Locatus.Map.init();
            <? endif; ?>
            /*setTimeout(function() {
                console.log($('body').attr('class'));
            }, 1000);*/
        });
    </script></head>

<body id="body"><!-- class="-no-menu" -->
    <? require 'web/main/_header.php'; ?>
    <div class="content">
        <? require 'web/main/_menu.php'; ?>
        <? require 'web/main/_base.php'; ?>
    </div>

    <? require 'web/main/_modal_form.php'; ?>
    <? require 'web/main/_modal_city.php'; ?>
    <? require 'web/main/_modal_list.php'; // Шапка (.header-lines) ?>
    <? require 'web/main/_modal_list_2.php'; // Другая шапка (.header-text) ?>

    <? require 'web/main/_points.php'; ?>
</body>
</html>

