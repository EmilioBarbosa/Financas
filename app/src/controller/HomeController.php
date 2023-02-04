<?php
namespace App\controller;

use App\view\View;

class HomeController
{
    /**
     * @throws \Exception
     */
    public function home(): string
    {
        return View::make('home');
    }

    public function login(): string
    {
        return View::make('login');
    }

    public function register(): string
    {
        return View::make('register');
    }

}