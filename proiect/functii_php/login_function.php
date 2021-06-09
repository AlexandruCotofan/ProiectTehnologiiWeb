<?php
session_start();

include("connection.php");
include("function.php");
 
if($_SERVER['REQUEST_METHOD']=="POST")
  
{
    //something was posted
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email)&& !empty($password))
    {
        //read from db
        $query="select * from users where email ='$email' limit 1";
        $result=mysqli_query($con,$query);
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);

                   if($user_data['password'] === $password)
                   {
                     $_SESSION['user_id']=$user_data['user_id'];
                       header("Location: epic.php");
                       die;
                   }
            }
        }
          echo "<h2 style='color:#ff0000;text-align:center;'>Email sau parolă incorecte!</h2>";
    }
    else
    {
        echo "<h2 style='color:#ff0000;text-align:center;'>Email sau parolă incorecte!</h2>";
    }
}
?>