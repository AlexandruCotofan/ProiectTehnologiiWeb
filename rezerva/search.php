<?php
$data = "k";
if (isset($_GET['q'])) {
    $data = $_GET['q'];
}
$db = new mysqli('localhost', 'root', '', 'login_db');
if ($db->connect_error) {
    exit('db not found');
}

$x = "select * from sali_sport where nume like '$data%' limit 1";
$y = $db->query($x);

if ($y) {
    $z = $y->fetch_assoc();
    echo "<h1>" . $z['nume'] . "</h1>";
}

?>


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

</body>

</html>