<?php

$key = $_POST['id'];
$bank = getBank();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add funds</title>
</head>

<body>
    <?php
    foreach ($bank as $index => $_) {
        if ($key == $bank[$index]['id']) {
            echo $bank[$index]['name'], '  ', $bank[$index]['surname'], '  ', $bank[$index]['funds'];
            break;
        }
    }
    ?>
    <form action="<?= URL ?>?route=deductFunds" method="POST">
        <input type="hidden" name="id" value="<?= $key ?>">
        <input type="double" name="funds">
        <Button type="submit">Atimti lėšų</Button>
    </form>
</body>

</html>