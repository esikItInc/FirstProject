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
        <div class="col-md-12">
            <h3 class="display-6">
                <?php
                foreach ($articles as $article)
                {
                    if ($_GET['id'] == $article[0])
                    {
                     echo $article[1] ;
                    }
                }
                ?>
            </h3>
        </div>
        <div class="col-md-12 border-bottom">
            <div class="row">
                <div class="col-4">
                    <p href="article.html">
                        <?php
                        foreach ($articles as $article) {
                            if ($_GET['id'] == $article[0]) {
                                echo $article[2];
                            }
                        }
                        $article_id = $_GET['id'];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-4">
                <img src="" alt="">
            </div>
        </div>

            <div class="col-md-12">
                <p>Комментарии</p>
                <form action="/create/comment" method="post">
                    <input  type="text" placeholder="Имя автора"  name="user_name">
                    <input  type="text" placeholder="Ваш комментарий"  name="description">
                    <input type="hidden" name="articles_id" value="'<?=$article_id ?>'">
                    <button type="submit" class="btn btn-dark">Оставить комментарий</button>
                </form>
                <?php

            foreach ($articles as $key => $comment)
            {
                   foreach ($comment['comments'] as $comm) {;
                       if ($_GET['id'] == $comm[3])
                       {
                           echo "<p><b>$comm[1]</b></p>";
                           echo "<p>$comm[2]</p>";
                           echo "<br>";
                       }
                   }
            }
            ?>
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