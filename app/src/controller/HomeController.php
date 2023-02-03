<?php

namespace App\controller;

class HomeController
{
    public function index()
    {
        require "../src/view/home.view.php";
    }

    public function login()
    {
        require "../src/view/login.view.php";
    }

    public function register()
    {
        require "../src/view/register.view.php";
    }
}