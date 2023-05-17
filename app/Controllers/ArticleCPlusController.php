<?php

namespace App\Controllers;

use App\Models\Articles;



class  ArticleCPlusController
{
    public function index()
    {
        $articles = new Articles();
        $articles = $articles->get();
        require_once 'resources/views/groupC++.php';
    }

    public function store()
    {
        $articles = new Articles();
        $articles = $articles->create($_POST);
//        $dir = 'C:\OSPanel\domains\iamprogramist.loc\storage\\' . basename($_FILES['file']['name']);
//        move_uploaded_file($_FILES['file']['tmp_name'], $dir);
//        $users->update($user['id'], ['filename' => basename($_FILES['file']['name'])]);
        header('location: /');
    }
}