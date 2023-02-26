<?php

namespace App\core;

use Dotenv\Dotenv;

class Controller
{
    protected array $env;
    public function __construct()
    {
        $this->loadEnvVariables();
    }

    public function loadEnvVariables()
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
        $dotenv->load();

        $this->env = $_ENV;
    }
}