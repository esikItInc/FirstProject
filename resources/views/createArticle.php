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
    <form action="/article/create" method="post">
        <div style="padding-top: 20px;">
            <div class="row justify-content-center">
                <div class="col-md-7 border">
                    <h3>Создать статью</h3>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Название</label>
                        <input type="text" required name="name" class="form-control" id="name" >
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Описание</label>
                        <input type="description" required name="description" class="form-control" id="description">
                    </div>
                    <label for="articles_topic_id">Выбирите категорию</label>
                    <select id="articles_topic_id" name="articles_topic_id">
                        <?php
                        foreach ($articlesTopic as $topic)
                        {
                        ?>
                        <option value="<?php echo $topic[0]?>"><?php echo $topic[1]?></option>

                        <?php }?>
                    </select>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>