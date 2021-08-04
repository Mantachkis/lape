<?php
$color='black';
if(1 == ($_GET['color'] ?? ''))
{$color='red';}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?=$color?>;">

     <a href="./new.php">black</a>
     <a href="?color=1">red</a>
     
</body>
</html>