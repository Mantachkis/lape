<?php

$key = $_POST['id'];
$bank = getBank();
?>

<?php
foreach ($bank as $index => $_) {
    if ($key == $bank[$index]['id']) {
        echo $bank[$index]['name'], '  ', $bank[$index]['surname'], '  ', $bank[$index]['funds'];
        break;
    }
}
?>
<form action="<?= URL ?>?route=addFunds" method="POST">
    <input type="hidden" name="id" value="<?= $key ?>">
    <input type="double" name="funds">
    <Button type="submit">Pridėti lėšų</Button>
</form>