<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistici</title>
    <link rel="stylesheet" href="css/training.css">
</head>

<body>
    <!--    <img src="poze/logo.jpg" class="logo">-->

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

    <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">

    <section class="training__container">
        <?php
        require_once "functii_php/personal_statistics.php";
        ?>
        <a class="training__btn" href="statistici.php">Statistici globale</a>
        <a class="training__btn" href="epic.php">Înapoi la pagina principală</a>
    </section>
</body>

</html>