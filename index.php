<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Locatus</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/-global.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/_header.css">
    <link rel="stylesheet" type="text/css" href="css/_menu.css">
    <link rel="stylesheet" type="text/css" href="css/_base.css">
    <link rel="stylesheet" type="text/css" href="css/_base_title.css">
    <link rel="stylesheet" type="text/css" href="css/_base_filter.css">
    <link rel="stylesheet" type="text/css" href="css/_base_h1.css">
    <link rel="stylesheet" type="text/css" href="css/_base_card.css">
    <link rel="stylesheet" type="text/css" href="css/_map.css">
    <link rel="stylesheet" type="text/css" href="css/adaptive.css">

    <script type="text/javascript" src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">var Locatus = {};</script>
    <script src="js/map.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            Locatus.Map.init();
        });
    </script></head>

<body id="body">
    <? require '_header.php'; ?>
    <div class="content">
        <? require '_menu.php'; ?>
        <? require '_base.php'; ?>
    </div>
    <? require '_map.php'; ?>
</body>
</html>
