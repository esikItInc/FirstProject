<?php


namespace App\Controllers;

use App\Models\User;


class  RegistrationController
{
    public function form()
    {
        require_once 'resources/views/registration.php';
    }

    public function registration()
    {
        $users = new User();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user = $users->create(['name' => $name, 'email' => $email, 'password' => $password]);
        header('location: /');
    }
}