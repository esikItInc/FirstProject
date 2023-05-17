<?php

namespace App\Controllers;

use App\Models\User2;

class  UserController
{
    public function index()
    {
        $users = new User2();
        $users = $users->get();
        require_once 'resources/views/index.php';
    }

    public function store()
    {
        $users = new User2();
        $user = $users->create($_POST);
        header('location: /');
    }
}