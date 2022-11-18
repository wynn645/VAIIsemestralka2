<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/fd4d0fbb9f.js" crossorigin="anonymous"></script>
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
        <li><a class="" href="?c=posts">Forum</a></li>
        <?php if ($auth->isLogged()) { ?>
        <li><a class="" href="?c=auth&a=logout">Logout</a></li>
        <?php } else { ?>
        <li><a class="" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Login</a></li>
        <?php } ?>
    </ul>
</nav>

<?= $contentHTML ?>
</body>
</html>
