<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Login</title>
    <link rel="stylesheet" href="training.css">
</head>

<body>
    <?php
    require_once "header.php";
    ?>

    <img src="poze/logo.jpg" class="logo">

    <div id="box">
        <form class="training__form" action="login.php" method="POST">
            <h1 class="training__title">Autentificare</h1>
            <input class="training__input" name="email" type="email" placeholder="Email">
            <input class="training__input" type="password" name="password" placeholder="Parolă">

            <?php
            require_once "functii_php/login_function.php";
            ?>

            <input class="training__btn" type="submit" name="submit" value="Autentificare">
            <a class="training__btn" href="registration.php">Nu ai cont? Creează aici!</a>
        </form>
    </div>


</body>

</html>