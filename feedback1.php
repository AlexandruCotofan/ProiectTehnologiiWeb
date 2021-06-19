<?php

function get_data()
{
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql="SELECT user_name,email,nr_antrenamente from clasament";
    $result=$conn->query($sql);
    $data=array();
    while($row=mysqli_fetch_array($result))
    {
        $data[]=array(
        'user_name'   => $row["user_name"],
        'email'       => $row["email"],
        'nr_antrenamente'  =>$row["nr_antrenamente"]
        
        );
    }
    return json_encode($data);
}

$file_name='mesaj'. '.json';
file_put_contents($file_name,get_data());


?>