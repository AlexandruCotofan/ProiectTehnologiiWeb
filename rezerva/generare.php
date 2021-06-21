<?php
session_start();
$error=NULL;

include("connection.php");
//include("function.php");
include("server-generator.php");
$user_data=check_login($con);

if(isset($_POST['submit'])){
    
    //Get form data
    $tip=$_POST['tip_antrenament'];
    $your_goal=$_POST['your_goal'];

//$client=new User(NULL, [
//   "location" => "http://localhost:80/generareclasa.php",
//    "uri" => "http://got-soap-service.com"
    if($tip=="Simplu" && $your_goal=="Slabire"){
        header('Location: simplu_slabire.php');
        die;
    }
    if($tip=="Simplu" && $your_goal=="Masa Musculara"){
        header('Location: simplu_masa.php');
        die;
    }
    if($tip=="Compus" && $your_goal=="Slabire"){
        header('Location: compus_slabire.php');
        die;
    }
    if($tip=="Compus" && $your_goal=="Masa Musculara"){
        header('Location: compus_masa.php');
        die;
    }
//]);

//    $client-> setTip($tip);
//    $client-> setGoal($your_goal);
    
    
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
    <link rel = "stylesheet" href = "css/training.css">
</head>
<body>
    <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">
    
    <form class = "training__form" method="post" >
        <h1 class = "training__title">TIP ANTRENAMENT</h1>
        <label>PACHET</label>
        <select required name="tip_antrenament" class = "training__select">
            <option value=''>Alege una</option>
            <option>Simplu</option>
            <option>Compus</option>
        </select>
        <label>SCOP</label>
        <select required name="your_goal" class = "training__select">
            <option value=''>Alege una</option>
            <option>Slabire</option>
            <option>Masa Musculara</option>
        </select>
        <input type = "submit" name="submit" class = "training__btn" value = "GO!">
    </form>
</body>
</html>