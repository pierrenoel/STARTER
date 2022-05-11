<?php

require __DIR__.'/vendor/autoload.php';

use app\controllers\HomeController;
use app\controllers\ErrorController;

$url = $_SERVER['REQUEST_URI'];

switch($url)
{
    case '/':
        $homeController = new HomeController;
        $homeController->index();
        break;
    default:
        $errorController = new ErrorController;
        $errorController->index();
        break;
}
