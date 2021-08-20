<?php if (!empty($messages)) : ?>

<?php foreach ($messages as $message) : ?>
<div>
    <?= $message['msg'] ?>
</div>
<?php endforeach ?>

<?php endif ?>