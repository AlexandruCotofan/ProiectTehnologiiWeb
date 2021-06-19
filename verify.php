<?php
if(isset($_GET['vkey'])){
    //Process Verification
    $vkey= $_GET['vkey'];
     $mysqli= NEW MySQLi ('localhost','root','','login_db');
    
    $resultSet=$mysqli->query("select verified,vkey from users where verified=0 and vkey = '$vkey' limit 1");
    
    if($resultSet->num_rows == 1){
        //validate email
        $update=$mysqli->query("update users set verified=1 where vkey = '$vkey' limit 1");
        
        if(!$update){
            echo $mysqli->error;
        }
    }else{
        header("error.php");
        die;
        
//        echo "This account is invalid or already verified";
        
    }
    
}else{
    die("Something went wrong");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?
                family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>
<body >
    <section id="banner">
      <img src="poze/logo.jpg" class="logo">
      <div class="banner-text">
           <h2>Acest cont a fost verificat cu succes!</h2>
          <p>Va rugam sa va logati!</p>
          <p2>   <a href="login.php">Login</a>  </p2>
      </div>
  </section>
    
    </body>
</html>