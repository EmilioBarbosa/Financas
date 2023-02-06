<?php

namespace App\core;

abstract class Model {
    abstract public function save($data = []): void;

}