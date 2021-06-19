<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT email FROM curent";
            $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result)) {
                        $email=$row["email"];
                }
        
            $sql = "SELECT grupa_muschi_1 FROM info where email='$email'";
            $result = $conn->query($sql);
            $calorii=0;
                while($row = mysqli_fetch_array($result)) {
                        $now=$row["grupa_muschi_1"];
                        if($now=="abdomen")
                            $calorii=$calorii+200;
                        if($now=="coapse")
                            $calorii=$calorii+300;
                        if($now=="antebrat")
                            $calorii=$calorii+400;
                        if($now=="biceps")
                            $calorii=$calorii+500;
                        if($now=="piept")
                            $calorii=$calorii+230;
                        if($now=="spate")
                            $calorii=$calorii+430;
                        if($now=="triceps")
                            $calorii=$calorii+310;
                }
            $sql = "SELECT grupa_muschi_2 FROM info where email='$email'";
            $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result)) {
                        $now=$row["grupa_muschi_2"];
                        if($now=="abdomen")
                            $calorii=$calorii+200;
                        if($now=="coapse")
                            $calorii=$calorii+300;
                        if($now=="antebrat")
                            $calorii=$calorii+400;
                        if($now=="biceps")
                            $calorii=$calorii+500;
                        if($now=="piept")
                            $calorii=$calorii+230;
                        if($now=="spate")
                            $calorii=$calorii+430;
                        if($now=="triceps")
                            $calorii=$calorii+310;
                }
           $sql = "SELECT nr_antrenamente,antrenament_pref FROM clasament where email='$email'";
            $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result)) {
                        $grupa=$row["antrenament_pref"];
                      $nr=$row["nr_antrenamente"];
                }
                 $sql = "update curent set antrenament_pref='$grupa',nr_antrenamente='$nr',calorii='$calorii'";
            $result = $conn->query($sql);

            $sql = "SELECT * FROM info where email='$email'";
            $result = $conn->query($sql);
            $nr=0;
            while($row = mysqli_fetch_array($result)) {
             $nr=$nr+1;

  }
           echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";
            echo '<h2 align=center>'."In total ai un numar de  ".$nr." antrenamente pe site-ul nostru. "."<br />".'</h2>' ;
             echo '<h2 align=center>'."Grupa preferata a dumneavoastra este  ".$grupa."."."<br />".'</h2>' ;
            echo '<h2 align=center>'."In urma tuturor exercitiilor fizice ai ars un numar de ".$calorii." calorii."."<br />".'</h2>' ;









$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
$conn = new mysqli($servername, $username, $password, $dbname);

 $sql = "SELECT * FROM info";
 $result = $conn->query($sql);
 $calorii=0;
                while($row = mysqli_fetch_array($result)) {
                        $calorii=0;
                        $now=$row["grupa_muschi_1"];
                        if($now=="abdomen")
                            $calorii=$calorii+200;
                        if($now=="coapse")
                            $calorii=$calorii+300;
                        if($now=="antebrat")
                            $calorii=$calorii+400;
                        if($now=="biceps")
                            $calorii=$calorii+500;
                        if($now=="piept")
                            $calorii=$calorii+230;
                        if($now=="spate")
                            $calorii=$calorii+430;
                        if($now=="triceps")
                            $calorii=$calorii+310;

                        $now=$row["grupa_muschi_2"];
                        if($now=="abdomen")
                            $calorii=$calorii+200;
                        if($now=="coapse")
                            $calorii=$calorii+300;
                        if($now=="antebrat")
                            $calorii=$calorii+400;
                        if($now=="biceps")
                            $calorii=$calorii+500;
                        if($now=="piept")
                            $calorii=$calorii+230;
                        if($now=="spate")
                            $calorii=$calorii+430;
                        if($now=="triceps")
                            $calorii=$calorii+310;
                        $id=$row["id"];
                        insert($calorii,$id);
                }


 function insert($valoare,$id)
 {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
     $sql = "UPDATE info  set calorii='$valoare' where id='$id'";
     $result = $conn->query($sql);
 }

 $sql = "SELECT email FROM curent";
 $result = $conn->query($sql);
  while($row = mysqli_fetch_array($result)) {
       $email=$row["email"];
  }
  $sql = "SELECT * FROM info where email='$email'";
 $result = $conn->query($sql);
 $tu=0;
  while($row = mysqli_fetch_array($result)) {
        $prima=$row["data"];
        $doua=date('Y/m/d');
        $origin = date_create($prima);
        $target = date_create($doua);
        $interval = date_diff($origin, $target);
        $diferenta=$interval->format('%m');
        if($diferenta==0){
         $now=$row["calorii"];
         $tu=$tu+$now;
      }
}
if($tu>0)
echo '<h2 align=center>'."In luna aceasta ai ars ". $tu . " calorii."."<br />".'</h2>' ;


 $sql = "SELECT * FROM info where email='$email'";
 $result = $conn->query($sql);
 $tu_2=0;
  while($row = mysqli_fetch_array($result)) {
        $prima=$row["data"];
        $doua=date('Y/m/d');
        $origin = date_create($prima);
        $target = date_create($doua);
        $interval = date_diff($origin, $target);
        $diferenta=$interval->format('%m');
        if($diferenta==1){
         $now=$row["calorii"];
         $tu_2=$tu_2+$now;
      }
}


