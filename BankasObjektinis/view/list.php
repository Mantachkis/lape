<?php
require __DIR__ . '/virsus.php';

use Bank\Objektinis\Json;


foreach ($bank as $key => $i) { ?>
<form action="" method="GET">
    <div>
        <?php echo ($i['acc']), ' ', ($i['name']), ' ', ($i['surname']); ?>
        <button type="submit" name="route" value="del_acc">Delete</button>
        <input type="hidden" name="id" value="<?= $i['id'] ?>">

</form>

<form style="display:inline" action="<?= URL ?>?route=addFundsPage" method="POST">
    <input type="hidden" name="id" value="<?= $i['id'] ?>">
    <input type="hidden" name="route" value="addFundsPage">
    <button type="submit" value="addFunds">Add Funds</button>
</form>

<form style="display:inline" action="<?= URL ?>?route=deductFundsPage" method="POST">
    <input type="hidden" name="id" value="<?= $i['id'] ?>">
    <input type="hidden" name="route" value="deductFundsPage">
    <button type="submit" value="deductFundsPage">Deduct Funds</button>
</form>
</div>

<?php }
?>