<?php
require __DIR__ . '/functions.php';

$bank = getBank();
$list = getBank();
//echo '<pre>';
//print_r($bank);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>

<body>
    <?php
    foreach ($bank as $key => $i) {
        echo '<form action="./list.php" type="POST"';
        echo '<div>';
        echo $bank[$key]['acc'];
        echo '<button type="submit" name="ka_daryti" value="del_acc">Ištrinti</button>';
        echo '<a href="./add.php">pridėti lėšas</a>';
        echo '<a href="./deduct.php">nuskaičiuoti lėšas</a>';
        echo '</div>';
        echo '</form>'
    }

    ?>

</body>

</html>