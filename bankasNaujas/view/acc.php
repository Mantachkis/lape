<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>
</head>

<body>
    <form action="<?= URL ?>?route=addAcc" method="POST">

        <label>Vardas: </label><input type="text" name="name">
        <label>Pavardė: </label><input type="text" name="surname">
        <label>Asmens kodas: </label><input type="text" name="id">

        <button type="submit" name="aaa" value="addAcc"> sukurti naują sąskaitą</button>

    </form>
</body>

</html>