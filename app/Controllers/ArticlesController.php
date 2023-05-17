<?php

namespace App\Controllers;

use App\Models\Articles;
use App\Models\ArticlesTopic;
use App\Models\Comment;

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
<<<<<<< HEAD
        $articl = new Articles();
        $artic = $articl->create($_POST);
=======

        $articl = new Articles();
        $artic = $articl->articleCreate($_POST);
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
        header('location: /');
    }
    public function somearticle()
    {
        $articles = new Articles();
        $articles = $articles->get();
        foreach ($articles as $key => $article)
        {
            $comments = new Comment();
            $comments = $comments->ArticlesId($article[0]);
            $articles[$key]['comments'] = $comments;
        }
        require_once "resources/views/article.php";
    }
    public function createComm()
    {

        $comments = new Comment();
        $comment = $comments->create($_POST);
        header('location: /');
    }


<<<<<<< HEAD
=======

>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
}


