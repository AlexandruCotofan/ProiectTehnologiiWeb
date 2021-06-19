<?php
session_start();

include("connection.php");
include("function.php");
 
if($_SERVER['REQUEST_METHOD']=="POST")
  
{
    //something was posted
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM users where email='$email'";
       $result = $con->query($sql);
        while($row = $result->fetch_assoc()) {
        $amin=$row["verified"];
      }
        if($amin==0){
            header('Location: error.php');
            die;
        }
    else if(!empty($email)&& !empty($password))
    {
         $sql = "delete FROM curent";
       $result = $con->query($sql);
         $sql = "select * FROM users where email='$email'";
       $result = $con->query($sql);
         while($row = $result->fetch_assoc()) {
        $amin=$row["user_name"];
      }
       $p = md5($password); 
       $sql = "select * FROM users where email='$email'";
       $result = $con->query($sql);
         while($row = $result->fetch_assoc()) {
        $parolabd=$row["password"];
      }
        $sql = "insert into curent (email,nume) values('$email','$amin')";
       $result = $con->query($sql);
      
        //read from db
        $query="select * from users where email ='$email' limit 1";
        $result=mysqli_query($con,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);

                   // if($user_data['password'] === $password)
                    if($parolabd === $p)
                   {
                     $_SESSION['user_id']=$user_data['user_id'];
                       header("Location: epic.php");
                       die;
                   }
            }
        }
        
          echo "<h2 style='color:blue;text-align:center;'>Email or password not found!</h2>";
    }
    
    else
    {
        echo "<h2 style='color:blue;text-align:center;'>Email or password not found!</h2>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Login</title>
    <link rel = "stylesheet" href = "training.css">
</head>
<body>
    <img src="poze/logo.jpg" class="logo">
  
    
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href = "epic.php">HOME</a></li>
                <li><a href = "classment.php">CLASAMENT</a></li>
            </ul>
        </nav>
    </div>
    
     <div id="box">
        <form class="training__form" action="login.php" method="POST">
            <h1 class = "training__title">Login</h1>
            <input class = "training__input" name="email" type="email"  placeholder="Email">
            <input class = "training__input" type="password" name="password" placeholder="Password">
            <input class = "training__btn" type="submit" name="submit" value="Login">
            <a href = "registration.php">Nu ai cont? Creează aici!</a>
        </form>
    </div>

   
</body>
</html>