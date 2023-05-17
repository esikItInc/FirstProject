<?php


namespace App\Controllers;

use App\Models\User;
use framework\Src\Request;


class  LoginController
{
    public function form()
    {
        $users = new User();
        $users = $users->get();
        require_once 'resources/views/login.php';
    }

    public function checkUser()
    {
        $user = new User();
        $user = $user->where('email', $_POST['email']);

        if (!$user) {
            header('location: /user/login?error=true');
        } else{
            if (password_verify($_POST['password'], $user['password'])) {
                session_start();
                $_SESSION['user'] = $user;
                header('location: /');
            }
            else
            {
                header('location: /user/login?error=true');

            }
             }
    }
}


