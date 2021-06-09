<?php

if (isset($_GET['vkey'])) {
    //Process Verification
    $vkey = $_GET['vkey'];
    $mysqli = new MySQLi('localhost', 'root', '', 'login_db');

    $resultSet = $mysqli->query("select verified,vkey from users where verified=0 and vkey = '$vkey' limit 1");

    if ($resultSet->num_rows == 1) {
        //validate email
        $update = $mysqli->query("update users set verified=1 where vkey = '$vkey' limit 1");

        if (!$update) {
            echo $mysqli->error;
        }
        echo "<h2>Cont verificat cu succes!</h2>";
    } else {
        echo "<h2>Cont invalid sau deja verificat</h2>";
    }
} else {
    die("Something went wrong");
}

?>