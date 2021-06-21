<?php
$error = NULL;
session_start();

include("connection.php");
include("function.php");

if (isset($_POST['submit'])) {

    //Get form data
    $u = $_POST['u'];
    $p = $_POST['p'];
    $p2 = $_POST['p2'];
    $e = $_POST['e'];
    $g = $_POST['g'];
    $v = $_POST['v'];

    if (strlen($u) < 5) {
        $error = "<h1>Your username must be at least 5 characters!</h1>";
    } elseif ($p2 != $p) {
        $error = "<h1>Your passwords do not match</h1>";
    } else {
        //Form is valid

        //connect to db
        $mysqli = new MySQLi('localhost', 'root', '', 'login_db');

        $u = $mysqli->real_escape_string($u);
        $p = $mysqli->real_escape_string($p);
        $p2 = $mysqli->real_escape_string($p2);
        $e = $mysqli->real_escape_string($e);
        $p = md5($p);

        $vkey = md5(time() . $u);

        $insert = $mysqli->query("INSERT INTO users(user_name,password,email,vkey,gen,varsta) VALUES ('$u','$p','$e','$vkey','$g','$v')");

        if ($insert) {
            //send email
            $to = $e;
            $subject = "Email Verification";
            $message = "<a href='http://localhost/verify.php?vkey=$vkey'>Register Account</a>";
            $headers = "From: popescusebi1234@yahoo.com  \r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            mail($to, $subject, $message, $headers);
            //            echo "<h2>Registration complete .Please check email.</h2>";
            echo "<h1 style='color:blue;text-align:center;'>Registration complete .Please check email.</h1>";
            //            header('location:thankyou.php');

        } else {
            echo $mysqli->error;
        }
    }
}

?>