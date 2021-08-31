<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Bank</title>
    <style>
    div {
        margin: 5px;
        padding: 7px;
        border: 1px solid #ccc;
        font-size: 25px;
        display: block;
    }

    button {
        width: 150px;
        margin: 10px;
        font-size: 18px;
        display: block;
    }

    nav {
        background: gray;
        margin: 10px 5px;
        padding: 5px;
    }

    h1 {
        text-align: center;

    }

    nav a {
        display: inline-block;
        margin: 6px;
        font-size: 20px;
        text-decoration: none;
        color: black;

    }

    label {
        display: block;
        margin-left: 15px;
    }

    input {
        margin-left: 15px;
    }

    .login-form {
        margin: 5px;
        padding: 17px;
        display: block;
        /* border: 1px solid #ccc; */
        width: 400px;
    }

    .logout-form {
        display: inline-block;
    }

    .logout-form button {
        margin: 4px;
        font-size: 16px;
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
        <a href="<?= URL ?>">Home</a>
        <?php if (isLogged()) : ?>
        <a href="<?= URL ?>create">Add new acc</a>
        <a href="<?= URL ?>list">Show all</a>
        <form class="logout-form" action="<?= URL ?>logout" method="post">
            <button type="submit">Logout <b><?= $_SESSION['name'] ?></b></button>
        </form>
        <?php else : ?>

        <a href="<?= URL ?>login">Login</a>
        <?php endif ?>
    </nav>
    <?php showMessages();