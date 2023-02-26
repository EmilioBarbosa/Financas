<?php

namespace App\core\helpers;

class Session
{
    public static function hasEmptyInputValue(): void
    {
        session_start();
        $_SESSION['emptyValue'] = true;
    }

    public static function unsetEmptyValueVariable():void
    {
        session_start();
        unset($_SESSION['emptyValue']);
    }

    public static function setValue(string $key, string $value): void
    {
        self::startSession();
        $_SESSION[$key] = $value;
    }

    public static function startSession()
    {
        if (!$_SESSION){
            session_start();
        }
    }
}