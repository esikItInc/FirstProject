<?php


namespace App\Controllers;

use App\Models\ArticlesTopic;


<<<<<<< HEAD
=======

>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
class  ArticlesTopicController
{
    public function index()
    {

        $titles = new ArticlesTopic();
        $titles = $titles->get();
        require_once 'resources/views/index.php';
    }

    public function store()
    {
<<<<<<< HEAD

=======
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
        $titles = new ArticlesTopic();
        $titles = $titles->create($_POST);
        header('location: /');
    }
}