<?php
$error=NULL;
session_start();

include("connection.php");
include("function.php");

if(isset($_POST['submit'])){
    
    //Get form data
    $u=$_POST['u'];
     $p=$_POST['p'];
     $p2=$_POST['p2'];
     $e=$_POST['e'];
    $g=$_POST['g'];
     $v=$_POST['v'];
    
    if(strlen($u)<5){
        $error="<h1>Your username must be at least 5 characters!</h1>";
    }elseif($p2!=$p){
        $error="<h1>Your passwords do not match</h1>";
    }else{
        //Form is valid
        
        //connect to db
        $mysqli= NEW MySQLi ('localhost','root','','login_db');
        
        $u=$mysqli->real_escape_string($u);
         $p=$mysqli->real_escape_string($p);
       $p2=$mysqli->real_escape_string($p2);
       $e=$mysqli->real_escape_string($e);
       
        $vkey=md5(time().$u);
        
        $insert= $mysqli->query("INSERT INTO users(user_name,password,email,vkey,gen,varsta) VALUES ('$u','$p','$e','$vkey','$g','$v')");
        
        if($insert){
           //send email
            $to=$e;
            $subject="Email Verification";
            $message= "<a href='http://localhost/verify.php?vkey=$vkey'>Register Account</a>";
            $headers ="From: popescusebi1234@yahoo.com  \r\n";
            $headers .="MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
           mail($to,$subject,$message,$headers);
//            echo "<h2>Registration complete .Please check email.</h2>";
            echo "<h1 style='color:blue;text-align:center;'>Registration complete .Please check email.</h1>";
//            header('location:thankyou.php');
            
        }else{
            echo $mysqli->error;
        }
    }
    
}




?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="registration.css">
  </head>
  <body>
    
       <div id="sideNav">
      <nav>
        <ul>
          <li><a href="epic.php">HOME</a></li>
         </ul>
    </nav>
    </div>
    
            <div id="menuBtn">
                <img src="poze/menu.png" id="menu">
                </div>
<div class="contact-form">

        <form method="post">
            <h1>Registration</h1>
             <div class="txtb">
              <label>User Name :</label>
              <input type="text" name="u" value="" placeholder="Enter Your UserName">
             </div>

            <div class="txtb">
                 <label>Password :</label>
             <input type="password" name="p" value="" placeholder="Enter Your Password">
            </div>
            <div class="txtb">
                 <label>Repeat Password :</label>
             <input type="password" name="p2" value="" placeholder="Enter Your Password">
            </div>
            
             <div class="txtb">
              <label>Email :</label>
              <input type="email" name="e" value="" placeholder="Enter Your Email">
                </div>
             <div class="txtb">
                 
              <label>Gen :</label>
              <input type="text" name="g" value="" placeholder="Enter Your Gen">
             </div>
            
             <div class="txtb">
              <label>Varsta :</label>
              <input type="text" name="v" value="" placeholder="Enter Your Age">
             </div>
            
            <a class="btn">
            <input id="button" type="submit" value="Signup" name="submit" required/>
            
            </a>
             <a href = "login.php">Click to Login!</a>
        </form>
  </div>
      
      <script>
      var menuBtn =document.getElementById("menuBtn")
      var sideNav =document.getElementById("sideNav")
      var menu =document.getElementById("menu")
      sideNav.style.right = "-250px";
      
      menuBtn.onclick=function(){
          if(sideNav.style.right=="-250px"){
              sideNav.style.right = "0";
              menu.src="poze/close.png";
          }
          else{
               sideNav.style.right = "-250px";
              menu.src="poze/menu.png";
          }
      }
      var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 1000,
	speedAsDuration: true
});
      
      </script>
      <?php
     echo $error;
      ?>
  </body>
</html>
