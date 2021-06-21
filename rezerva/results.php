<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Results</title>
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

    <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">

    <?php
    require_once "functii_php/update_statistics.php";
    ?>

    <section class="training__container">
        <h1 class="training__title">FELICITĂRI! ANTRENAMENT ÎNCHEIAT!</h1>
        <a class="training__btn" href="about-you.php">Vedeți statisticile personale</a>
        <a class="training__btn" href="classment.php">Spre clasament</a>
        <a class="training__btn" href="epic.php">Spre pagina principală</a>
    </section>
</body>

</html>