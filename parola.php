
 
<form action="md5.php" method="post">
<input type="text" name="password">
<br>
<input type="submit" >
</form>

<?php   
$password= "pass123";   
 
if (isset($_POST['password']) && !empty($_POST['password']))
{
$new_password=$_POST['password'];
     
    if(md5($new_password)==md5($password))
    {
        echo "<br> Correct password ";
    }
    else{
        echo "<br> Incorrect password ";
    }
}
 
?>  