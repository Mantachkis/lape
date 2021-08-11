<?php
require __DIR__ . '/functions.php';
$name = getBank()['name'];
$surname = getBank()['surname'];
$funds = getBank()['funds'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deduct Funds</title>
</head>

<body>
    <form action="" type="submit">
        <label>Vardas: <?= $name ?></label>
        <label>Pavardė: <?= $surname ?></label>
        <label>Likutis: <?= $funds ?> EUR</label>
        <input type="text" name="funds">
        <button type="submit" name="ka_daryti" value="deductFunds">nuimti pinigus</button>


    </form>
</body>