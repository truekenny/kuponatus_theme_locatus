<?
/**
 * @var $showSupplier int
 */
?>
<!--
    data-width="35% 50% 15%" ширина левой, средней и правой части таблицы.
    После загрузки страницы атоматически устанавливается соответствующим блокам в table.js
    Сумма должна быть 100%.
-->
<!-- Если текст в ячейке не надо обрезать, то надо добавить класс wrap -->
<div class="tables clear">

    <? if ($showSupplier): ?>
        <? require '_supplier_table_example.php'; ?>
    <? endif; ?>

    <? foreach (range(1, $showSupplier ? 3 : 1) as $i): ?>

        <? if ($showSupplier): ?>
            <? require '_supplier_table.php'; ?>
        <? else: ?>
            <? require '_supplier_table_simple.php'; ?>
        <? endif; ?>

    <? endforeach; ?>

    <? if ($showSupplier): ?>
        <? require '_supplier_table_example.php'; ?>
    <? endif; ?>

</div>