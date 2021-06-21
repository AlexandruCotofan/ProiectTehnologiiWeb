<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/training.css">
</head>

<body>

    <header class="training__header">
        <div>
            Workout Generator
        </div>
        <a class="training__header__btn" href="login.php">
            Autentificare
        </a>
        <a class="training__header__btn" href="classment.php">
            Clasament
        </a>
    </header>

    <div class="training__form">

        <form method="post">
            <h1>Înregistrare</h1>
            <div class="txtb">
                <label>Username:</label>
                <input class="training__input" type="text" name="u" value="" placeholder="Introduceți username-ul">
            </div>

            <div class="txtb">
                <label>Parola:</label>
                <input class="training__input" type="password" name="p" value="" placeholder="Introduceți parola">
            </div>
            <div class="txtb">
                <label>Confirmă parola:</label>
                <input class="training__input" type="password" name="p2" value="" placeholder="Introduceți parola">
            </div>

            <div class="txtb">
                <label>Email:</label>
                <input class="training__input" type="email" name="e" value="" placeholder="Introduceți adresa email">
            </div>
            <div class="txtb">

                <label>Gen:</label>
                <input class="training__input" type="text" name="g" value="" placeholder="Introduceți genul">
            </div>

            <div class="txtb">
                <label>Vârsta:</label>
                <input class="training__input" type="text" name="v" value="" placeholder="Introduceți vârsta">
            </div>

            <a class="btn">
                <input class="training__btn" id="button" type="submit" value="Înregistrare" name="submit" required />
            </a>
            <?php
                require_once "functii_php/registration_function.php";
            ?>
            <a class="training__btn" href="login.php">Autentificare</a>
        </form>
    </div>
    <?php
    echo $error;
    ?>
</body>

</html>