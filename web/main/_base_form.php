<?
require_once 'web/mail/_fields.php';
?>

<div class="base-form">
    <h2>Заголовок</h2>

    <form action="/sendmail.php" method="post" enctype="multipart/form-data">
        <? foreach ($fields as $name => $field): ?>
            <p>
                <?= htmlspecialchars($field[0]) ?>:<br>
                <input type="<?= htmlspecialchars($field[1]) ?>" name="fields[<?= htmlspecialchars($name)?>]" value="demo: <?= htmlspecialchars($field[0]) ?>">
            </p>
        <? endforeach; ?>

        <button type="submit" class="button -green">Отправить</button>
    </form>
</div>
