<?php

namespace App\core;

abstract class Model extends DB_Connection {
    abstract public function save($data = []): void;
    abstract public function sanitizeAttributes(): void;

}