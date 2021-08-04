<?php
if(1 == ($_GET['red'] ?? ''))
{header('Location: http://localhost/lape/ndWebMechanika/5uzd/blue.php');
die;}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:red;">
<a style="color:white" href="./red.php?red=1">redirect</a>
    
</body>
</html>