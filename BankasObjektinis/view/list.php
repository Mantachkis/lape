<?php
require __DIR__ . '/virsus.php';

use Bank\Objektinis\Json;


foreach ($bank as $key => $i) { ?>
<form action="<?= URL ?>delete/<?= $i['id'] ?>" method="POST">
    <div>
        <?php echo ($i['acc']), ' ', ($i['name']), ' ', ($i['surname']); ?>
        <button type="submit" name="route" value="">Delete</button>


</form>

<form style="display:inline" action="<?= URL ?>add" method="POST">
    <input type="hidden" name="id" value="<?= $i['id']  ?>">
    <button type="submit">Add Funds</button>
</form>

<form style="display:inline" action="<?= URL ?>deduct" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <button type="submit">Deduct Funds</button>
</form>
</div>

<?php }
?>