<?
/**
 * @var $showSupplier int
 */
?>

<div class="offer">

    <? $showSupplier++; ?>

    <? if ($showSupplier): ?>

        <? require '_supplier_info.php'; ?>

    <? endif; ?>

    <? require '_supplier_tables.php'; ?>
</div>
