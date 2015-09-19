<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Locatus</title>

    <? require 'components/NumberHelper.php' ?>
    <? require 'components/MobileDetect.php' ?>
    <? $detect = new MobileDetect; ?>

    <? if ($detect->isTablet()): ?>
        <meta name="viewport" content="width=691">
    <? else: ?>
        <meta name="viewport" content="width=465">
    <? endif; ?>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/_header.css">
    <link rel="stylesheet" type="text/css" href="css/_content.css">
    <link rel="stylesheet" type="text/css" href="css/_menu.css">
    <link rel="stylesheet" type="text/css" href="css/_content_right.css">
    <link rel="stylesheet" type="text/css" href="css/_content_offer.css">
    <link rel="stylesheet" type="text/css" href="css/_content_offer_table.css">
    <link rel="stylesheet" type="text/css" href="css/_adaptive.css">
    <link rel="stylesheet" type="text/css" href="css/_dinamic.css">


    <script type="text/javascript" src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript">
        var Locatus = {};
    </script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/table.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/content.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/supplier.js"></script>
    <script type="text/javascript" src="js/fast-filter.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            Locatus.Map.init();
            Locatus.Menu.init();
            Locatus.Table.init();
            Locatus.Header.init();
            Locatus.Content.init();
            Locatus.Functions.init();
            Locatus.Supplier.init();
            Locatus.FastFilter.init();
        });
    </script>


</head>

<body>
    <table class="stick-footer">
        <tr>
            <td>
                <? require '_header.php'; ?>

                <? $showSupplier = -2; // Инкрементируется; по значению boolval выводится поставщик или простая таблица ?>
                <? require '_content.php'; ?>
            </td>
        </tr>

        <tr>
            <td>
                <div class="footer">

                    <p>
                        Режим отображения:
                        <span class="view-full">Полный</span>
                        <span class="view-mini">Сокращенный</span>
                        <span class="view-pad">Планшет</span>
                        <span class="view-phone">Телефон</span>
                    </p>

                </div>
            </td>
        </tr>
    </table>

    <? require '_points.php'; ?>
</body>
</html>
