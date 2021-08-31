<?php

namespace Bank\Objektinis\Controllers;

use Bank\Objektinis\App;
use Bank\Objektinis\Json;

class BankController
{

    public function list()
    {
        $bank = Json::get()->showAll();
        return App::view('list', ['bank' => $bank]);
    }
    public function __construct()
    {
        if (!App::isLogged()) {
            App::redirect('login');
        }
    }
    public function create()
    {
        return App::view('acc');
    }
    public function save()
    {
        $bank = Json::get();
        $int = $_POST['id'];
        $array = str_split($int);

        foreach ($bank->getData() as $key => $value) {

            if (isset($value['id']) && $value['id'] == $int) {
                App::addMessage('Toks kodas jau buvo');
                return App::view('acc');
                exit;


                if (count($array) != 11) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (!is_numeric($array[0]) && $array[0] < 1 && $array[0] > 6) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (!is_numeric($array[1]) && !is_numeric($array[2])) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (!is_numeric($array[3]) && $array[3] != 0 && $array[3] != 1) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (!is_numeric($array[4])) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (!is_numeric($array[5]) && $array[5] <= 3) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (!is_numeric($array[5]) && !is_numeric($array[6]) && !is_numeric($array[7]) && !is_numeric($array[8]) && !is_numeric($array[9]) && !is_numeric($array[10])) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
                if (strlen($_POST['name']) < 3 && strlen($_POST['surname']) < 3) {
                    App::addMessage('Nepavyko');
                    return App::view('acc');
                    exit;
                }
            }
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $id = $_POST['id'];
            $acc = 'LT0123456' . rand(10000000000, 99999999999);
            $funds = 0;
            $new = ['name' => $name, 'surname' => $surname, 'id' => $id, 'acc' => $acc, 'funds' => $funds];
            App::addMessage('Sukurta sekmingai');
            Json::get()->create($new);
            App::redirect('list');
        }
    }


    public function delete($id)
    {


        Json::get()->delete($id);
        App::redirect('list');
    }
    public function edit($route)
    {
        $bank = Json::get()->showAll();
        foreach ($bank as $account) {
            if ($_POST['id'] == $account['id']) {
                return App::view($route, $account);
            }
        }
    }
    public function addFunds()
    {
        $bank = Json::get()->showAll();
        foreach ($bank as $account) {
            if ($_POST['id'] == $account['id']) {
                $account['funds'] += $_POST['funds'];
                Json::get()->update($_POST['id'], $account);
                App::addMessage('Pridėtos lėšos');
            }
        }
        return App::redirect('list');
    }
    public function deductFunds()
    {
        $bank = Json::get()->showAll();
        foreach ($bank as $account) {
            if ($_POST['id'] == $account['id']) {
                if (($account['funds'] - $_POST['funds']) >= 0) {
                    $account['funds'] -= $_POST['funds'];
                    Json::get()->update($_POST['id'], $account);
                    App::addMessage('Atimtos lėšos');
                } else {
                    App::addMessage('Trūksta lėšų');
                }
            }
        }

        return App::redirect('list');
    }
}