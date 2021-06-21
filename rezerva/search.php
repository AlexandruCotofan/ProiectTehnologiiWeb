<?php
$data="k";
if(isset($_GET['q'])){
    $data=$_GET['q'];
}
$db=new mysqli('localhost','root','','login_db');
if($db->connect_error){
    exit('db not found');
}

$x="select * from sali_sport where nume like '$data%' limit 1";
$y= $db->query($x);

if($y){
    $z= $y->fetch_assoc();
    echo "<h1>".$z['nume']."</h1>";
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
<!--    <img src="poze/logo.jpg" class="logo">-->
    
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href = "epic.php">HOME</a></li>
            </ul>
        </nav>
    </div>
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>

</body>
</html>