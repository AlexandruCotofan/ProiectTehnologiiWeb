<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT email FROM curent";
$result = $conn->query($sql);
while($row = mysqli_fetch_array($result)) {
           $email=$row["email"];
}

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
 	if($row["grupa_muschi_1"]!=NULL && $diferenta==1)
       array_push($vector,$row["grupa_muschi_1"]);
   if($row["grupa_muschi_2"]!=NULL && $diferenta==1)
                  array_push($vector,$row["grupa_muschi_2"]);
   }
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
    

   

?>