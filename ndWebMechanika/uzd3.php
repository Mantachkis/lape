<?php
if(isset($_GET['color']) ){
$color='#'.$_GET['color'];
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
  <label>spalvos kodas</label><br>
  <input type="text" name="color" value=""><br>
  <input type="submit" value="keisti">
</form> 


</body>
</html>