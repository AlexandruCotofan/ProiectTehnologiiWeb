<?php
session_start();
include("connection.php");
include("server-generator.php");
        $user_data=check_login($con);




$email=$user_data['email'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, grupa_muschi_1,grupa_muschi_2,locatie FROM info where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
//    echo "email: " . $row["email"]. " - muschi: " . $row["grupa_muschi"].  "<br>";
    $grupa_1=$row["grupa_muschi_1"];
       $grupa_2=$row["grupa_muschi_2"];
    $email=$row["email"];
      $locatie=$row["locatie"];
  }
} else {
  echo "0 results";
}
  if($grupa_2==NULL)
     $i=1;
  else $i=2;

                if($i==1){
                    $fileName = $grupa_1 . ".json";
                $json = file_get_contents($fileName);
                $json_data = json_decode($json, true);

                if($locatie == "Aer liber" || $locatie == "Acasa"){
                    foreach($json_data as $element){
                        if($element['tip'] == "acasa"){
                            echo'<p class="nume">' . $element['nume'] . '</p>';
                            echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                            echo'<p class="descriere">' . $element['descriere'] . '</p>';
                            echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
                        }
                    }
                }
                else{
                    foreach($json_data as $element){
                        echo'<p class="nume">' . $element['nume'] . '</p>';
                        echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                        echo'<p class="descriere">' . $element['descriere'] . '</p>';
                        echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
                    }
                }
                }
                if($i==2){
                $fileName = $grupa_1 . ".json";
                $json = file_get_contents($fileName);
                $json_data = json_decode($json, true);

                if($locatie == "Aer liber" || $locatie == "Acasa"){
                    foreach($json_data as $element){
                        if($element['tip'] == "acasa"){
                            echo'<p class="nume">' . $element['nume'] . '</p>';
                            echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                            echo'<p class="descriere">' . $element['descriere'] . '</p>';
                            echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
                        }
                    }
                }
                else{
                    foreach($json_data as $element){
                        echo'<p class="nume">' . $element['nume'] . '</p>';
                        echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                        echo'<p class="descriere">' . $element['descriere'] . '</p>';
                        echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
                    }
                }
                    $fileName = $grupa_2 . ".json";
                $json = file_get_contents($fileName);
                $json_data = json_decode($json, true);

                if($locatie == "Aer liber" || $locatie == "Acasa"){
                    foreach($json_data as $element){
                        if($element['tip'] == "acasa"){
                            echo'<p class="nume">' . $element['nume'] . '</p>';
                            echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                            echo'<p class="descriere">' . $element['descriere'] . '</p>';
                            echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
                        }
                    }
                }
                else{
                    foreach($json_data as $element){
                        echo'<p class="nume">' . $element['nume'] . '</p>';
                        echo'<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                        echo'<p class="descriere">' . $element['descriere'] . '</p>';
                        echo'<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
                    }
                }
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
                <li><a href = "classment.php">CLASAMENT</a></li>
            </ul>
        </nav>
    </div>
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>

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