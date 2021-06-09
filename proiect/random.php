

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Generator</title>
    <link rel="stylesheet" href="training.css">
</head>

<body>
    <?php
    require_once "header.php";
    ?>

    <img src="poze/logo.jpg" class="logo">

    <section class = "training__container">
        <?php
        require_once "functii_php/generator_function.php";
        ?>

        <a class="training__btn" href = "results.php">Încheie antrenamentul</a>
    </section>
</body>

</html>