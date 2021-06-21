<?php
include("connection.php");
    include("alba.php");
$message='';
$error='';
$user_data=check_login($con);
//$emailu=$user_data['email'];
if(isset($_POST["submit"]))
{
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $name= $_POST['name'];
 $mesaj=$_POST['mesaj'];

$sql = "insert into feedback (name,mesaj) values ('$name','$mesaj')";
$result = $conn->query($sql);
    function get_data()
{
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql="SELECT name,mesaj from feedback";
    $result=$conn->query($sql);
    $data=array();
    while($row=mysqli_fetch_array($result))
    {
        $data[]=array(
        'name'   => $row["name"],
        'mesaj'  =>$row["mesaj"]
        
        );
    }
    return json_encode($data);
}



$file_name='mesaj'. '.json';
file_put_contents($file_name,get_data());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out - Generator</title>
    <link rel = "stylesheet" href = "css/training.css">
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
    
    <div id="menuBtn">
        <img src="poze/menu.png" id="menu">
    </div>
    <br/>

    <div class = "training__form" style="width:500px;" >
        <h3 align = "">FEEDBACKUL ESTE ANONIM</h3>
        <form method="post">
            <?php
            if(isset($error))
            {
                echo $error;
            }
            ?>
            <label>Name:</label>
            <input type = "text" name="name" class = "training__btn" /><br/>
            <label>Mesaj:</label>
            <input type = "text" name="mesaj" class = "training__btn" /><br/>
            <input type = "submit" name="submit" value="Trimite" class = "training__btn" /><br/>
             <?php
            if(isset($message))
            {
                echo $message;
            }
            ?>
       
    </form>
    </div>
    <br/>
    
    
    
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
</body>
</html>