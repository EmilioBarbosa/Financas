<?php

namespace App\core;

use PDO;
use Dotenv\Dotenv;

class DB_Connection
{
    protected PDO $con;
    private $username;
    private $password;
    private $dsn;
    public function __construct()
    {
        $this->getMySqlEnvVariables();

        try {
            $this->con = new PDO($this->dsn, $this->username, $this->password);
        }
        catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getMySqlEnvVariables()
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../../');
        $dotenv->load();

        $this->username = $_ENV['MYSQL_USER'];
        $this->password = $_ENV['MYSQL_PASSWORD'];
        $this->dsn = "{$_ENV['DB_DRIVER']}:host={$_ENV['DB_HOST']};dbname={$_ENV['MYSQL_DATABASE']}";
    }
}