<?php

namespace Bank\Objektinis\Controllers;

use Bank\Objektinis\App;


class HomeController
{

    public function home()
    {
        return App::view('home');
    }
}