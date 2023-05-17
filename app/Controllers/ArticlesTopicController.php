<?php


namespace App\Controllers;

use App\Models\ArticlesTopic;


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

        $titles = new ArticlesTopic();
        $titles = $titles->create($_POST);
        header('location: /');
    }
}