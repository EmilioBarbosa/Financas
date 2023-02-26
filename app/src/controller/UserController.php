<?php

namespace App\controller;

use App\core\Controller;
use App\core\helpers\Session;
use App\model\User;
use http\Header;

class UserController extends Controller
{
    public function store()
    {

        $this->validatePassword($_POST['password'], $_POST['passwordConfirmation']);
        $user = new User($_POST['name'], $_POST['username'], $_POST['email'], $_POST['password']);
        $user->save();

        header("Location: {$this->env['APP_URL']}");
    }

    public function validatePassword(string $password, string $passwordConfirmation)
    {
        if (($password !== $passwordConfirmation) || empty($passwordConfirmation)){
            Session::hasEmptyInputValue();
            Session::setValue('emptyPasswordConfirmation', true);
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}