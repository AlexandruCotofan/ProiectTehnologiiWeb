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
} else {
  echo "0 results";
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

$sql = "SELECT email,nr_antrenamente,user_name,calorii FROM clasament order by CAST(calorii AS INT) desc";
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
      $calorii = $row["calorii"];
    }
  }
} else {
  echo "0 results";
}
echo "<h1><center>Primul este : " .  $username . " cu un numar de " . $calorii . " calorii arse și " . $prima . " antrenamente.</center></h1>";

function verificare($ceva)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login_db";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $verificat = 0;
  $sql = "SELECT verified FROM users where email='$ceva'";
  $result = $conn->query($sql);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      $verificat = $row["verified"];
    }
    return $verificat;
  }
  return $verificat;
}

$sql = "SELECT * FROM clasament order by CAST(calorii AS INT) desc";
$result = $conn->query($sql);

function get_data()
{
  $connect =  mysqli_connect("localhost", "root", "", "login_db");
  $query = "SELECT * FROM clasament ORDER BY CAST(calorii AS INT) DESC";
  $result = mysqli_query($connect, $query);
  $data = array();
  while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
      'id'             => $row["nr_crt"],
      'name'             => $row["user_name"],
      'email'             => $row["email"],
      'nr_antrenamente'             => $row["nr_antrenamente"],
      'preferat'             => $row["antrenament_pref"],
      'calorii'             => $row["calorii"]
    );
  }
  return json_encode($data);
}

$conn->close();
$file_name = "clasjson" . '.json';
file_put_contents($file_name, get_data());
