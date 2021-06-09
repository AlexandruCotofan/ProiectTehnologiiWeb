<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$vector=array();
if ($result->num_rows > 0) {
  while($row = mysqli_fetch_array($result)) {
      array_push($vector,$row["email"]);
  }
   
} else {
  echo "0 results";
}


// $arrayLength = count($vector);
// $i = 0;
//        while ($i < $arrayLength)
//        {
//            $bam=$vector[$i];
//            $sql="SELECT count(*) as total from info where email='$vector[$i]'";
//            $result = $conn->query($sql);
//            $data=mysqli_fetch_assoc($result);
//            $ceva=$data['total'];
//            $i++;
//             $sqlgeneral="select * from clasament where email='$bam'";
//            $resultat = $conn->query($sql);
//            if($resultat==false)
//            {
//                 $sql2="insert into clasament(email,nr_antrenamente) values ('$bam','$ceva')";
//                 $result = $conn->query($sql2);
//            }
//            else {
//                 $sql1="update clasament set nr_antrenamente='$ceva' where email='$bam'";
//                 $result = $conn->query($sql1);
//            }
//            else{
//                  $sql2="insert into clasament(email,nr_antrenamente) values ('$bam','$ceva')";
//                 $result = $conn->query($sql2);
//            }
//        }
$arrayLength = count($vector);
 $i = 0;
        while ($i < $arrayLength)
        {
            $bam=$vector[$i];
            $sql="SELECT count(*) as total from info where email='$vector[$i]'";
            $result = $conn->query($sql);
            $data=mysqli_fetch_assoc($result);
            $ceva=$data['total'];
            $sql3="select user_name from users where email='$vector[$i]'";
            $resultat = $conn->query($sql3);
            $data=mysqli_fetch_assoc($resultat);
            $user=$data['user_name'];
            $sql2="insert into clasament(email,nr_antrenamente,user_name) values ('$bam','$ceva','$user')";
            $result = $conn->query($sql2);
            if(!$result)
            {
                $sql1="update clasament set nr_antrenamente='$ceva' where email='$bam'";
                 $result = $conn->query($sql1);
            }
            $i++;
          
        }
//$sql="SELECT nr_antrenamente 
//FROM 
//    (SELECT nr_antrenamente
//     FROM clasament 
//     ORDER BY nr_antrenamente DESC)
//WHERE  rownum <= 1";
//            $result = $conn->query($sql);;
//$row = $result->fetch_assoc();
//echo $row["nr_antrenamente"];
//$name = $conn->query("SELECT nr_antrenamente 
//FROM 
//    (SELECT nr_antrenamente
//     FROM clasament 
//     ORDER BY nr_antrenamente DESC)
//WHERE  rownum <= 1")->fetch_object()->name; 
//echo $name;

$sql = "SELECT email,nr_antrenamente,user_name FROM clasament order by nr_antrenamente desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    $gasit=0;
  while($row = $result->fetch_assoc()) {
     if($gasit==0){
         $gasit=1;
         $prim=$row["email"];
         $prima=$row["nr_antrenamente"];
         $username=$row["user_name"];
     }
         
  }
} else {
  echo "0 results";
}
echo "<br><br>";
 echo "<h1><center>Primul este : ".  $username ." cu un numar de ". $prima . " antrenamente.</center></h1>";


$sql = "SELECT email,nr_antrenamente,user_name FROM clasament order by nr_antrenamente desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
   echo "<br><br>";
  while($row = $result->fetch_assoc()) {
       echo "<h3><center><color:red>Nume: ".$row["user_name"]. ", email : ". $row["email"] .", nr de antrenamente efectuate: ". $row["nr_antrenamente"] . ".</center></h3>";

        
     }
         
} else {
  echo "0 results";
}
$conn->close();


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