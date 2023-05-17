<?php


$id = null;

<<<<<<< HEAD
=======

>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
if ($_SERVER['REQUEST_URI'] == '/')
{
    $controller = new \App\Controllers\ArticlesTopicController();
    echo $controller->index();
}
if ($_SERVER['REQUEST_URI'] == '/group.php')
{
    $controller = new \App\Controllers\ArticlesController();
    echo $controller->index();
}

if ($_SERVER['REQUEST_URI'] == "/createArticle.php")
{
    $controller = new \App\Controllers\ArticlesController();
    $controller->formArticleCreate();
}

elseif ($_SERVER['REQUEST_URI'] == '/article/create')
{
    $controller = new \App\Controllers\ArticlesController();
    $controller->createArticle();
}

<<<<<<< HEAD
elseif ($_SERVER['REQUEST_URI'] == '/registration.php')
{
    $controller = new \App\Controllers\RegistrationController();
    $controller->form();
}
elseif ($_SERVER['REQUEST_URI'] == '/reg/user')
{
    $controller = new \App\Controllers\RegistrationController();
    $controller->registration();
}

elseif ($_SERVER['REQUEST_URI'] == '/login.php')
{
    $controller = new \App\Controllers\LoginController();
    $controller->form();
}
=======
elseif ($_SERVER['REQUEST_URI'] == '/login.php')
{
    $controller = new \App\Controllers\LoginController();
    $controller->index();
}

>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
elseif ($_SERVER['REQUEST_URI'] == '/user/login')
{
    $controller = new \App\Controllers\LoginController();
    $controller->checkUser();
}

<<<<<<< HEAD

=======
elseif ($_SERVER['REQUEST_URI'] == '/registration.php')
{
    $controller = new \App\Controllers\RegistrationController();
    $controller->index();
}
elseif ($_SERVER['REQUEST_URI'] == '/reg/user')
{
    $controller = new \App\Controllers\RegistrationController();
    $controller->store();
}
elseif ($_SERVER['REQUEST_URI'] == '/article/create')
{
    $controller = new \App\Controllers\ArticlesTopicController();
    $controller->index();
}
>>>>>>> a7f9b586293d3d12cfc8515c82dd45ee8e4957a8
elseif ($_SERVER['REQUEST_URI'] == '/group.php?id=1' or $_SERVER['REQUEST_URI'] == '/group.php?id=2' or $_SERVER['REQUEST_URI'] == '/group.php?id=3' or $_SERVER['REQUEST_URI'] == '/group.php?id=4')
{
    $controller = new \App\Controllers\ArticlesController();
    $controller->index();
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if ($_SERVER['REQUEST_URI'] == "/article.php?id=" . $id)
{
    $controller = new \App\Controllers\ArticlesController();
    $controller->somearticle();
}
if ($_SERVER['REQUEST_URI'] == "/create/comment")
{
    $controller = new \App\Controllers\ArticlesController();
    $controller->createComm();
}









