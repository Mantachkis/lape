<?php

$key = $_POST['id'];
$bank = getBank();
foreach ($bank as $index => $_) {
    if ($key == $bank[$index]['id']) {
        echo $bank[$index]['name'], '  ', $bank[$index]['surname'], '  ', $bank[$index]['funds'];
        break;
    }
}
?>
<form action="<?= URL ?>?route=addFunds" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="double" name="funds">
    <Button type="submit">Pridėti lėšų</Button>
</form>