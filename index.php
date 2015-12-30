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
    <link rel="stylesheet" type="text/css" href="css/_base_filter.css">
    <link rel="stylesheet" type="text/css" href="css/_base_h1.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card.css">
    <link rel="stylesheet" type="text/css" href="css/_base_yellow.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_high.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_full.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_half.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card_third.css">
    <link rel="stylesheet" type="text/css" href="css/_base_more.css">
    <link rel="stylesheet" type="text/css" href="css/_base_pages.css">
    <link rel="stylesheet" type="text/css" href="css/_base_footer.css">

    <link rel="stylesheet" type="text/css" href="css/_modal.css">
    <link rel="stylesheet" type="text/css" href="css/_modal_form.css">
    <link rel="stylesheet" type="text/css" href="css/_modal_list.css">

    <link rel="stylesheet" type="text/css" href="css/_map.css">
    <link rel="stylesheet" type="text/css" href="css/adaptive.css">

    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-scroll.min.js"></script>
    <script type="text/javascript" src="js/nouislider.min.js"></script>

    <? if(!HelperDeveloper::isDevelop()): ?>
        <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <? endif; ?>

    <script type="text/javascript">var Locatus = {};</script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/modal.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>
    <? if(!HelperDeveloper::isDevelop()): ?>
        <script src="js/map.js" type="text/javascript"></script>
    <? endif; ?>
    <script type="text/javascript">
        $(document).ready(function () {
            Locatus.Demo.init();
            Locatus.Functions.init();
            Locatus.Modal.init();
            Locatus.Slider.init();
            <? if(!HelperDeveloper::isDevelop()): ?>
                Locatus.Map.init();
            <? endif; ?>
        });
    </script></head>

<body id="body">
    <? require '_header.php'; ?>
    <div class="content">
        <? require '_menu.php'; ?>
        <? require '_base.php'; ?>
    </div>

    <? require '_modal_form.php'; ?>
    <? require '_modal_list.php'; // Шапка (.header-lines) ?>
    <? require '_modal_list_2.php'; // Другая шапка (.header-text) ?>

    <? require '_points.php'; ?>
</body>
</html>
