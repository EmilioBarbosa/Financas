<?php

use App\controller\HomeController;
use App\controller\LoginController;
use App\controller\RegisterController;

require_once __DIR__ . "/../../vendor/autoload.php";


$router = new \App\core\Router();

$router->get('/', [HomeController::class, 'create']);
$router->get('/login', [LoginController::class, 'create']);
$router->get('/register', [RegisterController::class, 'create']);
$router->post('/register', [RegisterController::class, 'store']);

$router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));