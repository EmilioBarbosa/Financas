<?php

use App\controller\HomeController;

require_once "../vendor/autoload.php";

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/'){
    $homeController =  new HomeController();
    $homeController->index();
}