<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
            integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="https://kit.fontawesome.com/fd4d0fbb9f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Game</label>
    <ul>
        <?php if ($auth->isLogged()) { ?>
            <li><a class="" href="#"><?= $auth->getLoggedUserName() ?></a></li>
        <?php } ?>
        <li><a class="" href="?c=home">Home</a></li>
        <li><a class="" href="?c=home&a=story">Story</a></li>
        <li><a class="" href="?c=home&a=classes">Classes</a></li>
        <li><a class="" href="#">Forum</a></li>
        <?php if ($auth->isLogged()) { ?>
            <li><a class="" href="?c=auth&a=logout">Logout</a></li>
        <?php } else { ?>
            <li><a class="" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Login</a></li>
        <?php } ?>
    </ul>
</nav>

<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
