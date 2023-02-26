<?php

namespace App\controller;

use App\core\View;

class RegisterController
{
    public function create(): string
    {
        return View::make('register');
    }


}