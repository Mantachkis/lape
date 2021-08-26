<?php
session_start();
define('INSTALL', '/lape/bankasObjektinis/public/');
define('DIR', __DIR__ . '/');
define('URL', 'http://localhost/lape/bankasObjektinis/public/');

require DIR . 'vendor/autoload.php';

function showMessages()
{
    Bank\Objektinis\App::showMessages();
}