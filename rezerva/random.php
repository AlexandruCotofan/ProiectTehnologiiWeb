<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Generator</title>
    <link rel="stylesheet" href="css/training.css">
</head>

<body>
    <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">

    <section class="training__container">
        <?php
        require_once "functii_php/generator_function.php";
        ?>
        <a class="training__btn" href="results.php">Încheie antrenamentul</a>
    </section>
</body>

</html>