<?php
require __DIR__ . '/virsus.php';

?>
<p style="margin-left:30px "><?php echo "$name  $surname <br>Turimos lėšos: $funds"; ?></p>

<form style="margin-left:15px;  font-size: 20px;" action="<?= URL ?>addFunds" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">

    <input type="double" name="funds">
    <Button type="submit">Pridėti lėšų</Button>
</form>