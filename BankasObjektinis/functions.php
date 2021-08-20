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
        auth();
        pirmasPuslapis();
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'home' === $route) {
        homePage();
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'add' === $route) {
        auth();
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
    } elseif ('GET' == $_SERVER['REQUEST_METHOD'] && 'login' === $route) {
        showLogin();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'login' === $route) {
        login();
    } elseif ('POST' == $_SERVER['REQUEST_METHOD'] && 'logout' === $route) {
        logout();
    } else {
        echo 'Page not found 404';
        die;
    }
}
function homePage()
{
    require __DIR__ . '/view/home.php';
}
function isLogged()
{
    return isset($_SESSION['login']) && $_SESSION['login'] == 1;
}
function showLogin()
{
    require __DIR__ . '/view/login.php';
}
function login()
{

    $users = json_decode(file_get_contents(__DIR__ . '/user.json'), 1);
    $name = $_POST['name'] ?? '';
    $pass = $_POST['pass'] ?? '';

    foreach ($users as $user) {
        if ($user['name'] == $name) {
            if ($user['pass'] == $pass) {
                $_SESSION['login'] = 1;
                $_SESSION['name'] = $name;
                addMessage('Sėkmingai prisijungta');
                require __DIR__ . '/view/pirmas.php';
                die;
            }
        }
    }
    addMessage('Kažkas blogai');
    header('Location: ' . URL . '?route=login');
    die;
}
function logout()
{
    unset($_SESSION['login'], $_SESSION['name']);
    header('Location: ' . URL . '?route=login');
    addMessage('Atsijungėte');
    die;
}
function auth()
{
    if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {

        header('Location: ' . URL . '?route=login');
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

        if ($key == $bank[$index]['id'] && $bank[$index]['funds'] <= 0) {
            unset($bank[$index]);
            addMessage('Sėkmingai ištrinta');
        }
    }
    setBank($bank);
    addMessage('Sąskaitoje yra lėšų, neglima ištrinti');
    header('Location: ' . URL);
}
function deductFunds($key)
{

    $bank = getBank();
    foreach ($bank as $index => $_) {
        if ($key == $bank[$index]['id'] && ($bank[$index]['funds'] - $_POST['funds']) >= 0) {

            $bank[$index]['funds'] -= $_POST['funds'];
            addMessage('Atimtos lėšos');
        }
    }
    setBank($bank);

    header('Location: ' . URL);
}

function addFunds($key)
{

    $bank = getBank();
    foreach ($bank as $index => $_) {
        if ($key == $bank[$index]['id']) {

            $bank[$index]['funds'] += $_POST['funds'];
            addMessage('Pridėta lėšų');
        }
    }
    setBank($bank);
    header('Location: ' . URL);
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
    $int = $_POST['id'];
    $array = str_split($int);
    foreach ($bank as $key => $value) {
        if (isset($key['id']) && $key['id'] == $int) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }

        if (count($array) != 11) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (!is_numeric($array[0]) && $array[0] < 1 && $array[0] > 6) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (!is_numeric($array[1]) && !is_numeric($array[2])) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (!is_numeric($array[3]) && $array[3] != 0 && $array[3] != 1) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (!is_numeric($array[4])) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (!is_numeric($array[5]) && $array[5] <= 3) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (!is_numeric($array[5]) && !is_numeric($array[6]) && !is_numeric($array[7]) && !is_numeric($array[8]) && !is_numeric($array[9]) && !is_numeric($array[10])) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
        if (strlen($_POST['name']) < 3 && strlen($_POST['surname']) < 3) {
            addMessage('Nepavyko');
            header('Location: ' . URL . '?route=add');
            exit;
        }
    }
    $count = count($bank);
    $bank[$count]['name'] = $_POST['name'];
    $bank[$count]['surname'] = $_POST['surname'];
    $bank[$count]['id'] = $_POST['id'];
    $bank[$count]['acc'] = 'LT0123456' . rand(10000000000, 99999999999);
    $bank[$count]['funds'] = 0;
    setBank($bank);
    $bank = getBank();
    addMessage('sukurta');
    header('Location: ' . URL);
}

function getList()
{
    $bank = getBank();
    array_multisort(array_column($bank, 'surname'), SORT_DESC, $bank);

    require __DIR__ . '/view/list.php';
}
function addMessage(string $msg): void
{
    $_SESSION['msg'][] = ['msg' => $msg];
}

function clearMessages(): void
{
    $_SESSION['msg'] = [];
}

function showMessages(): void
{
    $messages = $_SESSION['msg'];
    clearMessages();
    require __DIR__ . '/view/msg.php';
}