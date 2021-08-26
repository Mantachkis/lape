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
        <a href="<?= URL ?>">Home</a>
        <a href="<?= URL ?>create">Add new acc</a>
        <a href="<?= URL ?>list">Show all</a>
        <a href="<?= URL ?>login">Log in</a>


    </nav>
    <?php showMessages();