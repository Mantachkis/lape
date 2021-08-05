<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $color='yellow';
}
else {
    $color='green';
}

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
    <form method="get">
        <button type="submit">zalia</button>
    </form>
    <form method="post">
        <button type="submit">geltona</button>
    </form>


</body>

</html>