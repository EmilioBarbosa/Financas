<?php

namespace App\model;
use App\core\helpers\Session;
use App\core\Model;

class User extends Model
{
    public function __construct(private string $name, private string $username, private string $email, private string $password)
    {
        parent::__construct();
        $this->validateAttributes();
    }
    public function save($data = []): void
    {
        $sql = 'INSERT INTO users (name,username, email, password) VALUES (:name, :username, :email, :password)';
        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        try {
            $stmt->execute();
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function sanitizeAttributes(): void
    {
        $this->name = filter_var($this->name, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->username = filter_var($this->username, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->email = filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function validateAttributes()
    {
        $attributes = get_object_vars($this);
        unset($attributes['con']);

        foreach ($attributes as $attribute){
            if (empty($attribute)){
                Session::hasEmptyInputValue();
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit();
            };
        }

        Session::unsetEmptyValueVariable();
        $this->sanitizeAttributes();
    }
}