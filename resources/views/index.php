<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<h3>Список пользователей</h3>-->

<!--<form action="/users/store" method="post" enctype="multipart/form-data">-->
<!--    <label for="name">Имя</label>-->
<!--    <input type="text" name="name" id="name" placeholder="Введите имя">-->
<!--    <label for="lastname">Имя</label>-->
<!--    <input type="text" name="lastname" id="lastname" placeholder="Введите имя">-->
<!--    <input type="file" name="file">-->
<!--    <button type="submit">Создать</button>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

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
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <?php
                        $authUser = new \Framework\Auth\AuthUser();
                        if ($authUser->user()){
                        echo "Здравствуйте, ".$authUser->user()['name'];
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div style="padding-top: 20px;">

        <div class="col-md-12 border-bottom">
            <div class="row">
                <div class="col-4">
                        <?php

                        foreach ($titles as $title)
                        {
                            echo "<a href='group.php?id=$title[0]'>$title[1]</a><br>";
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Создание новой темы</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/articletopic/create" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="group" class="col-form-label">Название темы</label>
                        <input type="text" required name="name" class="form-control" id="group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>

            </form>
        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>