<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
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

    nav {
        background: gray;
        margin: 10px 5px;
        padding: 5px;
    }

    nav a {
        display: inline-block;
        margin: 6px;
        font-size: 20px;
        text-decoration: none;
        color: black;
    }

    .login-form {
        margin: 5px;
        padding: 17px;
        border: 1px solid #ccc;
    }

    .logout-form {
        display: inline-block;
    }

    .logout-form button {
        margin: 4px;
        font-size: 26px;
        text-decoration: none;
        color: black;
    }

    .logout-form button:hover {
        color: black;
    }
    </style>
</head>

<body>

    <nav>
        <a href="<?= URL ?>?route=home">Home</a>
        <?php if (isLogged()) : ?>
        <a href="<?= URL ?>">Get list</a>
        <a href="<?= URL ?>?route=add">Add account</a>
        <form action="<?= URL ?>?route=logout" method="post">
            <button type="submit" class="btn btn-link">Log out <b><?= $_SESSION['name'] ?></b></button>
        </form>
        <?php else : ?>
        <a href="<?= URL ?>?route=login">Log in</a>

        <?php endif ?>
    </nav>
    <?php showMessages(); ?>