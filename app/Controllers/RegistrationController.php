<?php


namespace App\Controllers;

<<<<<<< HEAD
use App\Models\User;
=======
use App\Models\RegUser;
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8


class  RegistrationController
{
<<<<<<< HEAD
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
=======
    public function index()
    {
        $users = new RegUser();
        $users = $users->get();
        require_once 'resources/views/registration.php';
    }

    public function store()
    {
        $users = new RegUser();
        $user = $users->create($_POST);
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
        header('location: /');
    }
}