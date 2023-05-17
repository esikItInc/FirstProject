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
                    <a class="nav-link" href="profile.php">
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



<?php
$authUser = new \Framework\Auth\AuthUser();
if ($authUser->user()){


?>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Карточка профиля</h5>
        <p class="card-text">Ник-нейм: <?php echo $authUser->user()['name']?></p>
        <p class="card-text">Почта: <?php echo $authUser->user()['email']?></p>
        <a href="#" class="btn btn-primary">Мои статьи</a>
    </div>
</div>
<?php
}
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>