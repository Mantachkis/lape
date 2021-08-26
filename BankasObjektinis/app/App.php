<?php

namespace Bank\Objektinis;

use Bank\Objektinis\Controllers\BankController;

class App
{
    public static function start()
    {

        self::router();
    }

    public static function router()
    {
        $url = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
        $url = explode('/', $url);
        //_d($_SERVER);
        _d($url);

        if ('GET' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && '' == $url[0]) {
            return (new BankController)->home();
        }

        if ('GET' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'create' == $url[0]) {
            return (new BankController)->create();
        }
        if ('GET' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'list' == $url[0]) {
            return (new BankController)->list();
        }
        $update = ['add', 'deduct'];
        if ('POST' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && in_array($url[0], $update)) {
            return (new BankController)->edit($url[0]);
        }
        if ('POST' == $_SERVER['REQUEST_METHOD'] && 2 == count($url) && 'delete' == $url[0]) {
            return (new BankController)->delete($url[1]);
        }
        if ('POST' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'addFunds' == $url[0]) {
            return (new BankController)->addFunds();
        }
        if ('POST' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'deductFunds' == $url[0]) {
            return (new BankController)->deductFunds();
        }
        if ('POST' == $_SERVER['REQUEST_METHOD'] && 1 == count($url) && 'create' == $url[0]) {
            return (new BankController)->save();
        }
    }
    public static function view($page, $data = [])
    {

        extract($data);
        require DIR . "view/$page.php";
    }
    public static function redirect($url)
    {
        header('Location: ' . URL . $url);
        die;
    }
}