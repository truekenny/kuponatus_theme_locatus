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

    <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery.nice-scroll.min.js"></script>
    <script type="text/javascript">var Locatus = {};</script>
    <script src="js/demo.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>
    <script src="js/modal.js" type="text/javascript"></script>
    <? if(!HelperDeveloper::isDevelop()): ?>
    <? endif; ?>
    <script type="text/javascript">
        $(document).ready(function () {
            // Чтобы отключить режим Демо надо закомментировать следуюшую строку, также можно удалить ссылку на js/demo.js
            Locatus.Demo.init();
            Locatus.Functions.init();
            Locatus.Modal.init();
            <? if(!HelperDeveloper::isDevelop()): ?>
            <? endif; ?>
        });
    </script></head>

<body id="body">

<div class="content">
</div>

</body>
</html>

