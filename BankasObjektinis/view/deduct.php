<?php
require __DIR__ . '/virsus.php';
echo "$name  $surname  $funds";

?>

<form action="<?= URL ?>deductFunds" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="double" name="funds">
    <Button type="submit">Nuskaičiuoti lėšas</Button>
</form>