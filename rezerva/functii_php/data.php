<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM clasament ORDER BY CAST(calorii AS INT) DESC";
$result = mysqli_query($conn, $sql);

//storring in array;
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
//returning response in JSON format

echo json_encode($data);
