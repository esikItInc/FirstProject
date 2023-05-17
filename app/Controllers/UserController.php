<?php

namespace App\Controllers;

use App\Models\User;

class  UserController
{
    public function index()
    {
        $users = new User();
        $users = $users->get();
        require_once 'resources/views/index.php';
    }

    public function store()
    {
        $users = new User();
        $user = $users->create($_POST);
        header('location: /');
    }
}