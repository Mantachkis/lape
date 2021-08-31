<?php require __DIR__ . '/virsus.php' ?>
<form action="<?= URL ?>create" method="POST">

    <label>Vardas: </label><input type="text" name="name">
    <label>Pavardė: </label><input type="text" name="surname">
    <label>Asmens kodas: </label><input type="text" name="id">

    <button style="width:300px" type="submit" name="route" value="addAcc"> sukurti naują sąskaitą</button>

</form>
<?php
?>

<?php require __DIR__ . '/apacia.php' ?>