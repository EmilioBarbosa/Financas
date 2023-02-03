<?php

use App\controller\HomeController;

require_once "../vendor/autoload.php";

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/'){
    $homeController =  new HomeController();
    $homeController->index();
}
if ($uri === '/login'){
    $homeController = new HomeController();
    $homeController->login();
}
if ($uri === '/register'){
    $homeController = new HomeController();
    $homeController->register();
}