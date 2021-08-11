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
    foreach ($bank as $key => $i) { ?>
    <form action="" method="GET">
        <div>
            <?php echo ($bank[$key]['acc']); ?>
            <button type="submit" name="route" value="del_acc">Ištrinti</button>
            <input type="hidden" name="id" value="<?= $bank[$key]['id'] ?>">
        </div>
    </form>

    <form action="<?= URL ?>?route=addFundsPage" method="POST">
        <input type="hidden" name="id" value="<?= $bank[$key]['id'] ?>">
        <input type="hidden" name="route" value="addFundsPage">
        <button type="submit" value="addFunds">Add Funds</button>
    </form>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $bank[$key]['id'] ?>">
        <input type="hidden" name="route" value="deductFunds">
        <button type="submit">Deduct Funds</button>
    </form>

    <?php }
    ?>

</body>

</html>