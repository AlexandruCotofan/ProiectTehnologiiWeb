<?php
session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users where email='$email'";
  $result = $con->query($sql);
  while ($row = $result->fetch_assoc()) {
    $amin = $row["verified"];
  }
  if ($amin == 0) {
    header('Location: error.php');
    die;
  } else if (!empty($email) && !empty($password)) {
    $sql = "delete FROM curent";
    $result = $con->query($sql);
    $sql = "select * FROM users where email='$email'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
      $amin = $row["user_name"];
    }
    $p = md5($password);
    $sql = "select * FROM users where email='$email'";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
      $parolabd = $row["password"];
    }
    $sql = "insert into curent (email,nume) values('$email','$amin')";
    $result = $con->query($sql);

    //read from db
    $query = "select * from users where email ='$email' limit 1";
    $result = mysqli_query($con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        // if($user_data['password'] === $password)
        if ($parolabd === $p) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: epic.php");
          die;
        }
      }
    }

    echo "<h2 style='color:blue;text-align:center;'>Email or password not found!</h2>";
  } else {
    echo "<h2 style='color:blue;text-align:center;'>Email or password not found!</h2>";
  }
}


?>