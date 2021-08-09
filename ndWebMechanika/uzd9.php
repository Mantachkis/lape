<?php
$color = 'red';
$count = 0;


if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $color = 'white';
    for ($i = 0; $i <= $_POST['count']; $i++) {
        if (isset($_POST[$i])) {
            $count++;
        }
    }
    echo "<h1>buvo pazymeta: $count </h1>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzdavinys</title>
</head>

<body style="background-color: <?= $color ?>;">
    <form action="" method="post">
        <?php
        $raides = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
        $range = rand(2, 9);

        foreach (range(0, $range) as $i) {
            echo $raides[$i];
            echo '<input type="checkbox" name="' . $i . '">';
            echo '<br>';
        }
        ?>
        <input type="hidden" name="count" value="<?= $range ?>">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>