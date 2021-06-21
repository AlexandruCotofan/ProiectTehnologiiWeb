<?php
session_start();
$error = NULL;

include("connection.php");
//include("function.php");
include("server-generator.php");
$user_data = check_login($con);

if (isset($_POST['submit'])) {

    //Get form data
    $inaltime = $_POST['inaltime'];
    $greutate = $_POST['greutate'];
    $grupa_muschi_1 = $_POST['grupa_muschi_1'];
    $grupa_muschi_2 = $_POST['grupa_muschi_2'];
    $locatie = $_POST['locatie'];
    $dificultate = $_POST['dificultate'];

    $client = new User(NULL, [
        "location" => "http://localhost:80/compus_masa_server.php",
        "uri" => "http://got-soap-service.com"

    ]);

    $client->setInaltime($inaltime);
    $client->setGreutate($greutate);
    $client->setGrupa_muschi1($grupa_muschi_1);
    $client->setGrupa_muschi2($grupa_muschi_2);
    $client->setLocatie($locatie);
    $client->setDificultate($dificultate);
    $client->insertDb($user_data);
    $client->generare_frumoasa();

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
    <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">

    <form class="training__form" method="post">
        <h1 class="training__title">GENERARE ANTRENAMENT</h1>
        <label>ÎNĂLȚIME</label>
        <select required name="inaltime" class="training__select">
            <option value=''>Alege una</option>
            <option>sub 80 cm</option>
            <option>80-100 cm</option>
            <option>100-120 cm</option>
            <option>120-140 cm</option>
            <option>140-160 cm</option>
            <option>160-180 cm</option>
            <option>180-200 cm</option>
            <option>200+ cm</option>
        </select>
        <label>GREUTATE</label>
        <select required name="greutate" class="training__select">
            <option value=''>Alege una</option>
            <option>sub 30 kg</option>
            <option>30-40 kg</option>
            <option>40-50 kg</option>
            <option>50-70 kg</option>
            <option>70-90 kg</option>
            <option>90-110 kg</option>
            <option>110-130 kg</option>
            <option>130+ kg</option>
        </select>
        <label>GRUPA DE MUȘCHI 1</label>
        <select required name="grupa_muschi_1" class="training__select">
            <option value=''>Alege una</option>
            <option>antebrat</option>
            <option>biceps</option>
            <option>piept</option>
            <option>spate</option>
            <option>triceps</option>
        </select>
        <label>GRUPA DE MUȘCHI 2</label>
        <select required name="grupa_muschi_2" class="training__select">
            <option value=''>Alege una</option>
            <option>antebrat</option>
            <option>biceps</option>
            <option>piept</option>
            <option>spate</option>
            <option>triceps</option>
        </select>
        <label>LOCAȚIE</label>
        <select required name="locatie" class="training__select">
            <option value=''>Alege una</option>
            <option>Aer liber</option>
            <option>Acasă</option>
        </select>
        <label>DIFICULTATE</label>
        <select required name="dificultate" class="training__select">
            <option value=''>Alege una</option>
            <option>Ușor</option>
            <option>Mediu</option>
            <option>Intensiv</option>
        </select>
        <input type="submit" name="submit" class="training__btn" value="Antrenează-mă!">
    </form>
</body>

</html>