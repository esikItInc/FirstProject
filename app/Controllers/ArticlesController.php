<?php

namespace App\Controllers;

use App\Models\Articles;
use App\Models\ArticlesTopic;


class  ArticlesController
{

    public function index()
    {
        $articlesTopic = new ArticlesTopic();
        $articlesTopic = $articlesTopic->get();
        foreach ($articlesTopic as $key => $topic) {
            $articles = new Articles();
            $articles = $articles->getId($topic[0]);
            $articlesTopic[$key]['articles'] = $articles;
        }
        require_once "resources/views/group.php";
    }

    public function formArticleCreate()
    {
        $articlesTopic = new ArticlesTopic();
        $articlesTopic = $articlesTopic->get();
        $articles = new Articles();
        $articles = $articles->get();
        require_once 'resources\views\createArticle.php';
    }

    public function createArticle()
    {
        $articl = new Articles();
        $artic = $articl->create($_POST);
        header('location: /');
    }
    public function somearticle()
    {
        $articles = new Articles();
        $articles = $articles->get();

        require_once "resources/views/article.php";
    }



}


