<?php
namespace App\controller;

use App\core\View;

class LoginController
{

    public function create(): string
    {
        return View::make('login');
    }

}