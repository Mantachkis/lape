<?php
function getBank(): array
{
    if (!file_exists(__DIR__ . '/bank.json')) {
        $bank = [];
        $bank = json_encode($bank);
        file_put_contents(__DIR__ . '/bank.json', $bank);
    }
    return json_decode(file_get_contents(__DIR__ . '/bank.json'), 1);
}

function setBank(array $bank): void
{
    $bank = json_encode($bank);
    file_put_contents(__DIR__ . '/bank.json', $bank);
}


function setAccount(): void
{
    $bank = json_decode(file_get_contents(__DIR__ . '/bank.json'), 1);
    $acc = 'LT0123456' . rand(10000000000, 9999999999);
    $nauja = ['name' => '', 'surname' => '', 'id' => '', 'acc' => $acc, 'funds' => 0];
    $bank[] = $nauja;
    $bank = json_encode($bank);
    file_put_contents(__DIR__ . '/bebrai.json', $bank);
}

function router()
{
    $route = $_GET['route'] ?? '';
    if ('GET' == $_SERVER['REQUEST_METHOD'] && '' === $route) {
        pirmasPuslapis();
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'add' === $route) {
        addAccountPage();
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'del_acc' === $route && isset($_GET['id'])) {
        removeAccount($_GET['id']);
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'addFundsPage' === $route) {
        addFundsPage();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'deductFundsPage' === $route) {
        removeFundsPage();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'addAcc' === $route) {
        addNewAccount();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'addFunds' === $route) {
        addFunds($_POST['id']);
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'deductFunds' === $route) {
        deductFunds($_POST['id']);
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'list' === $route) {
        getList();
    } else {
        echo 'Page not found 404';
        die;
    }
}

function pirmasPuslapis()
{
    require __DIR__ . '/view/pirmas.php';
}

function addAccountPage()
{
    require __DIR__ . '/view/acc.php';
}

function removeAccount($key)
{
    $bank = getBank();
    foreach ($bank as $index => $client) {
        if ($key == $bank[$index]['id']) {
            unset($bank[$index]);
        }
    }
    setBank($bank);
    header('Location: ' . URL . '?route=list');
}
function deductFunds($key)
{

    $bank = getBank();
    foreach ($bank as $index => $_) {
        if ($key == $bank[$index]['id']) {

            $bank[$index]['funds'] -= $_POST['funds'];
        }
    }
    setBank($bank);
    header('Location: ' . URL . '?route=list');
}

function addFunds($key)
{

    $bank = getBank();
    foreach ($bank as $index => $_) {
        if ($key == $bank[$index]['id']) {

            $bank[$index]['funds'] += $_POST['funds'];
        }
    }
    setBank($bank);
    header('Location: ' . URL . '?route=list');
}

function addFundsPage()
{
    require __DIR__ . '/view/add.php';
}

function removeFundsPage()
{

    require __DIR__ . './view/deduct.php';
}
function addNewAccount()
{
    $bank = getBank();
    $count = count($bank);
    $bank[$count]['name'] = $_POST['name'];
    $bank[$count]['surname'] = $_POST['surname'];
    $bank[$count]['id'] = $_POST['id'];
    $bank[$count]['acc'] = 'LT0123456' . rand(10000000000, 99999999999);
    $bank[$count]['funds'] = 0;
    setBank($bank);
    $bank = getBank();
    header('Location: ' . URL . '?route=list');
}

function getList()
{
    $bank = getBank();
    require __DIR__ . '/view/list.php';
}