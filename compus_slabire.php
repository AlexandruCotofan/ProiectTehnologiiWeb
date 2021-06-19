<?php
session_start();
$error=NULL;

include("connection.php");
//include("function.php");
include("server-generator.php");
$user_data=check_login($con);

if(isset($_POST['submit'])){
    
    //Get form data
    $inaltime=$_POST['inaltime'];
    $greutate=$_POST['greutate'];
    $grupa_muschi_1=$_POST['grupa_muschi_1'];
    $grupa_muschi_2=$_POST['grupa_muschi_2'];
    $locatie=$_POST['locatie'];
    $dificultate=$_POST['dificultate'];

$client=new User(NULL, [
   "location" => "http://localhost:80/compus_slabire_server.php",
    "uri" => "http://got-soap-service.com"
    
]);

    $client-> setInaltime($inaltime);
    $client-> setGreutate($greutate);
    $client-> setGrupa_muschi1($grupa_muschi_1);
    $client-> setGrupa_muschi2($grupa_muschi_2);
    $client-> setLocatie($locatie);
    $client-> setDificultate($dificultate);
    $client->insertDb($user_data);
    $client->generare_frumoasa();
    
// header('Location: training.php');
//die;
}
 
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Generator</title>
    <link rel = "stylesheet" href = "training.css">
</head>
<body>
    <img src="poze/logo.jpg" class="logo">
    
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href = "epic.php">HOME</a></li>
                <li><a href = "classment.php">CLASAMENT</a></li>
            </ul>
        </nav>
    </div>
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>
<!--       <form class = "training__form" action = "training.php">-->
    <form class = "training__form" method="post" >
        <h1 class = "training__title">GENERARE ANTRENAMENT</h1>
        <label>ÎNĂLȚIME</label>
        <select name="inaltime" class = "training__select">
            <option selected disabled>Choose one</option>
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
        <select  name="greutate" class = "training__select">
            <option selected disabled>Choose one</option>
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
        <select  name="grupa_muschi_1" class = "training__select">
            <option selected disabled>Choose one</option>
            <option>abdomen</option>
            <option>coapse</option>
        </select>
        <label>GRUPA DE MUȘCHI 2</label>
        <select  name="grupa_muschi_2" class = "training__select">
            <option selected disabled>Choose one</option>
            <option>abdomen</option>
            <option>coapse</option>
        </select>
        <label>LOCAȚIE</label>
        <select  name="locatie" class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Aer liber</option>
            <option>Acasă</option>
        </select>
        <label>DIFICULTATE</label>
        <select name="dificultate" class = "training__select">
            <option selected disabled>Choose one</option>
            <option>Ușor</option>
            <option>Mediu</option>
            <option>Intensiv</option>
        </select>
        <input type = "submit" name="submit" class = "training__btn" value = "Antrenează-mă!">
    </form>
    
    
    
    <script>
      var menuBtn =document.getElementById("menuBtn")
      var sideNav =document.getElementById("sideNav")
      var menu =document.getElementById("menu")
      sideNav.style.right = "-250px";
      
        menuBtn.onclick=function(){
            if(sideNav.style.right=="-250px"){
                sideNav.style.right = "0";
                menu.src="poze/close.png";
            }
            else{
                sideNav.style.right = "-250px";
                menu.src="poze/menu.png";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
        });  
    </script>
</body>
</html>