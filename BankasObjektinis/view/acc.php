<?php require __DIR__ . '/virsus.php' ?>
<form action="<?= URL ?>?route=addAcc" method="POST">

    <label>Vardas: </label><input type="text" name="name">
    <label>Pavardė: </label><input type="text" name="surname">
    <label>Asmens kodas: </label><input type="text" name="id">

    <button type="submit" name="route" value="addAcc"> sukurti naują sąskaitą</button>

</form>
<?php
?>
<div style="display:none;">
    <h1 style="color:green;">ALL GOOD</h1>
</div>
<div style="display:none;">
    <h1 style="color:RED;">NO NO NO</h1>
</div>
<?php require __DIR__ . '/apacia.php' ?>