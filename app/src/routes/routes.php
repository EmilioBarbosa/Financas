<?php

use App\controller\HomeController;

require_once __DIR__ . "/../../vendor/autoload.php";


$router = new \App\routes\Router();

$router->get('/', [HomeController::class, 'index']);
$router->get('/login', [HomeController::class, 'index']);

$router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));