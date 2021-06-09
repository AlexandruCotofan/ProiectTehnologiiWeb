<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="training.css">
</head>

<body>
    <?php
    require_once "header.php";
    ?>

    <img src="poze/logo.jpg" class="logo">

    <form class="training__form" method="post">
        <h1>Înregistrare</h1>
        <div class="txtb">
            <label>Username:</label>
            <input type="text" class="training__input" name="u" value="" placeholder="Introduceți username-ul">
        </div>

        <div class="txtb">
            <label>Parolă:</label>
            <input type="password" class="training__input" name="p" value="" placeholder="Introduceți parola">
        </div>
        <div class="txtb">
            <label>Repetă parola:</label>
            <input type="password" class="training__input" name="p2" value="" placeholder="Introduceți aceeași parolă">
        </div>

        <div class="txtb">
            <label>Email:</label>
            <input type="email" class="training__input" name="e" value="" placeholder="Introduceți email-ul">
        </div>
        <div class="txtb">

            <label>Gen:</label>
            <input type="text" class="training__input" name="g" value="" placeholder="Introduceți genul">
        </div>

        <div class="txtb">
            <label>Vârstă:</label>
            <input type="text" class="training__input" name="v" value="" placeholder="Introduceți vârsta">
        </div>

        <input class="training__btn" type="submit" value="Înregistare" name="submit" required />

        <?php
        require_once "functii_php/registration_function.php";
        ?>

        <a class="training__btn" href="login.php">Spre pagina de autentificare</a>
    </form>
</body>

</html>