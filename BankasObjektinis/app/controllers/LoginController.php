<?php

namespace Bank\Objektinis\Controllers;

use Bank\Objektinis\App;
use Bank\Objektinis\Login\Json;

class LoginController
{

    public function showLogin()
    {
        return App::view('login');
    }

    function login()
    {

        $name = $_POST['name'] ?? '';
        $pass = $_POST['pass'] ?? '';
        $user = Json::get()->show($name);
        if (empty($user)) {
            App::addMessage('Kažkas blogai');
            App::redirect('login');
        }
        if ($user['pass'] == $pass) {
            $_SESSION['login'] = 1;
            $_SESSION['name'] = $user['name'];
            App::addMessage('success', 'Sėkmingai prisijungta');
            App::redirect('list');
        }
        App::addMessage('danger', 'Kažkas blogai');
        App::redirect('login');
    }

    public function logout()
    {
        unset($_SESSION['login'], $_SESSION['name']);
        App::addMessage('Atsijugta');
        App::redirect('login');
    }
}