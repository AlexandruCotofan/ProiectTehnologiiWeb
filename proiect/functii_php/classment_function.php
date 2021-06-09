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
$vector = array();
if ($result->num_rows > 0) {
  while ($row = mysqli_fetch_array($result)) {
    array_push($vector, $row["email"]);
  }
}

$arrayLength = count($vector);
$i = 0;
while ($i < $arrayLength) {
  $bam = $vector[$i];
  $sql = "SELECT count(*) as total from info where email='$vector[$i]'";
  $result = $conn->query($sql);
  $data = mysqli_fetch_assoc($result);
  $ceva = $data['total'];
  $sql3 = "select user_name from users where email='$vector[$i]'";
  $resultat = $conn->query($sql3);
  $data = mysqli_fetch_assoc($resultat);
  $user = $data['user_name'];
  $sql2 = "insert into clasament(email,nr_antrenamente,user_name) values ('$bam','$ceva','$user')";
  $result = $conn->query($sql2);
  if (!$result) {
    $sql1 = "update clasament set nr_antrenamente='$ceva' where email='$bam'";
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
  $gasit = 0;
  while ($row = $result->fetch_assoc()) {
    if ($gasit == 0) {
      $gasit = 1;
      $prim = $row["email"];
      $prima = $row["nr_antrenamente"];
      $username = $row["user_name"];
      echo "<h1><center>Primul este: " .  $username . " cu un numar de " . $prima . " antrenamente!</center></h1>";
    }
  }
}


$sql = "SELECT email,nr_antrenamente,user_name FROM clasament order by nr_antrenamente desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class = 'training__table'>
  <thead class = 'training__table__header'>
      <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Antrenamente efectuate</th>
      </tr>
  </thead>
  <tbody class = 'training__table__body'>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["user_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["nr_antrenamente"] . "</td></tr>";
  }
  echo "</tbody></table>";
} else {
  echo "Nicio persoană nu a realizat vreun antrenament";
}
$conn->close();


?>