$diferenta=$tu-$tu_2;
if($diferenta>=0){
echo '<h2 align=center>'."Fata de luna trecuta ai ars cu +". $diferenta . " calorii mai mult."."<br />".'</h2>' ;
}
else
echo '<h2 align=center>'."Fata de luna trecuta ai avut un regres cu ". $diferenta . " calorii mai putin"."<br />".'</h2>' ;

   $sql = "SELECT email FROM curent";
 $result = $conn->query($sql);
  while($row = mysqli_fetch_array($result)) {
       $email=$row["email"];
  }
  $sql = "SELECT * FROM info where email='$email'";
 $result = $conn->query($sql);
 $nr_luna_asta=0;
  while($row = mysqli_fetch_array($result)) {
        $prima=$row["data"];
        $doua=date('Y/m/d');
        $origin = date_create($prima);
        $target = date_create($doua);
        $interval = date_diff($origin, $target);
        $diferenta=$interval->format('%m');
        if($diferenta==0){
         $nr_luna_asta=$nr_luna_asta+1;
      }
}

echo '<h2 align=center>'."In luna aceasta ai facut ". $nr_luna_asta . " antrenamente."."<br />".'</h2>' ;


 $sql = "SELECT * FROM info where email='$email'";
 $result = $conn->query($sql);
 $nr_luna_trecuta=0;
  while($row = mysqli_fetch_array($result)) {
        $prima=$row["data"];
        $doua=date('Y/m/d');
        $origin = date_create($prima);
        $target = date_create($doua);
        $interval = date_diff($origin, $target);
        $diferenta=$interval->format('%m');
        if($diferenta==1){
         $nr_luna_trecuta=$nr_luna_trecuta+1;
      }
}


$luni=$nr_luna_asta-$nr_luna_trecuta;
if($luni>0)
echo '<h2 align=center>'."Fata de luna trecuta ai facut cu ". $luni . " antrenamente mai mult."."<br />".'</h2>' ;
else
echo '<h2 align=center>'."Fata de luna trecuta ai facut cu ". $luni . " antrenamente mai putin."."<br />".'</h2>' ;

$gasit=0;
 $sql = "SELECT * FROM info where email='$email';";
 $result = $conn->query($sql);
 $vector=array();
 while($row = mysqli_fetch_array($result)) {
     $prima=$row["data"];
        $doua=date('Y/m/d');
        $origin = date_create($prima);
        $target = date_create($doua);
        $interval = date_diff($origin, $target);
        $diferenta=$interval->format('%m');
    if($row["grupa_muschi_1"]!=NULL && $diferenta==1){
        $gasit=1;
       array_push($vector,$row["grupa_muschi_1"]);
    }
   if($row["grupa_muschi_2"]!=NULL && $diferenta==1){
                  array_push($vector,$row["grupa_muschi_2"]);
                  $gasit=1;
              }
   }
   if($gasit==1){
   $arr_freq = array_count_values($vector);   
     arsort($arr_freq);
     $new_arr = array_keys($arr_freq);
     $v=$new_arr[0];
     $mystring = $v;
     $word = "biceps";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta ai facut mai mult biceps!"."<br />".'</h2>' ;
         $word = "triceps";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta ai facut mai mult triceps!"."<br />".'</h2>' ;
         $word = "antebrat";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta  ai facut mai mult antebrat!"."<br />".'</h2>' ;
         $word = "piept";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta ai facut mai mult piept!"."<br />".'</h2>' ;
         $word = "spate";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta ai facut mai mult spate!"."<br />".'</h2>' ;
         $word = "abdomen";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta ai facut mai mult abdomen!"."<br />".'</h2>' ;
         $word = "coapse";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna trecuta ai facut mai mult coapse!"."<br />".'</h2>' ;

}
$gasit=0;

$sql = "SELECT * FROM info where email='$email';";
 $result = $conn->query($sql);
 $vector=array();
 while($row = mysqli_fetch_array($result)) {
     $prima=$row["data"];
        $doua=date('Y/m/d');
        $origin = date_create($prima);
        $target = date_create($doua);
        $interval = date_diff($origin, $target);
        $diferenta=$interval->format('%m');
    if($row["grupa_muschi_1"]!=NULL && $diferenta==0){
       array_push($vector,$row["grupa_muschi_1"]);
       $gasit=1;
    }
   if($row["grupa_muschi_2"]!=NULL && $diferenta==0){
                  array_push($vector,$row["grupa_muschi_2"]);
                   $gasit=1;
               }
   }
   $arr_freq = array_count_values($vector);    
     arsort($arr_freq);
     $new_arr = array_keys($arr_freq);
     $v=$new_arr[0];
     $mystring = $v;
     $word = "biceps";
     if($gasit==1){
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult biceps...se vede ca vine vara!"."<br />".'</h2>' ;
         $word = "triceps";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult triceps...se vede ca vine vara!"."<br />".'</h2>' ;
         $word = "antebrat";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult antebrat!"."<br />".'</h2>' ;
         $word = "piept";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult piept!"."<br />".'</h2>' ;
         $word = "spate";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult spate!"."<br />".'</h2>' ;
         $word = "abdomen";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult abdomen!"."<br />".'</h2>' ;
         $word = "coapse";
     if(strpos($mystring, $word) !== false)
        echo '<h2 align=center>'."In luna aceasta ai facut mai mult coapse!"."<br />".'</h2>' ;
    }
























?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistici</title>
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
     