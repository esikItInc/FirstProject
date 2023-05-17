<?php


namespace App\Controllers;

<<<<<<< HEAD
use App\Models\User;
use framework\Src\Request;
=======
use App\Models\User2;
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8


class  LoginController
{
<<<<<<< HEAD
    public function form()
    {
        $users = new User();
=======
    public function index()
    {
        $users = new User2();
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
        $users = $users->get();
        require_once 'resources/views/login.php';
    }

    public function checkUser()
    {
<<<<<<< HEAD
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


=======

        $users = new User2();
      if ($users->userLogin($_POST['email'], $_POST['password']) > 0)
      {
            header('location: /');
      }
      else
      {
          echo "Вы ввели неверные данные";
      }
    }
}
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
