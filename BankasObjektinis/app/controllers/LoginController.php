<?php

namespace Bank\Objektinis\Controllers;

use Bank\Objektinis\App;
use Bank\Objektinis\Json;

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




    // public function login()
    // {
    //     $name = $_POST['name'] ?? ''; // ivestas el pastas
    //     $pass = md5($_POST['pass']) ?? '';
    //     $user = $this->get()->show($name);
    //     if (empty($user)) {
    //         App::addMessage('danger', 'Kažkas blogai');
    //         App::redirect('login');
    //     }
    //     if ($user['pass'] == $pass) {
    //         $_SESSION['login'] = 1;
    //         $_SESSION['name'] = $user['name'];
    //         App::addMessage('success', 'Sėkmingai prisijungta');
    //         App::redirect('list');
    //     }
    //     App::addMessage('danger', 'Kažkas blogai');
    //     App::redirect('login');
    // }

    // public function logout()
    // {
    //     unset($_SESSION['login'], $_SESSION['name']);
    //     App::addMessage('success', 'Puikiai atsijungta, šaunuolytė!');
    //     App::redirect('login');
    // }
}