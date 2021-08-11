<?php
require __DIR__ . '/functions.php';

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $bank = getBank();
    $count = count($bank);
    $bank[$count]['name'] = $_POST['name'];
    $bank[$count]['surname'] = $_POST['surname'];
    $bank[$count]['acc'] = $_POST['acc'];
    $bank[$count]['id'] = $_POST['id'];
    $bank[$count]['funds'] = 0;
    setBank($bank);
    $bank = getBank();
    header('Location: http://localhost/lape/bankas/acc.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
</head>

<body>
    <form action="" method="POST">

        <label>Vardas: </label><input type="text" name="name">
        <label>Pavardė: </label><input type="text" name="surname">
        <label>Saskaitos nr.: </label><input type="text" name="acc">
        <label>Asmens kodas: </label><input type="text" name="id">

        <button type="submit" name="ka_daryti" value="addClient"> sukurti naują sąskaitą</button>

    </form>
</body>

</html>