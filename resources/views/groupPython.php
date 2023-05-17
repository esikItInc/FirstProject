<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Темы блога</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.css">
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Авторизация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div style="padding-top: 20px;">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <a class="btn btn-primary" href="createArticle.html">Написать статью</a>
            </div>
        </div>
        <div class="col-md-12">
            <h3 class="display-5">
                <?php
                foreach ($articles as $article)
                {
                    if ($article[3] == "PYTHON")
                    {
                        echo $article[3];
                    }
                }

                ?>
            </h3>
        </div>
        <div class="col-md-12 border-bottom">
            <div class="row">
                <div class="col-4">
                    <a href="article.html">Статья 1</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 border-bottom">
            <div class="row">
                <div class="col-4">
                    <a href="article.html">Статья 2</a>
                </div>
            </div>
        </div>
    </div>

</div>



<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>