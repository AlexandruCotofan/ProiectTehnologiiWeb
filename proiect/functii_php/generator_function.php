<?php
session_start();
include("connection.php");
include("server-generator.php");
$user_data = check_login($con);




$email = $user_data['email'];

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

$sql = "SELECT email, grupa_muschi,locatie FROM info where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        //    echo "email: " . $row["email"]. " - muschi: " . $row["grupa_muschi"].  "<br>";
        $grupa = $row["grupa_muschi"];
        $email = $row["email"];
        $locatie = $row["locatie"];
    }
} else {
    echo "0 results";
}
//echo $grupa . " " . $email . " " .$locatie;
//$conn->close();


$fileName = $grupa . ".json";
$json = file_get_contents($fileName);
$json_data = json_decode($json, true);

if ($locatie == "Aer liber" || $locatie == "Acasa") {
    foreach ($json_data as $element) {
        if ($element['tip'] == "acasa") {
            echo '<p class="nume">' . $element['nume'] . '</p>';
            echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
            echo '<p class="descriere">' . $element['descriere'] . '</p>';
            echo '<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
        }
    }
} else {
    foreach ($json_data as $element) {
        echo '<p class="nume">' . $element['nume'] . '</p>';
        echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
        echo '<p class="descriere">' . $element['descriere'] . '</p>';
        echo '<img class="imagine-generata" src="' . $element['imagine'] . '" alt="Imagine...">';
    }
}

?>