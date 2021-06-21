<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Generator</title>
    <link rel="stylesheet" href="css/training.css">
    <link rel="stylesheet" href="css/buton.css">
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
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT distinct email FROM info";
$result = $conn->query($sql);
$useri = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($useri, $row["email"]);
}
$nruseri = count($useri);
echo "<section class='training__container'>
        <h2>Statistici Globale</h2>";
for ($j = 0; $j < $nruseri; $j++) {

    $email = $useri[$j];
    $sql = "SELECT * FROM info where email='$email';";
    $result = $conn->query($sql);
    $vector = array();
    while ($row = mysqli_fetch_array($result)) {
        array_push($vector, $row["grupa_muschi_1"]);
        array_push($vector, $row["grupa_muschi_2"]);
    }
    $arrayLength = count($vector);
    $aparitii = array();
    $aparitii["piept"] = 0;
    $aparitii["coapse"] = 0;
    $aparitii["biceps"] = 0;
    $aparitii["triceps"] = 0;
    $aparitii["spate"] = 0;
    $aparitii["abdomen"] = 0;
    $aparitii["antebrat"] = 0;

    for ($i = 0; $i < $arrayLength; $i++) {
        if ($vector[$i] == "piept")
            $aparitii["piept"]++;
        if ($vector[$i] == "coapse")
            $aparitii["coapse"]++;
        if ($vector[$i] == "biceps")
            $aparitii["biceps"]++;
        if ($vector[$i] == "triceps")
            $aparitii["triceps"]++;
        if ($vector[$i] == "spate")
            $aparitii["spate"]++;
        if ($vector[$i] == "abdomen")
            $aparitii["abdomen"]++;
        if ($vector[$i] == "antebrat")
            $aparitii["antebrat"]++;
    }
    $max = 0;
    if ($aparitii["piept"] >= $max) {
        $max = $aparitii["piept"];
        $valoare = "piept";
    }
    if ($aparitii["coapse"] >= $max) {
        $max = $aparitii["coapse"];
        $valoare = "coapse";
    }
    if ($aparitii["biceps"] >= $max) {
        $max = $aparitii["biceps"];
        $valoare = "biceps";
    }
    if ($aparitii["triceps"] >= $max) {
        $max = $aparitii["triceps"];
        $valoare = "triceps";
    }
    if ($aparitii["spate"] >= $max) {
        $max = $aparitii["spate"];
        $valoare = "spate";
    }
    if ($aparitii["abdomen"] >= $max) {
        $max = $aparitii["abdomen"];
        $valoare = "abdomen";
    }
    if ($aparitii["antebrat"] >= $max) {
        $max = $aparitii["antebrat"];
        $valoare = "antebrat";
    }
    $sql = "SELECT user_name FROM clasament where email='$email'";
    $result = $conn->query($sql);
    $vector = array();
    while ($row = mysqli_fetch_array($result)) {
        $user = $row["user_name"];
    }

    $sql = "update clasament set antrenament_pref='$valoare' where email='$email'";
    $result = $conn->query($sql);

    $sql = "SELECT grupa_muschi_1 FROM info where email='$email'";
    $result = $conn->query($sql);
    $calorii = 0;
    while ($row = mysqli_fetch_array($result)) {
        $now = $row["grupa_muschi_1"];
        if ($now == "abdomen")
            $calorii = $calorii + 200;
        if ($now == "coapse")
            $calorii = $calorii + 300;
        if ($now == "antebrat")
            $calorii = $calorii + 400;
        if ($now == "biceps")
            $calorii = $calorii + 500;
        if ($now == "piept")
            $calorii = $calorii + 230;
        if ($now == "spate")
            $calorii = $calorii + 430;
        if ($now == "triceps")
            $calorii = $calorii + 310;
    }
    $sql = "SELECT grupa_muschi_2 FROM info where email='$email'";
    $result = $conn->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        $now = $row["grupa_muschi_2"];
        if ($now == "abdomen")
            $calorii = $calorii + 200;
        if ($now == "coapse")
            $calorii = $calorii + 300;
        if ($now == "antebrat")
            $calorii = $calorii + 400;
        if ($now == "biceps")
            $calorii = $calorii + 500;
        if ($now == "piept")
            $calorii = $calorii + 230;
        if ($now == "spate")
            $calorii = $calorii + 430;
        if ($now == "triceps")
            $calorii = $calorii + 310;
    }
    echo '<p>' . "Utilizatorul cu numele: " . $user . ", emailul: " . $email . ", are antrenamentul preferat: " . $valoare . " si a ars " . $calorii . " calorii." . '<p>';
    $sql = "update clasament set calorii='$calorii' where email='$email'";
    $result = $conn->query($sql);
    $sql = "select * FROM clasament where email='$email'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $amin = $row["nr_antrenamente"];
    }
    $id = 0;
    $sql = "select * FROM statistici where email='$email'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
    }
    if ($id == 0) {
        $sql2 = "insert into statistici (email,antrenament_pref,nr_crt,calorii) values('$email','$valoare','$amin','$calorii')";
        $result = $conn->query($sql2);
    } else {
        $sql1 = "update statistici set antrenament_pref='$valoare',nr_crt='$amin',calorii='$calorii' where email='$email'";
        $result = $conn->query($sql1);
    }
}
echo "<a class='training__btn' href='srss.php'>FORMAT RSS!</a>
        <a class='training__btn' href='about-you.php'>Vezi statistici personale</a>
    </section>";

?>