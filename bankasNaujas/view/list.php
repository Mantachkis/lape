<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
    div {
        margin: 5px;
        padding: 7px;
        border: 1px solid #ccc;
        font-size: 25px;
        display: inline-block;
    }

    button {
        width: 200px;
        margin: 10px;
    }
    </style>
</head>


<body>

    <?php
    foreach ($bank as $key => $i) { ?>
    <form action="" method="GET">
        <div>
            <?php echo ($bank[$key]['acc']); ?>
            <button type="submit" name="route" value="del_acc">Delete</button>
            <input type="hidden" name="id" value="<?= $bank[$key]['id'] ?>">

    </form>

    <form style="display:inline" action="<?= URL ?>?route=addFundsPage" method="POST">
        <input type="hidden" name="id" value="<?= $bank[$key]['id'] ?>">
        <input type="hidden" name="route" value="addFundsPage">
        <button type="submit" value="addFunds">Add Funds</button>
    </form>

    <form style="display:inline" action="<?= URL ?>?route=deductFundsPage" method="POST">
        <input type="hidden" name="id" value="<?= $bank[$key]['id'] ?>">
        <input type="hidden" name="route" value="deductFundsPage">
        <button type="submit" value="deductFundsPage">Deduct Funds</button>
    </form>
    </div>

    <?php }
    ?>

</body>

</html>