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

$sql = "SELECT email, grupa_muschi_1,grupa_muschi_2,locatie FROM info where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        //    echo "email: " . $row["email"]. " - muschi: " . $row["grupa_muschi"].  "<br>";
        $grupa_1 = $row["grupa_muschi_1"];
        $grupa_2 = $row["grupa_muschi_2"];
        $email = $row["email"];
        $locatie = $row["locatie"];
    }
} else {
    echo "0 results";
}
if ($grupa_2 == NULL)
    $i = 1;
else $i = 2;

if ($i == 1) {
    $fileName = $grupa_1 . ".json";
    $json = file_get_contents($fileName);
    $json_data = json_decode($json, true);

    if ($locatie == "Aer liber" || $locatie == "Acasa") {
        foreach ($json_data as $element) {
            if ($element['tip'] == "acasa") {
                echo '<div class="training__container__item">';
                echo '<p class="nume">' . $element['nume'] . '</p>';
                echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                echo '<p class="descriere">' . $element['descriere'] . '</p>';
                echo '<img class="training__container__item__image" src="' . $element['imagine'] . '" alt="Imagine...">';
                echo '</div>';
            }
        }
    } else {
        foreach ($json_data as $element) {
            echo '<div class="training__container__item">';
            echo '<p class="nume">' . $element['nume'] . '</p>';
            echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
            echo '<p class="descriere">' . $element['descriere'] . '</p>';
            echo '<img class="training__container__item__image" src="' . $element['imagine'] . '" alt="Imagine...">';
            echo '</div>';
        }
    }
}
if ($i == 2) {
    $fileName = $grupa_1 . ".json";
    $json = file_get_contents($fileName);
    $json_data = json_decode($json, true);

    if ($locatie == "Aer liber" || $locatie == "Acasa") {
        foreach ($json_data as $element) {
            if ($element['tip'] == "acasa") {
                echo '<div class="training__container__item">';
                echo '<p class="nume">' . $element['nume'] . '</p>';
                echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                echo '<p class="descriere">' . $element['descriere'] . '</p>';
                echo '<img class="training__container__item__image" src="' . $element['imagine'] . '" alt="Imagine...">';
                echo '</div>';
            }
        }
    } else {
        foreach ($json_data as $element) {
            echo '<div class="training__container__item">';
            echo '<p class="nume">' . $element['nume'] . '</p>';
            echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
            echo '<p class="descriere">' . $element['descriere'] . '</p>';
            echo '<img class="training__container__item__image" src="' . $element['imagine'] . '" alt="Imagine...">';
            echo '</div>';
        }
    }
    $fileName = $grupa_2 . ".json";
    $json = file_get_contents($fileName);
    $json_data = json_decode($json, true);

    if ($locatie == "Aer liber" || $locatie == "Acasa") {
        foreach ($json_data as $element) {
            if ($element['tip'] == "acasa") {
                echo '<div class="training__container__item">';
                echo '<p class="nume">' . $element['nume'] . '</p>';
                echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
                echo '<p class="descriere">' . $element['descriere'] . '</p>';
                echo '<img class="training__container__item__image" src="' . $element['imagine'] . '" alt="Imagine...">';
                echo '</div>';
            }
        }
    } else {
        foreach ($json_data as $element) {
            echo '<div class="training__container__item">';
            echo '<p class="nume">' . $element['nume'] . '</p>';
            echo '<p class="descriere">' . 'Repetari: ' . $element['repetari'] . '</p>';
            echo '<p class="descriere">' . $element['descriere'] . '</p>';
            echo '<img class="training__container__item__image" src="' . $element['imagine'] . '" alt="Imagine...">';
            echo '</div>';
        }
    }
}

?>