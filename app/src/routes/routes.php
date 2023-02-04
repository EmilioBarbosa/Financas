<?php

use App\controller\HomeController;

require_once __DIR__ . "/../../vendor/autoload.php";


$router = new \App\routes\Router();

$router->get('/', [HomeController::class, 'home']);
$router->get('/login', [HomeController::class, 'login']);
$router->get('/register', [HomeController::class, 'register']);

$router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));