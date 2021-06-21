<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Out - Login</title>
  <link rel="stylesheet" href="css/training.css">
</head>

<body>

  <header class="training__header">
    <div>
      Workout Generator
    </div>
    <a class="training__header__btn" href="login.php">
      Autentificare
    </a>
    <a class="training__header__btn" href="classment.php">
      Clasament
    </a>
  </header>

  <img src="poze/logo.jpg" class="logo" alt="Logo-ul aplicației">

  <div id="box">
    <form class="training__form" action="login.php" method="POST">
      <h1 class="training__title">Autentificare</h1>
      <input class="training__input" name="email" type="email" placeholder="Email">
      <input class="training__input" type="password" name="password" placeholder="Parolă">
      <input class="training__btn" type="submit" name="submit" value="Autentificare">
      <?php
        require_once "functii_php/login_function.php";
      ?>
      <a class="training__btn" href="registration.php">Nu ai cont? Creează aici!</a>
    </form>
  </div>


</body>

</html>